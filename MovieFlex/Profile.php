<?php include_once("includes/header.php"); ?>
<?php if(!isset($_SESSION["loggedin"])){
	header("Location: home.php");
	exit();
}?>
  <body>

    <!-- Navigation -->
    <div id="nav-placeholder"></div>
    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	


    <?php
 
      $db=new mysqli("localhost","root","","moviesdb");
      $id=$_SESSION["loggedin"];
 
      $query=("SELECT * FROM users WHERE userID='$id'");
      $query=$db->query($query);
 
      $query=$query->fetch_assoc();
      $photo=$query["photoPath"];
      $name=$query["name"];
      $email=$query["email"];
      $age  =$query["age"];
 
      $query=("SELECT * FROM movies WHERE ownerID='$id'");
      $query=$db->query($query);
 
 
      // $movies=$query["movieID"];
 
      $moviesArray=[];
      if($query->num_rows>0){
        $i=0;
        while($movieID=$query->fetch_assoc()){
          $movieID=$movieID["title"];
          $moviesArray[$i]=$movieID;
          ++$i;
        }
      }
	  /*
      $likedMoviesQuery=("SELECT * FROM movies join favoritemovies on movies.movieID= favoritemovies.movieID WHERE userID='$id'");
      $likedMoviesQuery=$db->query($likedMoviesQuery);
 
      $likedMovies=[];
      if($likedMoviesQuery->num_rows>0){
        $i=0;
        while($movieID=$likedMoviesQuery->fetch_assoc()){
          $movieID=$movieID["title"];
          $likedMovies[$i]=$movieID;
          ++$i;
        }
      }
 */
     ?> 
    <!-- Page Content -->
    <div class="container">
 
      <div class="row pad-top-5 pl-3">
        <div class="card bor-custom" style="width: 18rem;" id="card">
          <img width="300" class="card-img-top" src=<?php echo $photo; ?>  alt="Your Picture">
          <div class="card-body">
            <h5 class="card-title"><?php echo $name;?></h5>
          </div>
        </div>
 
        <div class="col-lg-8">
          <br>
          <h2 class="">Email: <?php echo $email;?></h2>
          <h2 class="">Age: <?php echo $age;?></h2>
          <h2 class="">Movies: </h2>
          <p> <?php foreach ($moviesArray as $key)  {
            echo $key;
            echo " , ";
          }; ?></p>
        </div>
        <!-- /.col-lg-3 -->
      </div>
      <!-- /.row -->
      <div class="Border"></div>
      <h1 class="pt-1 pb-1 col-sm text-center bg-dark" style="color: white">Favorite Movies</h1>
      <div class="Border"></div>
      <div class="row pad-top-5">
        <?php
		$_GET['userID'] = $_SESSION['loggedin'];
		$_GET['orderby'] = 'movieID';
		$_GET['limit'] = 30;
		include("includes/MovieBoxes.php");
		?>
 
      </div>
      <!--/.row-->
    </div>
    <!-- /.container -->
 
    <script src="js/shared.js"></script>
    <script>
      $documnet.ready({
        $("#card").slideDown();
      });
    </script>
 
 
  </body>
 
</html>