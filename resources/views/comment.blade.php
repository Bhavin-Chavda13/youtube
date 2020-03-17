<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

    input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
    }

    label {
    padding: 12px 12px 12px 0;
    display: inline-block;
    }

    input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;   
    border-radius: 4px;
    cursor: pointer;
    float: right;
    }

    input[type=submit]:hover {
    background-color: #45a049;
    }

    .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    }

    .col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
    }

    .col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
    content: "";
    display: table;
    clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>
</head>
<body>

<h2>All Comments</h2>
<p></p>

<div class="container">
<form method="post" action="{{ route('Comments.store' )}}" >
@csrf
    <div class="row">
      <div class="col-25">
        <label for="fname">Name</label>
      </div>
      <div class="col-75">
         <input type="hidden" name="id" value="{{ $member->id }}">
         <input type="hidden" name="u_id" value="{{ Auth::user()->id }}">

        <input type="text" id="name" name="name" value="{{ Auth::user()->name  }}" disabled>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email" value="{{ Auth::user()->email }}" disabled>
      </div>
    </div>
    

    <div class="row">
      <div class="col-25">
        <label for="subject">Comment</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="comments" placeholder="Write something.." style="height:100px"></textarea>
      </div>
    </div>
    <div class="row">
     <center><input type="submit" value="comment" ></center>
    </div>
  </form>
</div>

<div class="media">
@foreach($result as $row)
<h4 style="color:red">Name: {{Auth::user()->name}}</h4>
<h4 style="color:red">Email: {{Auth::user()->email}}</h4>
<div class="media-left">
<a href="">
<img src="/Profile/{{$row->profile}}" style="width:65px; height:65px; border-radius:50%">
</a>
</div>
<div class="media-body">
<h4 style="color:blue">Comment:{{$row->comments}}</h4>
</div>
@endforeach
</div>

</body>
</html>
