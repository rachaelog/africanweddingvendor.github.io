<?php
// Create connection
require_once('connection.php');

$name = "";
$email = "";
$message = "";

  // Assigning POST values to variables.
  $name = $_POST['username'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $sql = "INSERT into register (name,email,message,date) VALUES ('$username','$email', 'message',CURRENT_TIMESTAMP)";
  $result =  mysqli_query($connection, $sql);
  if ($result){
    echo "<script type='text/javascript'>alert('The username or password you entered is incorrect')
    window.location.href = '../SiteX/login.php?loginfailed';
   </script>";
  }
?>
