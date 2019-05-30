@extends('layouts/app')

@section('title' )

{{ $poll -> title }}
@endsection

@section('content')

<div class="container">
    <div class="row">


              <div class="span12">
                <h4>{{ $poll -> title }}</h4>
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#one" data-toggle="tab"><i class="icon-briefcase"></i> Poll</a></li>
                  <li><a href="#two" data-toggle="tab">Votes</a></li>

                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="one">
                    <form action="{{ route('voteNow' ,  $poll -> id )  }}" method="POST" name="">
    @csrf
        <div class="col-md-12">
            <div class="panel panel-primary">
                
                <div class="panel-body two-col">



@foreach($poll_options as $poll_option)

                    <div class="row">
                       

                        <div class="col-md-12">
                            <div class="">
                                <div class="checkbox">
    

  <label  >
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
    <input type="radio" name="name"  value="{{ $poll_option -> id }}" checked="checked">
  
    {{ $poll_option -> title }}
  </label>



                                </div>
                            </div>
                        </div>
                    </div>
@endforeach


                </div>
                <div class="panel-footer">
                    <input type="hidden" name="poll_id" value="{{ $poll -> id }}" >
                       {!!  Form::submit( 'Vote now' , [ 'class'=> 'btn btn-dark']) !!}

                </div>
            </div>
        </div></form>
        
                  </div>
                  <div class="tab-pane" id="two">
                    

  <div class="span12">
    <ol>
            @foreach ($poll_options as $vote_option)
<li >


Poll option: <strong>{{ $vote_option -> title }}</strong> |  Votes: <strong>{{ $vote_option -> vote }}</strong>
</li>
            @endforeach
</ol>
   
                
              </div>




















                  </div>
                  

                </div>
              </div>
              












    </div>
</div>














@endsection