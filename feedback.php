<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e-nursey";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$feedname=$_POST['name'];

$feedemail=$_POST['email'];

$feedphone=$_POST['phone'];

$feedmessage=$_POST['message'];
$sql1="SELECT  `USERNAME` FROM `registration` WHERE USERNAME='$feedname'";
if($sql1==TRUE)
{

$sql = "INSERT INTO `feedback`( `username`, `email`, `phone`, `message`) VALUES ('$feedname','$feedemail','$feedphone','$feedmessage')";

if ($conn->query($sql) === TRUE) {

 header("location: index.php");
  echo '<script>alert("data inserted")</script>';
exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else {
    echo"registred first your self";
}
$conn->close();
?>