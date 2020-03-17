<!DOCTYPE html>
<html>
<head>
    <title>Video Tube</title>

    <!-- Css Files -->
     <link rel="stylesheet" type="text/css" href="{{URL::asset('css/file_upload.css')}}">

</head>
<body>
    <div class="jumbotron">
     <p align="center" style="color: white;font-size: 40px;">Upload Here.. </p> 

     <form method="post" action="{{route('Youtube.store')}}" enctype="multipart/form-data">
        @csrf

        <input type="text" class="form-control" name="name" placeholder="Enter Video Name" required="">

       
        <input type="text" class="form-control" name="desc" placeholder="Enter Description" required="">


        <select  name="category_id">
        @foreach($data as $row)
            <option value="{{$row -> id}}">{{$row -> category_name}}</option>
            @endforeach
        </select>

      
        <input type="hidden" name="user_id" class="form-control input-lg" value="{{ Auth::user()->id }}" />
        
        
        <!-- <input type="text" class="form-control" name="catg" placeholder="Enter Ctegories" required=""> -->

        <input type="file" class="form-control" name="image" placeholder="Enter Image" required="">


        <input type="file" class="form-control" name="video" placeholder="Enter Video" value="" required="">
        <center><input type="submit" value="Upload" name="upload"></center>
    </form>
</div>
</body>
</html>