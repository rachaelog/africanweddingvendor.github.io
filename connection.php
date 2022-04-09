

<?php
// Create connection
$connection = new mysqli ('localhost', 'root', '');
if (!$connection){
  die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'register');
if (!$select_db){
  die("Database Selection Failed" . mysqli_error($connection));
  }
  ?>
