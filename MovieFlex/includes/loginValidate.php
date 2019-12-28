<?php
	session_start();
  $db=new mysqli("localhost","root","","moviesdb");

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name= ($_POST["username"]);
    $pw= ($_POST["pass"]);
    $pw = hash("sha256",$pw);
    $query=("SELECT * FROM logindatas WHERE username = '$name'");
    $result=$db->query($query);

    $result=$result->fetch_assoc();
    $resultName= $result["username"] ;
    $resultPW= $result["password"];
    echo ($resultName . " " . $resultPW);
    if($name== $resultName && $pw== $resultPW){
		$_SESSION["loggedin"] = $result["userID"];
		header("Location: ../Home.php");
    }
    else{
      header("Location: ../Login.php?bad=1");
    }
  }

  else{
    header("Location: ../Login.php?bad=1");
  }
 ?>
