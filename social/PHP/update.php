<?php
include ('db.php');

//if(isset($_POST['action']) &&  $_POST['action'] == "addPost")
//{
  $message = $_POST['message'];

  $sql = "INSERT INTO posts (content)
  VALUES ('$message')";

  if ($con->query($sql) === TRUE)
  {
  echo "New record created successfully";
  }   else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
//}

?>
