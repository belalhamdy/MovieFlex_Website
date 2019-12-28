<div  class="col-lg-3">
	<h1 class="my-4">Movie Flex</h1>
	<div class="list-group" id = "mylist">
		<a href="Home.php" class="list-group-item <?php if($_GET['category'] == 'home') echo active?>" >Home</a>
		<a href="MostView.php" class="list-group-item <?php if($_GET['category'] == 'mostview') echo active?>">Most Viewed</a>
		<a href="Movies.php" class="list-group-item <?php if($_GET['category'] == 'movies') echo active?>">Movies</a>
	</div>
</div>