<?php
$characterlimit = 250;

$orderby = isset($_GET["orderby"])?$_GET["orderby"]:"RAND()";
$limit = isset($_GET["limit"])?$_GET["limit"]:"6";

$searchterm = isset($_GET["q"])?$_GET["q"]:"";

$JOINSTR = isset($_GET["userID"])?
			" JOIN favoritemovies ON favoritemovies.movieid=movies.movieid AND userID=".$_GET["userID"]
			:"";

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
	SELECT movies.movieid, title, posterPath, overview, votesCount
	FROM movies ".$JOINSTR."
	WHERE title LIKE CONCAT('%',?,'%')
	ORDER BY $orderby DESC
	LIMIT ?");
	/*
	SELECT movies.movieid, title, posterPath, overview, votesCount
	FROM movies JOIN favoritemovies ON favoritemovies.movieid=movies.movieid AND userID=1
	WHERE title LIKE CONCAT('%%')
	ORDER BY votesCount DESC
	LIMIT 30
	*/
	$stmt->bind_param("ss", $searchterm, $limit);	

#$sql = "SELECT movieid, title, posterPath, overview, votesCount FROM movies ORDER BY $orderby DESC LIMIT $limit";
#$result = $conn->query($sql);

$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$shortdescription = strlen($row['overview']) > $characterlimit ? 
							substr($row['overview'],0,$characterlimit-3) . '...' : 
							$row['overview'];
		echo '
			<div class="col-lg-4 col-md-6 mb-4">
			  <div class="card h-100">
				<a href="MoviePage.php?id='.$row['movieid'].'"><img class="card-img-top" src="'.$row['posterPath'].'"></img></a>
				<div class="card-body">
				  <h4 class="card-title">
					<a href="MoviePage.php?id='.$row['movieid'].'">'.$row['title'].'</a>
				  </h4>
				  <span>'.$shortdescription.'</span>
				</div>
				<div class="card-footer">
				  <small class="text-muted">'.$row['votesCount'].' people liked!</small>
				</div>
			  </div>
			</div>
			';
	}
}
else{
	echo 'No Movies :(';
}
$conn->close();

?>