<?php

  $db=new mysqli("localhost","root","","moviesdb");

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name=($_POST["Name"]);
    $pw=($_POST["pass"]);
    $confirmPass=($_POST["confirmPass"]);
    $email=($_POST["email"]);
    $age=($_POST["Age"]);

    $queryName=("SELECT * FROM logindatas WHERE username='$name'");
    $resName=$db->query($queryName);

    $queryEmail=("SELECT * FROM users WHERE email='$email'");
    $resEmail=$db->query($queryEmail);

    echo ("result name " . $resName->num_rows);

    if($resName->num_rows <= 0 && $resEmail->num_rows <= 0 && $pw==$confirmPass){
      addUser($db,$name,$pw,$email,$age);
      header("Location: Login.php");
    }
    else {
      header("Location: SignUp.php");
    }

  }

  function addUser($db,$name,$pw,$email,$age){
    $usersQuery="INSERT INTO Users(name,photoPath,email,age,gender) VALUES ('$name','https://assets.change.org/photos/5/wi/ob/SzWIoBOtjBVImGM-800x800-noPad.jpg?1488236305','$email',$age,1)";
    performQuery($db,$usersQuery);
    $query=("SELECT * FROM users where name='$name'");
    $result=$db->query($query);
    $result=$result->fetch_assoc();
    $id=$result["userID"];
    $pw=md5($pw);
    $dataQuery=("INSERT INTO LoginDatas(userID,username,password) VALUES ($id,'$name','$pw')");
    performQuery($db,$dataQuery);

  }

  function performQuery($db,$query){
    $db->query($query);
  }

 ?>
