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

            <div class="col-lg-12">
            
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Name</label>
                    <input class="form-control" id="textarea" type="text" rows="3"></input>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="textarea" rows="3"></textarea>
                </div>
            
            </div>
       
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
