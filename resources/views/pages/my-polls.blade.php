@extends('layouts/app')

@section('title' , 'My Polls')

@section('content')



<div class="container">


<br>

    <section id="content">
      <div class="container">
        <!-- Default table -->
        <div class="row">
          <div class="span12">
            <h4>Active polls</h4>
              @if(count($active_polls ) > 0 )
            <table class="table">
              <thead>
                <tr>
                  <th>
                    #
                  </th>
                  <th>
                    Title
                  </th>
                  <th colspan="2">
                    Action
                  </th>
                  
                </tr>
              </thead>
              <tbody>
                  @foreach($active_polls as $active_poll )

                <tr>
                  <td>
                    {{ $active_poll -> id  }}
                  </td>
                  <td>
                    <a href="/show-poll/{{ $active_poll -> id  }}">{{ $active_poll -> title  }}</a>
                  </td>
                  <td>
                    <a href="/edit-poll/{{ $active_poll -> id  }}" class="btn btn-success">Change Poll</a
                  </td>
                  <td>
                   {!!  Form::open([ 'route' => [ 'PollDestroy' ,$active_poll -> id ] , 'method' => 'delete']) !!}

{!!  Form::submit('Delete' , [ 'class' => 'btn btn-danger']) !!}



{!! Form::close() !!}
                  </td>
                </tr>
@endforeach
<tr>
  <td colspan="7">
{{ $active_polls ->onEachSide(4)->links() }}


  </td>
</tr>
              </tbody>
            </table>



            @else
<p>You dont have active polls.</p>
<a href="{{ route('SubmitPoll') }}" class="btn btn-success">Create poll</a>


            @endif
          </div>


        </div>



      </div>
    </section>






    <section id="content">
      <div class="container">
        <!-- Default table -->
        <div class="row">
          <div class="span12">
            <h4>Inactive polls</h4>
              @if(count($not_active_polls ) > 0 )
            <table class="table">
              <thead>
                <tr>
                  <th>
                    #
                  </th>
                  <th>
                    Title
                  </th>
                  <th colspan="2">
                    Action
                  </th>
                  
                </tr>
              </thead>
              <tbody>
                  @foreach($not_active_polls as $not_active_poll )

                <tr>
                  <td>
                    {{ $not_active_poll -> id  }}
                  </td>
                  <td>
                    <a href="/show-poll/{{ $not_active_poll -> id  }}">{{ $not_active_poll -> title  }}</a>
                  </td>
                  <td>
                    <a href="/edit-poll/{{ $not_active_poll -> id  }}" class="btn btn-success">Change Poll</a
                  </td>
                  <td>
                   {!!  Form::open([ 'route' => [ 'PollDestroy' ,$not_active_poll -> id ] , 'method' => 'delete']) !!}

{!!  Form::submit('Delete' , [ 'class' => 'btn btn-danger']) !!}



{!! Form::close() !!}
                  </td>
                </tr>
@endforeach
<tr>
  <td colspan="7">
{{ $not_active_polls ->onEachSide(4)->links() }}


  </td>
</tr>
              </tbody>
            </table>



            @else
<p>You dont have inactive polls.</p>
<a href="{{ route('SubmitPoll') }}" class="btn btn-success">Create poll</a>


            @endif
          </div>


        </div>



      </div>
    </section>












</div><!-- container -->

@endsection