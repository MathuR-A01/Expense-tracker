<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname="project";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
echo"<br>";
  $username=mysqli_real_escape_string($conn,$_POST['username']); 
  $email=mysqli_real_escape_string($conn,$_POST['email']); 
  $password=mysqli_real_escape_string($conn,$_POST['password']);
  $query="Insert into signup(username,email,password)Values($username,$email,$password)";
  $result=mysqli_query($conn,$query);
  if(! result)
  die('cannot Inserted the record:'.mysqli_connect_error());
  else
  echo"<br>Record Inserted Successfully";
  mysqli_close($conn);
?>