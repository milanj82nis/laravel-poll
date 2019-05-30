@extends('layouts/app')

@section('title' , 'All Polls')

@section('content')



<div class="container">


<br>

    <section id="content">
      <div class="container">
        <!-- Default table -->
        <div class="row">
          <div class="span12">
            <h4>All polls</h4>
              @if(count($all_polls ) > 0 )
            <table class="table">
              <thead>
                <tr>
                  <th width="10%">
                    #
                  </th>
                  <th width="50%">
                    Title
                  </th>
                  <th width="20%">
                    User
                  </th>                  
                  <th width="20%" >
                    Created
                  </th>
                  
                </tr>
              </thead>
              <tbody>
                  @foreach($all_polls as $all_poll )

                <tr>
                  <td>
                    {{ $all_poll -> id  }}
                  </td>
                  <td>
                    <a href="/show-poll/{{ $all_poll -> id  }}">{{ $all_poll -> title  }}</a>
                  </td>
                  <td>
                    {{ $all_poll -> user -> name }}
                  </td>
                  <td>
                   {{ $all_poll -> created_at -> diffForhumans() }}
                  </td>
                </tr>
@endforeach
<tr>
<td colspan="7">


{{ $all_polls ->onEachSide(4)->links() }}
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









</div><!-- container -->

@endsection