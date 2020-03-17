
<!DOCTYPE HTML>
<html>
  <head>
    <title>Videostube Website Template </title>
    <link rel="shortcut icon" type="image/x-icon" href="images/pageicon.png" />
    <link href="{{URL::asset('videocss/css/style.css')}}" rel="stylesheet" type="text/css"  media="all" />
    <meta name="keywords" content="Videostube iphone web template, Android web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <link href='//fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdn.plyr.io/3.5.10/plyr.css" />
        <link href='fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
  <script src="https://cdn.plyr.io/3.5.10/plyr.js"></script>
        <script src="{{URL::asset('../js/jquery-1.11.1.min.js')}}"></script>
            

        

<style type="text/css">
    body{
    margin: 40px;
    }
    .copy-right {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      color: white; 
      text-align: center;
           }    

    button{
    cursor: pointer;
    outline: 0;
    color: #AAA;

    }

    .btn:focus {
    outline: none;
    }

    .green{
    color: green;
    }

    .red{
    color: red;
    }
</style>
  <style type="text/css">
/* This is purely for the demo */
.container {
max-width: 1040px;
margin: 0 auto;
}
.plyr {
border-radius: 4px;
margin-bottom: 15px;
}
</style>

 </head>
  <body>
    
  <!----start-wrap---->
  <div class="wrap">
    <!----start-Header---->
    <div class="header">
      <!----start-Logo---->
      <div class="logo">
            <a href="{{route('Youtube.index')}}"><img src="/videocss/images/logo.png" title="logo" /></a>
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
          <li><a href="{{url('/profile')}}">Profile</a></li>
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
        
    <div class="content">
      <div class="inner-page">
        <div class="searchbar">
          <div class="search-left">
            <p>Latest Video Form VideosTube</p>
          </div>
          
          <div class="clear"> </div>
        </div>
        <div class="title">
        <br>
               
          <ul>  
            <li> <video controls crossorigin playsinline poster="{{URL::to('/')}}/images/{{$member->image}}" id="player">
                            <source src="{{ URL::to('/') }}/videos/{{ $member->video }}" type="video/mp4" size="576">
                            <track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt" default>
                            <track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">
                            <a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" download></a>
                            </video>
                       </li>

                        
          </ul>
        </div>
        <div class="Description">
        <h2><a href="">{{ $member->name }}</a></h2>
        <br>
          <div class="view-links">
            <ul>
              <li><h4>Share on:</h4></li>
              <li><a href="#"><img src="/videocss/images/f1.png" title="facebook" /></a></li>
              <li><a href="#"><img src="/videocss/images/t1.png" title="Twitter" /></a></li>
              <li><a href="#"><img src="/videocss/images/s1.png" title="Google+" /></a></li>
            </ul>
            <ul class="comment1">
              <li><a href="#">{{ $query2 }}</a></li>
              <form method="post" action="{{ route('Comments.store' )}}" >
              @csrf
              <input type="hidden" name="id" value="{{ $member->id }}">
                            <input type="hidden" name="u_id" value="{{ Auth::user()->id }}">
              </form>

                            <li> <h3>{{ $query }}</h3>  </li>
                            <form method="post" action="{{ route('Likes.store' )}}" >
                        @csrf
                        <input type="hidden" name="id" value="{{ $member->id }}">
                        <input type="hidden" name="u_id" value="{{ Auth::user()->id }}">

                        <button class="btn" id="green"><span class="glyphicon glyphicon-thumbs-up" ></span>Like</button>

                       
                        </form>
                        <!--  -->
                        <form action="{{ route('Likes.destroy', $member->id) }}" method="post">
                        @csrf

                        @method('DELETE')
                        <button class="btn" id="red"><span class="glyphicon glyphicon-thumbs-up" ></span>Dislike</button>

                        </form>
              <li><a href="#"><img src="/videocss/images/re.png" title="report" /><span>Report</span></a></li>
            </ul>
          </div>
                    
                    
                   


          
          <div class="clear"> </div>
        </div>
        <div class="clear"> </div>
              
                <div class="clear"></div>
        <div class="video-details">
        <h4>{{ $member->desc }}</h4>

          <ul>
            <li><p>Uploaded on {{ $member->updated_at }} </a> by <a href="#"></a></p></li>
                        <li>@include('comment')</li>
            </ul>
          
        </div>
        <div class="clear"> </div>
      </div>
                
    <div class="right-content">
      <div class="popular">
        <h3>Treanding Videos</h3>
        <p><img src="/videocss/images/l1.png" title="likes" /></p>
        <div class="clear"> </div>
      </div>
      <div class="grid1">
            <a href="#"><img src="/videocss/images/g7.jpg" title="video-name" /></a>
            <div class="time1">
              <span>2:50</span>
            </div>
            
            <div class="grid-info">
              <div class="video-share">
                <ul>
                  <li><a href="#"><img src="/videocss/images/likes.png" title="links" /></a></li>
                  <li><a href="#"><img src="/videocss/images/link.png" title="Link" /></a></li>
                  <li><a href="#"><img src="/videocss/images/views.png" title="Views" /></a></li>
                </ul>
              </div>
              <div class="video-watch">
                <a href="#">Watch Now</a>
              </div>
              <div class="clear"> </div>
              <div class="lables">
                <p>Labels:<a href="#">Lorem</a></p>
              </div>
            </div>
          </div>
          <div class="clear"> </div>
    </div>
    <div class="clear"> </div>
    </div>
  </div>
    <div class="clear"> </div>
  
      <div class="clear"> </div>
      <div class="copy-right">
      <p>&#169 2013 Videostube. All Rights Reserved | Design by &nbsp;<a href="http://w3layouts.com">W3Layouts</a></p>
    </div>
  </div>
  <!----End-wrap---->
  </body>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', () => {
    // This is the bare minimum JavaScript. You can opt to pass no arguments to setup.
    const player = new Plyr('#player');

    // Expose
    window.player = player;

    // Bind event listener
    function on(selector, type, callback) {
    document.querySelector(selector).addEventListener(type, callback, false);
    }

    // Play
    on('.js-play', 'click', () => {
    player.play();
    });

    // Pause
    on('.js-pause', 'click', () => {
    player.pause();
    });

    // Stop
    on('.js-stop', 'click', () => {
    player.stop();
    });

    // Rewind
    on('.js-rewind', 'click', () => {
    player.rewind();
    });

    // Forward
    on('.js-forward', 'click', () => {
    player.forward();
    });
    });
</script>
</html>

