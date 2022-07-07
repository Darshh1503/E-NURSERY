
<!Doctype html>
<html>
<head>
	<title> Transparent and responsive sign up form</title>
	<style>
  body{
	background:url('b1.jpg');
	background-size: cover;
	
    font-family: Arial
}
.wrap{
	max-width: 350px;
	border-radius: 20px;
	margin:auto;
	background:rgba(0 ,0 ,0 ,0.8);
	box-sizing: border-box;
	padding: 40px;
	color:#fff;
	margin-top: 100px;
}
h2{
	text-align:center;

}
input[type=text],input[type=password]{
	width: 100%;
	box-sizing: border-box;
	padding: 12px 5px;
	background:rgba(0,0,0,0.10);
	outline: none;
	border:none;
	border-bottom: 1px dotted #fff;
	color:#fff;
	border-radius: 5px;
	margin: 5px;
	font-weight: bold;

}
input[type=submit] {
	width: 100%
	box-sizing:border-box;
	padding:10px 0;
  
	margin-top: 30px;
	outline: none;
	border:none;
	background: #60adde;
	opacity:0.7;
	border-radius: 20px;
	font-size: 20px;
	color:#fff;
}
input[type=submit]:hover{
	background: #003366;
	opacity:0.7;
}
  </style>
</head>
<body>
<div class ="wrap">
   <h2> Registration Form</h2>


   <form action="insert.php" method="post">
   	    <input type ="text" name="fname" placeholder ="First Name" required >
		   <span class="text-danger"><?php if (isset($fname_error)) echo $fname_error; ?></span>
   	    <input type ="text" name="lname" placeholder ="Last  Name" required>
		   <span class="text-danger"><?php if (isset($lname_error)) echo $lname_error; ?></span>
   	    <input type ="text"name="email" placeholder ="Email" required>
		   <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
   	    <input type ="text"name="username1" placeholder ="Username" required>
		   <span class="text-danger"><?php if (isset($rname_error)) echo $rname_error; ?></span>
   	    <input type ="text" name="phone" placeholder ="Enter your Number" required>
		  <span class="text-danger"><?php if (isset($mobile_error)) echo $mobile_error; ?></span>
   	    <input type ="Password"  name="password1" placeholder ="Password" required>
		   <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
   	    <input type ="password" name="copassword1" placeholder ="Confirm Pasword" required>
		   <span class="text-danger"><?php if (isset($cppassword_error)) echo $cppassword_error; ?></span>
          <textarea class="textarea" name="address" placeholder ="Address" required=""></textarea>
         
         <div class="select">
             <select name="selection">
                  <option value=""> Select</option>
                  <option value=" As_Customer">As Customer</option>
                  <option value="for_job_apply">for job apply </option>
                  <option value="Make_Your_Own_nursery">for Make Your Own nursery</option>
             </select>
           </div>
   	    <input type ="Submit" Value ="Submit">
   	 </form>
</div>
</body>
</html>