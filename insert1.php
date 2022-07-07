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
if (isset($_POST['submit'])) {
    $lusername = $_POST['uname11'];
    $lpassword = $_POST['pass11'];
    $rselection=$_POST['selection'];
    $username_search="select * from registration where USERNAME='$lusername'";
    $query= mysqli_query($conn,$username_search);
   // $username_count=mysql_num_rows($query);
    if ($query=TRUE) {
         # code...
        $db_password=$user_password['PASSWORD'];
        $db_selection=$user_selection['selection'];
        $pass_decode=password_verify($lpassword, $db_password);
        if ($pass_decode) {
            # code...
            echo "login sucess";

        }
     } 
   
    } else {
       echo '<script>alert("data not found so complete registration process")</script>';
        header("Location:REGISTRATION.php");
    }
$conn->close();



?>s