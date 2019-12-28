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

	<div id ="footer-placeholder"></div>
  </head>

  <body>
    <!-- Navigation -->
    <div id="nav-placeholder">

    </div>
    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div id = "leftnav-placeholder" class="col-lg-3">
        
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9 pad-top-5">
          <div class="row " >
            <div id = "movies-placeholder"></div>             
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
    
    <script src="js/shared.js">
    </script>
	<script>
	  $.get("LeftNavBar.php", {'category' : 'none'}, function(data){
		  $("#leftnav-placeholder").replaceWith(data)
	  });
	</script>
		<script>
		$.get("MovieBoxes.php", {'limit' : 50, 'orderby' : 'votesCount', 'q' : '<?php echo $_GET['q'] ?>'}, function(data){
		  $("#movies-placeholder").replaceWith(data)
	  });
	</script>
  </body>

</html>
