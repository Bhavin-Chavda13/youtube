<!DOCTYPE html>
<html>
<head>
<link href="{{URL::asset('css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->
<link href="{{URL::asset('css/dashboard.css')}}" rel="stylesheet">
<!-- Custom Theme files -->
<link href="{{URL::asset('css/style.css')}}" rel='stylesheet' type='text/css' media="all" />
<script src="{{URL::asset('js/jquery-1.11.1.min.js')}}"></script>
<script src="https://use.fontawesome.com/fe459689b4.js"></script>

<!--start-smoth-scrolling-->
<!-- fonts -->
<link href='fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<style type="text/css">
body{
margin: 40px;
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

</head>
<body>





<div class="container">
<br />






<div class="jumbotron text-center">
<div align="right">
<a href="{{ route('Youtube.index') }}" class="btn btn-default">Back</a>
</div>
<br />

<h3>{{ $catg->category_name }} </h3>

<!DOCTYPE html>
<html>
<head>
<title>Video</title>
<link rel="stylesheet" href="https://cdn.plyr.io/3.5.10/plyr.css" />
<script src="https://cdn.plyr.io/3.5.10/plyr.js"></script>
</head>

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

<body>

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

<div class="container">
<video controls crossorigin playsinline poster="{{URL::to('/')}}/images/{{$catg->image}}" id="player">
<!-- Video files -->
<source src="{{ URL::to('/') }}/videos/{{ $catg->video }}" type="video/mp4" size="576">
<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720">
<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080">
<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1440p.mp4" type="video/mp4" size="1440">

<!-- Caption files -->
<track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt"
default>
<track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">

<!-- Fallback for browsers that don't support the <video> element -->
<a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" download>Download</a>
</video>


</div>
</body>
</html>
<button class="btn" id="green"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i></button>
<button class="btn" id="red"><i class="fa fa-thumbs-down fa-lg" aria-hidden="true"></i></button>



</div>
</div>
</body>
<script type="text/javascript">
var btn1 = document.querySelector('#green');
var btn2 = document.querySelector('#red');

btn1.addEventListener('click', function() {

if (btn2.classList.contains('red')) {
btn2.classList.remove('red');
}
this.classList.toggle('green');

});

btn2.addEventListener('click', function() {

if (btn1.classList.contains('green')) {
btn1.classList.remove('green');
}
this.classList.toggle('red');

});


</script>
</html>