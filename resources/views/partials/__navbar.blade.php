  <header>
      <div class="container ">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
        </div>
        <!-- end toggle link -->
        <div class="row nomargin">
          <div class="span12">
            <div class="headnav">
              <ul>

              </ul>
            </div>

          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="{{ route('welcome') }}"><img src="{{ asset('images/logo.png') }}"  alt="" class="logo" /></a>
              
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="{{ route('welcome') }}">Home </a></li>

                    @guest


                    <li class="dropdown">
                      <a href="#">Welcome back , Guest <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('login') }}" > Sign in</a></li>
                        <li><a href="{{ route('register') }}" > Sign up</a></li>
                        <li><a href="{{ route('password.request') }}" >Reset password</a></li>
                      </ul>
                    </li>
                    <li class="{{ (request()->is('all-polls')) ? 'active' : '' }}"><a href="{{ route('allPolls') }}">All polls </a></li>
                    <li class="{{ (request()->is('about')) ? 'active' : '' }}"><a href="{{ route('about') }}">About </a></li>
                    <li class="{{ (request()->is('contact')) ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact </a></li>
                    @else

                    <li class="dropdown">
                      <a href="#">Welcome back , {{ Auth::user()->name }} <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">

                        
                        <li><a href="{{ route('MyPolls') }}" > My polls</a></li>
                        <li><a href="{{ route('SubmitPoll') }}" > Create poll</a></li>
                        <li>
                          
          <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
          </a>

      <form id="logout-form" action="{{ route('logout') }}"
                             method="POST" style="display: none;">
                                        @csrf
      </form>
                      </ul>
                    </li>
                    <li class="{{ (request()->is('all-polls')) ? 'active' : '' }}"><a href="{{ route('allPolls') }}">All polls </a></li>

                    <li class="{{ (request()->is('about')) ? 'active' : '' }}"><a href="{{ route('about') }}">About </a></li>
                    <li class="{{ (request()->is('contact')) ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact </a></li>

                    @endguest




                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->