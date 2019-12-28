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
    <div id="nav-placeholder"></div>
    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Page Content -->
    <div class="container">

      <div class="col-lg-12">
      
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" id="name" type="text"></input>
        </div>

        <div class="form-group">
            <label>Poster</label>
            <input class="form-control" id="poster" type="file"></input>
        </div>

        <div class="form-group">
            <label>Relase Date</label>
            <input class="form-control" id="relaseDate" type="date"></input>
        </div>

        <div class="form-group">
            <label>Classification </label>
            <input class="form-control" id="classification" type="text"></input>
        </div>

        <div class="form-group">
            <label>Type </label>
            <input class="form-control" id="type" type="text"></input>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" id="description" rows="5"></textarea>
        </div>
        <!-- Apply validation for on Click Add Button-->
        <button type="button" class="btn btn-outline-primary float-right mr-1" onclick="alert('Add')">Add</button>

      </div>

    </div>
    <!-- /.container -->

	<script src="js/shared.js"></script>
    

  </body>

</html>
