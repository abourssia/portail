<header id="header">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
								<span class="sr-only">Toggle navigation</span>
								<span class="fa fa-bars"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                            <!--Start Logo -->
							<div class="logo-nav">
								<a href="/">
									<img class="logo" src="{{asset('assets/home/images/atrst-logo.png')}}" alt="Company logo" />
								</a>
							</div>
                            <!--End Logo -->
							<div class="clear-toggle"></div>
							<div id="main-menu" class="collapse scroll navbar-right">
								<ul class="nav">
								<li><a href="{{ url('/home') }}" class="cool-link text-sm text-gray-700 dark:text-gray-500 underline">ACCUEIL</a></li>

								@if (Route::has('login'))
										@auth
											
				<li><a href="{{ url('/chercheur') }}" class="cool-link text-sm text-gray-700 dark:text-gray-500 underline">DASHBOARD</a></li>
				<li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="position: sticky">
							                        <a style="color:black" class="dropdown-item nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        </div>
      </li>
											@else
											<li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">SE CONNECTER</a></li>

												@if (Route::has('register'))
											<li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">S'INSCRIRE</a></li>
												@endif
										@endauth
								@endif
                                    

										
								</ul>
							</div><!-- end main-menu -->
						</div>
					</div>
				</div>
			</header>