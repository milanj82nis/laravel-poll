   @extends('layouts.app')
   @section('title' , 'Home page ')

   @section('content')
	    <section class="callaction">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="big-cta">
              <div class="cta-text">
                <h3>We've created more than <span class="highlight"><strong>5000 websites</strong></span> this year!</h3>
              </div>
              <div class="cta floatright">
                <a class="btn btn-large btn-theme btn-rounded" href="#">Request a quote</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-briefcase icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Corporate business</h6>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-desktop icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Responsive theme</h6>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-beaker icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Coded carefully</h6>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-coffee icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Sit and enjoy</h6>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <!-- Portfolio Projects -->
        <div class="row">
          <div class="span12">
            <h4 class="heading">Latest 10 <strong>polls</strong></h4>
            <div class="row">
              <section id="projects">
 
 <section id="content">
      <div class="container">
        <!-- Default table -->
        <div class="row">
          <div class="span12">
            
              @if(count($latest_polls ) > 0 )
            <table class="table">
              <thead>
                <tr>
                  <th>
                    #
                  </th>
                  <th>
                    Title
                  </th>
                  <th >
                    User
                  </th>                  
                  <th >
                    Created
                  </th>
                  
                </tr>
              </thead>
              <tbody>
                  @foreach($latest_polls as $latest_poll )

                <tr>
                  <td>
                    {{ $latest_poll -> id  }}
                  </td>
                  <td>
                    <a href="/show-poll/{{ $latest_poll -> id  }}">{{ $latest_poll -> title  }}</a>
                  </td>
                  <td>
                    {{ optional(  $latest_poll ->  user )-> name }}
                  </td>
                  <td>
                   {{ $latest_poll -> created_at -> diffForhumans() }}
                  </td>
                </tr>
@endforeach
              </tbody>
            </table>



            @else
<p>

There are currently no active polls.</p>
<a href="{{ route('SubmitPoll') }}" class="btn btn-success">Create poll</a>


            @endif
          </div>


        </div>



      </div>
    </section>


              </section>
            </div>
          </div>
        </div>
        <!-- End Portfolio Projects -->
        <!-- divider -->




        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <div class="row">
          <div class="span12">
            <h4>Very satisfied <strong>clients</strong></h4>
            <ul id="mycarousel" class="jcarousel-skin-tango recent-jcarousel clients">
              <li>
                <a href="#">
          <img src="img/dummies/clients/client1.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="img/dummies/clients/client2.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="img/dummies/clients/client3.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="img/dummies/clients/client4.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="img/dummies/clients/client5.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="img/dummies/clients/client6.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="img/dummies/clients/client1.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="img/dummies/clients/client2.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="img/dummies/clients/client3.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="img/dummies/clients/client4.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="img/dummies/clients/client5.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="img/dummies/clients/client6.png" class="client-logo" alt="" />
          </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="bottom">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="aligncenter">
              <div id="twitter-wrapper">
                <div id="twitter">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection