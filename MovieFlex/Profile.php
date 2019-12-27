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

      <div class="row">

        <!--<div class="col-lg-3">

          <h1 class="my-4">Movie Flex</h1>
          <div class="list-group" id = "mylist">
            <a href="Home.html?category=home" class="list-group-item">Home</a>
            <a href="Home.html?category=mostview" class="list-group-item">Most Viewed</a>
            <a href="Home.html?category=movies" class="list-group-item">Movies</a>
          </div>
        
        </div>
        <!-- /.col-lg-3 -->

        <div class="row">
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                        <img width="300" height="500" src="https://www.elfagr.com/upload/photo/news/345/9/600x338o/2.jpg" alt="your Picture">
                      </div>
                    </div>              
                  </div>
            </div>

            <div class="col-lg-5">
                <br>
                <h1 class="">Your Name</h1>
                <br>
                <h2 class="">Email</h2>
                <h2 class="">Age</h2>
                <h2 class="">Liked Movies</h2>
                <h2 class="">Movies</h2>
            </div>
            
          <!--</div>

          <!--<div class="row">
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
                      <small class="text-muted">7.6</small> <!--&#9733; &#9733; &#9733; &#9733; &#9734;
                    </div>
                  </div>
                </div>              
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Movie Flex 2019</p>
      </div>
      <!-- /.container -->
    </footer>

    
    

  </body>

</html>
