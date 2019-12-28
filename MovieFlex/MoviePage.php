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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
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
	
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moviesdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	$stmt = $conn->prepare("
	SELECT movieID, ownerID, title, posterPath, genre, votesCount, isAdult, overview, releaseDate
	FROM movies
	WHERE movieID = ?");

	$stmt->bind_param("i", $_GET['id']);	
	
	$stmt->execute();
	$result = $stmt->get_result();
	$conn->close();
	
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		echo '
			  <div class="row">
				
				<div class="col-lg-3">

				  <div class="card mt-4">
					<img width="300" height="420" class="card-img-top" src="'.$row['posterPath'].'" alt="">
					<div class="card-body">
					  <h3 class="card-title">'.$row['title'].'</h3>
					  <!--<div class="card-des" id="rate" onclick="showMsg("fd")"></div>-->
					  <div>
						
						<span id="heart"><i class="fa fa-heart-o" aria-hidden="true" ></i> </span>
						
						<!-- give privilege for the Admin to delete--> 
						<button class="btn btn-outline-danger col-lg-12" onclick="alert("Delete")">Delete</button>
						<!-- end privilege-->
						
					  </div>
					</div>
				  </div>
				  <!-- /.card  -->
				</div>
				<div class="col-lg-9 pad-top-10">
				  <p class="card-text">'.$row['overview'].'</p>
				</div>
				<!-- /.col-lg-9 -->

			  </div>

			  <!--Commment Panel-->
			  <div class="row ">
				<div class="col-md-12">
				  <div class="comment-wrapper">
					<div class="panel panel-info">
					  <div class="panel-heading">
							Comments
					  </div>

					  <div class="panel-body">
						<textarea class="form-control" placeholder="Write a comment..." rows="3"></textarea>
						<br>
						<button type="button" class="btn btn-outline-primary float-right mr-1" onclick="alert("Post")">Post</button>
						<div class="clearfix"></div>
						  <hr>
						  <ul class="media-list">

							  <!--Comment body-->
							  <li class="media">
								  <a href="Profile.php?id=12" class="float-left">
									  <img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="img-circle">
								  </a>
								  <div class="media-body">
									  <strong class="text-success">Comment Owner Name</strong>
									  <p>
										  Comment details </a>.
									  </p>
								  </div>
							  </li>

						  </ul>
					  </div>

					</div>
				  </div>
				</div>
			  </div>
			</div>
		';

	} else{
		echo "<h1>There is no movie with the specified ID.</h1>";
	}
	

?>
	
	</div>
    <!-- /.container -->
    

	<!-- you need to include the shieldui css and js assets in order for the charts to work -->
	<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
	<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

	<script type="text/javascript" src="js/moviepage.js"></script>
	<script src="js/shared.js"></script>
  </body>

</html>
