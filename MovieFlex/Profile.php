<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Movie Flex Homepage</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <div id="nav-placeholder">

    </div>
    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
      $.get("NavBar.php", function(data){
          $("#nav-placeholder").replaceWith(data);
      });
    </script>

    <!-- Page Content -->
    <div class="container">

      <div class="row pad-top-5 pl-3">
        <div class="card bor-custom" style="width: 18rem;" id="card">
          <img width="300" height="420" src="https://cdn-static.egybest.net/serve/movies/art-2732945228-x300.jpg" class="card-img-top" alt="Your Picture">
          <div class="card-body">
            <h5 class="card-title">Your name</h5>
          </div>
        </div>

        <div class="col-lg-8">
          <br>
          <h2 class="">Email</h2>
          <h2 class="">Age</h2>
          <h2 class="">Liked Movies</h2>
          <h2 class="">Movies</h2>
        </div>
        <!-- /.col-lg-3 -->
      </div>
      <!-- /.row -->
      <div class="Border"></div>
      <h1 class="pt-1 pb-1 col-sm text-center bg-dark" style="color: white">Favorite Movies</h1>
      <div class="Border"></div>
      <div class="row pad-top-5">
        <!--dp your loop here-->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href=""><img class="card-img-top" src=""> Image</a>
            <div class="card-body">
              <h4 class="card-title">
                <a href=>Name</a>
              </h4>
              <h5>Description</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">7.6</small> <!--&#9733; &#9733; &#9733; &#9733; &#9734;-->
            </div>
          </div>
        </div> 

      </div>
      <!--/.row-->
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Movie Flex 2019</p>
      </div>
      <!-- /.container -->
    </footer>

    <script>
      $documnet.ready({
        $("#card").slideDown();
      });
    </script>
    

  </body>

</html>
