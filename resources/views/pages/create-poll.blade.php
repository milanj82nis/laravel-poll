@extends('layouts/app')

@section('title' , 'Create poll')

@section('content')



<div class="container">



<h1 class="text-center">Create poll</h1>






<div class="container">
            <br />
            <br />
            
            <div class="form-group">
                <form name="add_name" id="add_name" method="POST" action="{{ route('SubmitPoll') }}">
                      @csrf
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dynamic_field">


<tr>
    <td>


  <label class="col-md-4 control-label" for="title">Poll title</label>  
  
  {!!  Form::text( 'title' , null , [ 'class' => 'form-control input-md' , 'placeholder' => 'Poll title' , 'required' => 'required']) !!}

    
</td></tr>

<tr>
    <td>


<label class="col-md-4 control-label" for="content">Activate poll</label>  
 <select name="open" class="form-control">
  <option value="1">Active</option>
  <option value="0">Not active</option>



</select> 

    </td>
</tr>
<tr><td>
  <label class="col-md-4 control-label" for="image">Poll description</label>  
  {!!  Form::text( 'description' , null , [ 'class' => 'form-control input-md' , 'placeholder' => 'Poll Description' , 'required' => 'required']) !!}
    
 </td></tr>



                            <tr>
                                <td>
                                      <label class="col-md-4 control-label" for="image">Poll answers</label>  
<input type="text" name="options[]" placeholder="Enter your option" class="form-control name_list" /></td>
                                <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                            </tr>









                        </table>
                       {!!  Form::submit( 'Add poll' , [ 'class'=> 'btn btn-default']) !!}
                    </div>
                </form>
            </div>
        </div>


<script>
$(document).ready(function(){
    var i=1;
    $('#add').click(function(){
        i++;
        $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="options[]" placeholder="Enter your option" class="form-control name_list" required="required"/></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
    });
    
    $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id"); 
        $('#row'+button_id+'').remove();
    });
    
   
    
});
</script>










</div><!-- container -->

@endsection