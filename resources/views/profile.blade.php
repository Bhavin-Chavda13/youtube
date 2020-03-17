<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="../videocss/css/prof.css">
</head>
<style>
.button {
  background-color:rgb(0,0,200,0.9);
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
 
  <div class="pfl-wrapper">
  
   
 
  <article>
    <div > 
    <img src="/Profile/{{ $user->profile }}" style="width:150px; height:150px; border-radius:50%; margin-left: 750px;"><br><br>

    </div>
   
    <div class="media">



    <div class="profile-info">
    <form enctype="multipart/form-data" action="../profile" method="POST">
    @csrf
      <h1> {{Auth::user()->name}}</h1>
      <h2> {{Auth::user()->email}}</h2>
      </div><br><br>
      <div class="file btn btn-lg btn-primary">
        <center> <lable> Update Profile Picture <lable> </center><br>  
      <center><input type="file" name="profile" style="margin-left: 50px"></center><br>
      <input type="submit" class="button" style="margin-left: 750px;" value="Update"> 

     </form>
    </div>
    <div class="col-xs-12">
      <div class="col-md-6 people">
      </div>
</div>

</body>
</html>