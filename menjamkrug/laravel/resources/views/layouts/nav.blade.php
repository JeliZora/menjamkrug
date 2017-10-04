
	
	<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
						<a class="navbar-brand" href="#"><b>Menjam krug</b></a>
				</div>
				
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li class = "{{Request::is('/') ? 'active' : ''}}">  <a href="{{ url('/') }}">Home</a></li>
						<li class = "{{Request::is('oglasi') ? 'active': ''}}"><a href="{{ url('/oglasi') }}">Oglasi</a></li>
						<li class = "{{Request::is('strana/uputstvo') ? 'active': ''}}"><a href="{{ url('/strana/uputstvo') }}">Uputstvo</a></li>
						<li class = "{{Request::is('strana/pravilaponasanja') ? 'active': ''}}"><a href="{{ url('/strana/pravilaponasanja') }}">Pravila ponašanja</a></li>
						
						
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Logovanje</a></li>
                            <li><a href="{{ route('register') }}">Registracija</a></li>
                        @else
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
								<img src="uploads/avatars/{{ Auth::user()->slika }}  " style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%"></img>
                         {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
									<li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>&nbsp Profil</a></li>
                                    @if ( Auth::user()->name=='glavnigazda')
										<li><a href="{{ route('postoviadmin') }}"><i class="fa fa-btn fa-book"></i>&nbsp Svi postovi</a></li>
									@else
										<li><a href="{{ route('postoviuser') }}"><i class="fa fa-btn fa-book"></i>&nbsp Moji postovi</a></li>
									<li><a href="{{ route('categories.index') }}"><i class="fa fa-list-alt"></i>&nbsp Kategorije</a></li>
									
									@endif
									<li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           Izloguj me
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
				</div>
			</div>
		</nav>