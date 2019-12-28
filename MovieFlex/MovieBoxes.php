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

$sql = "SELECT movieid, title, posterPath, overview, votesCount FROM movies ORDER BY releasedate DESC LIMIT 6";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo '
			<div class="col-lg-4 col-md-6 mb-4">
			  <div class="card h-100">
				<a href="Movie.php?id='.$row['movieid'].'"><img class="card-img-top" src="'.$row['posterPath'].'"></img></a>
				<div class="card-body">
				  <h4 class="card-title">
					<a href="Movie.php?id='.$row['movieid'].'">'.$row['title'].'</a>
				  </h4>
				  <span>'.$row['overview'].'</span>
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