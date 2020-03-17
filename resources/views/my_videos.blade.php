
<!DOCTYPE HTML>
<html>
	<head>
		<title>Video tube</title>
		<!-- <link rel="shortcut icon" type="image/x-icon" href="videocss/images/pageicon.png" /> -->
		<link href="../videocss/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Videostube iphone web template, Android web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<link href='//fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
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
	.btn {
	background-color:rgb(200,0,0,0.9);
	border: none;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 4px 2px;
	cursor: pointer;
	border-radius: 50%;

	}
    </style>
	<body>

	<!----start-wrap---->
	<div class="wrap">
		<!----start-Header---->
		<div class="header">
			<!----start-Logo---->
			<div class="logo">
				<a href="{{route('Youtube.index')}}"><img src="videocss/images/logo.png" title="logo" /></a>
			</div>
			<!----End-Logo---->
			<!----start-top-nav---->
				<div class="top-nav">
				<ul>
					<li><a href="{{route('Youtube.index')}}">Home</a></li>

					<li><a href="{{route('Youtube.create')}}">upload</a></li>
					
				   <li><a href="{{url('/profile')}}">Profile</a></li>

					
				
					@guest
					<li class="dropdown"><a href="{{route('login')}}">Login</a></li>
					@if (Route::has('register'))
					<li><a href="{{route('register')}}">Register</a></li>
					@endif
					@else
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
		<div class="categories-list">
				<div class="content-sidebar">
		    		<h4><img src="images/fi.png" alt="" />Categories</h4>
						<ul>
						<li><a href="{{route('Youtube.index')}}">Home</a></li>
							@foreach($data as $row)
							<li><a href="{{route('categories.show',$row->id)}}">
 
							{{$row->category_name}}</a></li>
							@endforeach
							
						</ul>
						<div class="clear"> </div>
		    	</div>
				
			</div>

		
		<div class="content">
			<div class="left-content">
				<div class="searchbar">
					<div class="search-left">
						<p>Latest Video Form VideosTube</p>
					</div>
					<div class="search-right">
						<form>
							<input type="text"><input type="submit" value="" />
						</form>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="box">
				<div class="grids">
				@foreach ($data2 as $row)
					<div class="grid">
					
						
						<a href="{{route('Youtube.show',$row->id)}}"><img src="{{ URL::to('/') }}/images/{{ $row->image }}"  width="250px" height="250px"/></a>
						<h3>{{$row->name}}</h3>
						
						<div class="grid-info">
							<div class="video-share">
								<ul>
									<li><a href="#"><img src="videocss/images/likes.png" title="links" /></a></li>
									<li><a href="#"><img src="videocss/images/link.png" title="Link" /></a></li>
									<li><a href="#"><img src="videocss/images/views.png" title="Views" /></a></li>
									
									
									<form action="{{route('Youtube.destroy', $row->id)}}" method="POST">
									@csrf
									
    								@method('DELETE')
									<li><button class="btn" type="submit">Delete</button></li>
								
                                   
								</ul>
							</div>
							<div class="video-watch">
							
								
							
							</div>
							<div class="clear"> </div>
							<div class="lables">
								
							</div>
						</div>
					</div>
					
					@endforeach
				</div>
				
				<div class="clear"> </div>
				
				
				
				<div class="clear"> </div>
				
				<div class="clear"> </div>
			</div>
			
		</div>
		
		
		<div class="clear"> </div>
		</div>
		<div class="clear"> </div>
		</div>
		    
			<!-- <div class="footer"> -->
			<div class="copy-right">
			<p>&#169 2020 Videostube. All Rights Reserved</p>
		</div>
	</div>
	<!----End-wrap---->
	</body>
</html>
