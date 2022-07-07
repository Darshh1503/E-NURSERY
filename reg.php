<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "e-nursey";
$conn=mysqli_connect($servername,$username,$password,$dbname);
  if(!$conn){
      die('Could not Connect MySql Server:' .mysql_error());
    }
if (isset($_POST['signup'])) {
$rfname = mysqli_real_escape_string($conn, $_POST['fname']);
$rlname = mysqli_real_escape_string($conn, $_POST['lname']);
$remail = mysqli_real_escape_string($conn, $_POST['email']);
$rphone = mysqli_real_escape_string($conn, $_POST['phone']);
$rusername = mysqli_real_escape_string($conn, $_POST['username1']);
$raddress= mysqli_real_escape_string($conn, $_POST['address']);
$rselection = mysqli_real_escape_string($conn, $_POST['selection']);
$Rpassword = mysqli_real_escape_string($conn, $_POST['password1']);
$Rcpassword = mysqli_real_escape_string($conn, $_POST['cpassword1']);
//$enpass= password_hash($Rpassword, PASSWORD_BCRYPT);
  //$encopass=password_hash($Rcopasaword, PASSWORD_BCRYPT); 
if (!preg_match("/^[a-zA-Z ]+$/",$rfname)) {
$fname_error = "Name must contain only alphabets and space";
}
if (!preg_match("/^[a-zA-Z ]+$/",$rlname)) {
  $lname_error = "Name must contain only alphabets and space";
  }
  if (!preg_match("/^[a-zA-Z ]+$/",$rusername)) {
	$uname_error = "Name must contain only alphabets and space";
	}
if(!filter_var($remail,FILTER_VALIDATE_EMAIL)) {
$email_error = "Please Enter Valid Email ID";
}
if(strlen($Rpassword) < 6) {
$password_error = "Password must be minimum of 6 characters";
}       
if(strlen($rphone) < 10) {
$mobile_error = "Mobile number must be minimum of 10 characters";
}
if($Rpassword != $Rcpassword) {
$cpassword_error = "Password and Confirm Password doesn't match";
}
else{
$sql = "INSERT INTO `registration`(`FNAME`, `LNAME`, `USERNAME`, `PASSWORD`, `CONFIRMPASSWORD`, `EMAIL`, `PHONE`, `ADDRESS`, `REGISTERAS`) VALUES ('$rfname','$rlname','$rusername','$Rpassword','$Rcpassword','$remail','$rphone','$raddress','$rselection')";

if ($conn->query($sql) === TRUE) {

 header("location: index.php");
  echo '<script>alert("data inserted")</script>';
exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}



mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>REGISTRATION FORM </title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<style>
 body{font-family: Calibri, Helvetica, sans-serif;  
  background-color:#F0E68C ;  
}  
p,label,h2
{
	color: white;
}
p,label,h2 : hover
{
	color : green;
}
.container {  
    padding: 2px;  
  background-color: black; 

  width: 500px;
  height: 800px; 
}  
  
input[type=text], input[type=password], textarea {  
  width: 50%;  
  padding: 2px;  
  margin: 5px;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: gray;  
  outline: none; 
  width: 50%; 
}  
 div {  
            padding: 2px;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 2px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 2px;  
  margin: 2px;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}
</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-lg-8 col-offset-2">
<div class="page-header">

<h2 >Registration form</h2>
</div>
<p>Please fill all fields in the form</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div class="form-group">
<label>First Name</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="fname" class="form-control" value="" maxlength="50" required="">
<span class="text-danger"><?php if (isset($fname_error)) echo $fname_error; ?></span>
</div>
<div class="form-group">
<label>Last Name</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="lname" class="form-control" value="" maxlength="50" required="">
<span class="text-danger"><?php if (isset($lname_error)) echo $lname_error; ?></span>
</div>
<div class="form-group">
<label>User Name</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="username1" class="form-control" value="" maxlength="50" required="">
<span class="text-danger"><?php if (isset($uname_error)) echo $uname_error; ?></span>
</div>
<div class="form-group ">
<label>Email</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="TEXT" name="email" class="form-control" value="" maxlength="30" required="">
<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
</div>
<div class="form-group">
<label>Mobile</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="phone" class="form-control" value="" maxlength="12" required="">
<span class="text-danger"><?php if (isset($mobile_error)) echo $mobile_error; ?></span>
</div>
<div class="form-group">
<label>Password</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="password" name="password1" class="form-control" value="" maxlength="8" required="">
<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
</div>  
<div class="form-group">
<label>Confirm Password</label> &nbsp
<input type="password" name="cpassword1" class="form-control" value="" maxlength="8" required="">
<span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
</div>
<label>Address</label>
<div class="form-group">

<textarea class="textarea" placeholder="enter your address here" name="address" required=""></textarea>
</div>

<div class="form-group">

<select name="selection">
                  <option value=""> Select</option>
                  <option value=" As_Customer">As Customer</option>
                  <option value="for_job_apply">for job apply </option>
                  <option value="Make_Your_Own_nursery">for Make Your Own nursery</option>
             </select>
</div>
<input type="submit" class="btn btn-primary" name="signup" value="Submit">
<p id="pp">Already have a account?<a href="login.php" class="btn btn-default">Login</p></a>
</form>
</div>
</div>    
</div>
</body>
</html>