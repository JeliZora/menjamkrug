 <!DOCTYPE html>

<head>
	<html lang="en">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
	
    <title>MENJAM KRUG</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!-- Custom styles for this template -->
    
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
	 <link href="{{ asset('css/menjamkrug.css') }}" rel="stylesheet" type="text/css">
    <style>

   h1{ text-align: center;}
  h1{color: white;
		font-size: 50px;
		text-shadow: 3px 3px 3px 	 #000000;
		 letter-spacing: 12px;
		}    
        </style>
  </head>
<body>

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
						<li class="active"><a href="{{ url('/') }}">Home</a></li>
						<li><a href="{{ url('/oglasi') }}">Oglasi</a></li>
						<li><a href="{{ url('/strana/uputstvo') }}">Uputstvo</a></li>
						<li><a href="{{ url('/strana/onama') }}">Pravila ponašanja</a></li>
						
						
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Logovanje</a></li>
                            <li><a href="{{ route('register') }}">Registracija</a></li>
                        @else
                            <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
								{{ Auth::user()->name }}<img src="/uploads/{{ Auth::user()->slika}}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                                 {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           Izloguj se
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
	<div class="container ">
		<img src="{{URL::asset('/images/k3.jpg')}}" style="position: absolute;left: 0px;top: 0px;z-index: -1" class="img-responsive" >
	 &nbsp;<h1 class="title">Menjam krug <br><br><i class="fa fa-book fa-spin fa-2x fa-fw" aria-hidden="true"></i> </h1>
	  
	</div> 
       <!-- Table Tennis icon by Icons8 -->
<img src="https://png.icons8.com/table-tennis/office/16" title="Table Tennis" width="16" height="16"> <a href="https://icons8.com">Icon pack by Icons8</a>        
<!-- Ping Pong icon by Icons8 -->
<img src="https://png.icons8.com/ping-pong/win8/26" title="Ping Pong" width="26" height="26">
    </body>
</html>
