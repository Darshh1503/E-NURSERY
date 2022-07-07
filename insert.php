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
$rfname=$_POST['fname'];
  $rlname=$_POST['lname'];
  $remail=$_POST['email'];
  $rusername=$_POST['username1'];
  $Rpasaword=$_POST['password1'];
  $Rcopasaword=$_POST['copassword1'];
  $rphone=$_POST['phone'];
  $raddress=$_POST['address'];
  $rselection=$_POST['selection'];
 // $enpass= password_hash($Rpassword, PASSWORD_BCRYPT);
  //$encopass=password_hash($Rcopasaword, PASSWORD_BCRYPT);
  $rfname = mysqli_real_escape_string($conn, $_POST['fname']);
  if (!preg_match("/^[a-zA-Z ]+$/",$fname)) {
	$fname_error = "Name must contain only alphabets and space";
	}
	if (!preg_match("/^[a-zA-Z ]+$/",$lname)) {
	  $lname_error = "Name must contain only alphabets and space";
	  }
	  if (!preg_match("/^[a-zA-Z ]+$/",$rusername)) {
		$rname_error = "Name must contain only alphabets and space";
		}
	if(!filter_var($remail,FILTER_VALIDATE_EMAIL)) {
	$email_error = "Please Enter Valid Email ID";
	}
	if(strlen($Rpassword) < 6) {
	$password_error = "Password must be minimum of 6 characters";
	}  
	if(strlen($Rcpassword) < 6) {
		$cppassword_error = "Password must be minimum of 6 characters";
		}       
	if(strlen($rphone) < 10) {
	$mobile_error = "Mobile number must be minimum of 10 characters";
	}
	if($password != $cpassword) {
	$cpassword_error = "Password and Confirm Password doesn't match";
	}


 $select = mysqli_query($conn, "SELECT `EMAIL` FROM `registration` WHERE `EMAIL` = '".$_POST['email']."'") or exit(mysqli_error($conn));
if(mysqli_num_rows($select)) {
  echo '<script>alert("email already exists")</script>';
  exit(header("location:REGISTRATION.php"));
}
 
else
{
$sql = "INSERT INTO `registration`(`FNAME`, `LNAME`, `USERNAME`, `PASSWORD`, `CONFIRMPASSWORD`, `EMAIL`, `PHONE`, `ADDRESS`, `REGISTERAS`) VALUES ('$rfname','$rlname','$rusername','$Rpassword','$Rcopasaword','$remail','$rphone','$raddress','$rselection')";

if ($conn->query($sql) === TRUE) {

 header("location: index.php");
  echo '<script>alert("data inserted")</script>';
exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>