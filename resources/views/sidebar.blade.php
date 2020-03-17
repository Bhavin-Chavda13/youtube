
@include('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
<center><h1 >Youtube Player</h1></center>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>


  <title>Youtube</title>

  <!-- Bootstrap core CSS -->
  <link href="sbcss/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="sbcss/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>
<style>
  body {
        background-color: rgb(255,0,0,0.3);
        font-family: Comic Sans, Comic Sans MS, cursive; 
       }
 #wrapper {
     border-radius: 5px;
     /* background-color: #f2f2f2;*/
     padding: 20px; 
     color: red;
    }

  </style>


  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Start Bootstrap </div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">


      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
  
      
        <button class="btn btn-primary" style='font-size:24px' id="menu-toggle"><i class='fas fa-backward'></i></button>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand pull-right navbar-right" rel="home" href="#" title="Buy Sell Rent Everyting">
        <img style="max-width:100px; margin-top: -7px;"
             src="sbcss/images.png" styl>
        </a>



        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline navbar-form float-right" action="">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-primary" type="submit">Search</button>
       </form>

               <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>  -->
              
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4">Simple Sidebar</h1>
      </div>
    </div>
    
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="/sbcss/vendor/jquery/jquery.min.js"></script>
  <!-- <script src="/sbcss/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
