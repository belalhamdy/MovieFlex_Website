<?php
session_start();
?><!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
	<a class="navbar-brand" href="Home.php">Movie Flex</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
	  <!--Search Bar-->
	  <form class="form-inline my-2 my-lg-0" action="Search.php" method="get">
		<input class="form-control mr-sm-2" name="q" type="search" placeholder="Search" aria-label="Search">
		<input class="btn btn-outline-primary my-2 my-sm-0"type ="submit" value = "Search">
	  </form>

	  <!--Tabs-->
	  <ul class="navbar-nav ml-auto">
		<li class="nav-item active">
		  <a class="nav-link" href="Home.php">Home
			<span class="sr-only">(current)</span>
		  </a>
		</li>
		<li class="nav-item active">
		  <a class="nav-link" href="AddMovie.php">Add Movie
			<span class="sr-only">(current)</span>
		  </a>
		</li>
		<?php if(isset($_SESSION['loggedin'])){
			echo '
				<li class="nav-item active">
					<a class="nav-link" href="Profile.php">My Profile
					  <span class="sr-only">(current)</span>
					</a>
				</li>';
		}?>
		<li class="nav-item active">
		  <a class="nav-link" href="AboutUs.php">About us
			<span class="sr-only">(current)</span>
		  </a>
		</li>
		<?php if(isset($_SESSION['loggedin'])){
			echo '
				<li class="nav-item active">
					<a class="nav-link" href="Login.php">Log out
						<span class="sr-only">(current)</span>
					</a>
				</li>';
		}else{
			echo '
				<li class="nav-item active">
					<a class="nav-link" href="Login.php">Log in/Register
						<span class="sr-only">(current)</span>
					</a>
				</li>';
		}?>
		
	  </ul>
	</div>
  </div>
</nav>