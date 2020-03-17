
<!DOCTYPE HTML>
<html>
	<head>
		<title>Video tube</title>
		
	    <!-- <link rel="shortcut icon" type="image/x-icon" href="videocss/images/pageicon.png" />  -->
		<link href="../videocss/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Videostube iphone web template, Android web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<link href='//fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<script src="{{ asset('js/app.js') }}" defer></script>
		
	</head>
	<style>
			.copy-right {
			position: fixed;
			left: 0;
			bottom: 0;
			width: 100%;
			color: white; 
			text-align: center;
           }
    </style>
	<body>

	<!----start-wrap---->
	<div class="wrap">
		<!----start-Header---->
		<div class="header">
			<!----start-Logo---->
			<div class="logo">
			<h1></h1>
				<a href="{{route('Youtube.index')}}"><img src="../videocss/images/logo.png" title="logo" /></a>
			</div>
			<!----End-Logo---->
			<!----start-top-nav---->
				

				<div class="top-nav">
				<ul>
				    
					<li><a href="{{route('Youtube.index')}}">Home</a></li>
					

					@guest
					<li class="dropdown"><a href="{{route('login')}}">Login</a></li>
					
					@if (Route::has('register'))
					<li><a href="{{route('register')}}">Register</a></li>
					@endif
					@else
					<li><a href="{{route('Youtube.create')}}">upload</a></li>
					<li><a href="{{route('my_videos.index')}}">my videos</a></li>
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
									
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:">
                                        @csrf
                                    </form>
									
                                </div>
                            </li>
                        @endguest
				</ul>
			</div>
			<div class="clear"> </div>
			<!----End-top-nav---->
		</div>
		<!----End-Header---->
		
		<div class="clear"> </div>
		
		<div class="clear"> </div>
			<div class="clear"> </div>
		    	</div>
			</div>
			<div class="">
			@include('profile')
			</div>
		<div class="clear"> </div>
		</div>
		<div class="clear"> </div>
		</div>
		    
			<!-- <div class="footer"> -->
			<div class="copy-right">
			<p>&#169 2020 Videostube. All Rights Reserved </a></p>
		</div>
	</div>
	<!----End-wrap---->
	</body>
</html>
