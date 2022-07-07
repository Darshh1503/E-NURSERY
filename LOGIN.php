<?php
    session_start();
    $message="";
    if(isset($_POST['submit']))
    if(count($_POST)>0) {
        $selection1="As_Customer";
        $selection2="for_job_apply";
        $selection3="Make_Your_Own_nursery";
        

        $con = mysqli_connect('127.0.0.1:3306','root','','e-nursey') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM registration WHERE USERNAME='" . $_POST["user_name"] . "' and CONFIRMPASSWORD = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
                         $selecton = $row['REGISTERAS'];
                        
        if (strcmp($selection1,$selecton)==0) {
            # code...
             header("Location:customer.php");

        }
        elseif (strcmp($selection2, $selecton)==0) {
            # code...
            header("Location:job.php");
        }
        elseif (strcmp($selection3, $selecton)==0) {
            # code...
            header("Location:admin.php");
        }
        else{
            echo "register your self";
        }
        
        } else {
         $message = "Invalid Username or Password!";
        }
    }
     
     
?>
<html>
<head>
<title>User Login</title>
<style >
      body{
  margin:0;
  padding: 0;
  background-image: url(b1.jpg);
  background-attachment: fixed;
  font-family: sans-serif;
}
.login-box{
  width:320px;
  height: 420px;
  background: rgba(0, 0, 0, 0.5);
  color:#fff;
  top: 50%;
  left: 50%;
  position: absolute;
  transform: translate(-50%,-50%);
  box-sizing: border-box;
  padding: 70px 30px;
}
.loginimage{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  position: absolute;
  top: -50px;
  left: calc(50% - 50px);
}
h1{
  margin: 0;
  padding: 0 0 20px;
  text-align: center;
  font-size: 22px;
}
.login-box p{
      margin: 0;
      padding: 0;
      margin-bottom: bold;
}
.login-box input{
  width: 100%;
  margin-bottom: 20px;
}
.login-box input[type="text"], input[type="password"]
{
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;
  outline: none;
  height: 40px;
  color: #fff;
  font-size: 16px; 
}
.login-box input[type="submit"]
{
  border: none;
  outline: none;
  height: 40px;
  background: #1c8adb;
  color: #fff;
  font-size: 18px;
  border-radius: 20px;
}
.login-box input[type="submit"] :hover
{
  cursor: pointer;
  background: #39dc79;
  color: #000;
}

.login-box a:hover
{
  color: #39dc79;
}
</style>
</head>
<body>
    <div class="login-box">
<form name="frmUser" method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Enter Login Details</h3>
 Username:<br>
 <input type="text" name="user_name">
 <br>
 Password:<br>
<input type="password" name="password">
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="submit"name="reset" value="reset">
</form>
</div>
</form>
</body>
</html>