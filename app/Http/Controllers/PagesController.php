<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\Poll;
use App\Option;
use Carbon\Carbon;
use Mail;
class PagesController extends Controller        {



/*
 postContact -   Šalje email poruku sa kontakt form  

*/
public function postContact( Request $request ){

       $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:10',
           


        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
            );
        


   $mail =    Mail::send('emails.contact-email', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('milanj31@gmail.com');
            $message->subject($data['subject']);
        });


    Session::flash('success' , 'Successfully sent email message.');
    return redirect()->route('contact');
}



/*
    
showPoll - prikazuje anketu 
*/
public function showPoll($id){



$poll = Poll::where( 'id' , $id ) -> first();

if(!$poll){

    return redirect() -> route('404');
}
$poll_options = Option::where('poll_id' , $id ) -> get();




    return view('pages/show-poll')->with( compact ('poll' , 'poll_options' ));
}


/*
    
editPollPost - menja anketu post metoda
*/
public function editPollPost( Request $request , $id ){

        $this -> validate( $request , [
            'title' => 'required',
            
            'description' => 'required',


        ]);


$polls = Poll::find($id);
$polls -> title = $request -> input('title');
$polls -> description = $request -> input('description');
$polls -> user_id = Auth::user()-> id ;
$polls -> open = $request -> input('open');

$polls -> save();

$polls->options()->delete();



  
  foreach($request -> options as $option => $value) {
    $options = new Option();
    $options->  title = $value ;
    $options -> vote = 0 ;
    $options -> poll_id = $polls -> id ;
    $options->save();
  }


 Session::flash( 'success' , 'Successfully changed poll.');
return redirect()->route('MyPolls');


}

/*
EditPoll - prikazuje stranu za editovanje ankete
*/

public function EditPoll($id){
$poll_detail = Poll::where('id' , $id )-> where('user_id' , Auth::user()-> id )->first();
if(!$poll_detail){

    return redirect() -> route('404');
}
$poll_id = $poll_detail-> id ;
$option_details = Option::where('poll_id' , $poll_id)->get();


return view('/pages/edit-poll' )-> with( compact('poll_detail' , 'option_details'));
}

/*
PollDestroy - brisanje anketa 
*/
    public function PollDestroy($id)
    {
        $poll = Poll::find($id);

        $poll -> delete();
        Session::flash('success' , 'Successfully deleted poll.');
        return redirect()->route('MyPolls');
    }
/*
voteNow - glasanje na anketi od strane korisnika
*/
public function voteNow (Request $request){


$option = Option::find($request -> name );
$old_votes = $option -> vote;
$new_votes = $old_votes + 1 ;
$option_id = $option -> id ;


$option->vote = $new_votes;

$option->save();
 Session::flash( 'success' , 'You have successfully voted.');
return redirect()->route('SuccessfulVote');

}

/*
getWelcome - prikazuje početnu stranu ( welcome.blade.php )
*/
	
    public function getWelcome(){
$active_polls = Poll::where('open' , 1 )->paginate(10);
$latest_polls = Poll::where('open' , 1 )-> orderBy('created_at' , 'desc') -> paginate(10);



    	return view('pages/welcome')->with(compact('active_polls' , 'latest_polls'));
    }

/*
getMyPolls - prikazuje vlastite ankete

*/
    public function getMyPolls(){

$active_polls = Poll::where('user_id' , Auth::user()->id  )-> where('open' , 1 )->paginate(10);
$not_active_polls = Poll::where('user_id' , Auth::user()->id )-> where('open' , 0 )->paginate(10);
    	return view('pages/my-polls')->with( compact('active_polls' , 'not_active_polls'));
    }


/*
getCreatePoll - prikazuje stranu za pravljenje anketa
*/
	
    public function getCreatePoll(){


    	return view('pages/create-poll');
    }

/*
postPoll - dodaje ankete 
*/
 public function postPoll(Request $request)
    {



        $this -> validate( $request , [
            'title' => 'required',
            
            'description' => 'required',


        ]);


$polls = new Poll;
$polls -> title = $request -> input('title');
$polls -> description = $request -> input('description');
$polls -> user_id = Auth::user()-> id ;
$polls -> open = $request -> input('open');

$polls -> save();


  //insert using foreach loop
  foreach($request -> options as $option => $value) {
    $options = new Option();
    $options->  title = $value ;
    $options -> vote = 0 ;
    $options -> poll_id = $polls -> id ;
    $options->save();
  }

 Session::flash( 'success' , 'Successfully added a poll.');
 return redirect()->route('MyPolls');

}
/*
 errorCode404 - prikazuje stranu error 404  ako neko ode na nepostojeću stranu
*/


    public function errorCode404()

    {
        

        return view('/errors/404');

    }


/*
    errorCode405 - prikazuje stranu error 405 metoda nije dozvoljena

*/

    public function errorCode405()

    {

        


        return view('/errors/405');

    }


/*
    
getAbout - prikazuje stranu About u glavni meni
*/
public function getAbout(){

    return view('pages/about');
}

/*
    getContact - prikazuje stranu Contact u glavni meni


*/
public function getContact(){

    return view('pages/contact');
}

/*
  getAllPolls - prikazuje sadržaj na stranu All polls na glavni meni  

*/
public function getAllPolls(){
    $all_polls = Poll::where('open' , 1 ) -> paginate(10);
    return view('pages/all-polls')->with( compact('all_polls'));
}

/*
 getSuccessfulVote -   prikazuje stranu za uspešno glasanje na anketi 

*/
public function getSuccessfulVote(){

    return view('landing/successful-vote');
}


/*
     getTermsConditions -   prikazuje stranu uslovi korišćenja u footeru


*/
public function getTermsConditions(){

    return view('pages/terms-conditions');
}

/*
    
     getPrivacyPolicy -   prikazuje stranu politika privatnosti u footeru

*/
public function getPrivacyPolicy(){

    return view('pages/privacy-policy');
}



}
