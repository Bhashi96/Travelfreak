<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
        
        
            <div class="container">
            <a href="" class="navbar-brand"><img src="/images/smlogo.jpg" class="mx-auto d-block image-fluid" alt=""></a>
                <a class="navbar-brand" href="{{ url('/') }}">
                    Travel Freak
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item "><a href="/" class="nav-link disable">Home</a>  </li>
                    
                    <li class="nav-item"><a href="/map" class="nav-link">Tourist Map</a>  </li>
                    <li class="nav-item"><a href="/contact" class="nav-link">About Us</a>  </li>
                   
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                        @if(Auth::user()->user_type=='gud')
                        <li class="nav-item">
                                    <a class="nav-link" href="/gudhome">{{ __('Guide home') }}</a>
                          </li>

                        @endif
                        
                        @if(Auth::user()->user_type=='drv')
                        <li class="nav-item">
                                    <a class="nav-link" href="/drvhome">{{ __('Driver home') }}</a>
                          </li>

                        @endif
                        
                        @if(Auth::user()->user_type=='eqp')
                        <li class="nav-item">
                                    <a class="nav-link" href="/eqphome">{{ __('Eqp_home') }}</a>
                          </li>

                        @endif
                        
                        @if(Auth::user()->user_type=='tou')
                        <li class="nav-item">
                                    <a class="nav-link" href="/home">{{ __('User home') }}</a>
                          </li>

                        @endif
                        @if(Auth::user()->user_type=='admin')
                        <li class="nav-item">
                                    <a class="nav-link" href="/admin_home">{{ __('Admin home') }}</a>
                          </li>

                        @endif
                       
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                              


                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
