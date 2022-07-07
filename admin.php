<?php
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "e-nursey"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	@media only screen and (max-width: display: ) ;
* {
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: arial ;
}
.header {
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 15px 30px;
	background: #23242b;
	color: #fff;
}
.u-name {
	font-size: 20px;
	padding-left: 17px;
}
.u-name b {
	color: #127b8e;
}
.header i {
	font-size: 30px;
	cursor: pointer;
	color: #fff;
}
.header i:hover {
	color: #127b8e;
}
.user-p {
	text-align: center;
	padding-left: 10px;
	padding-top: 25px;
}
.user-p img {
	width: 100px;
	border-radius: 50%;
}
.user-p h4 {
	color: #ccc;
	padding: 5px 0;

}
.side-bar {
	width: 250px;
	background: #262931;
	min-height: 100vh;
	transition: 500ms width;
}
.body {
	display: flex;
	background: #F7DC6F;
}
.section-1 h3{
	font-size: 50px;
	color:Green;
	text-align:left;
	margin: 10px;
	font-family: arial;
}

.section-1 .img-responsive
{
	
	height: 400px;
	width: 1050px;
	padding: 0 20px;
	background-color:transparent;
	box-sizing: border-box;
	float: center;
	
}

.section-1 .img-line
{
	
	height: 250px;
	width: 600px;
	padding: 0 20px;
	background-color:transparent;
	box-sizing: border-box;
	align:right; 
	
}


.section-1 h4{
	color: black;
	font-size: 30px;
	color:Green;
	text-align:left;
	margin: 10px;
	font-family: arial;
}

.section-1 h5{
	font-size: 25px;
	color:Green;
	text-align:center;
	margin: 10px;
	font-family: arial;
}

.section-1 h6{
	font-size: 25px;
	color:black;
	text-align:left;
	margin: 10px;
	font-family: arial;
}

.section-1 p
{
	font-size: 20px;
	font-family: arial;
	color: black;

	
}
.section-1 h5 p
{
	text-align: right;
}

.side-bar ul li {
	font-size: 16px;
	padding: 15px 0px;
	padding-left: 20px;
	transition: 500ms ;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}
.side-bar ul li:hover {
	background: #127b8e;
}
.side-bar ul li a {
	text-decoration: none;
	color: #eee;
	cursor: pointer;
	letter-spacing: 1px;
}
.side-bar ul li a i {
	display: inline-block;
	padding-right: 10px;
	font-size: 23px;
}
button
{
	width:auto;
	background: black;
	font-color: red;
}
#navbtn {
	display: inline-block;
	margin-left: 70px;
	font-size: 20px;
	transition: 500ms color;
}
#checkbox {
	display: none;
}
#checkbox:checked ~ .body .side-bar {
	width: 60px;
}
#checkbox:checked ~ .body .side-bar .user-p{
	visibility: hidden;
}
#checkbox:checked ~ .body .side-bar a span{
	display: none;
}
.class=section
{
	font-size: 500px;
}
	</style>
</head>
<body>
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">E-NURSERY</b>
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		<button>
		<i class="fa fa-sign-out" aria-hidden="true">Logout</i>
		</button>
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<img src="candidate.png">
			
			</div>
			<ul>
				<li>
					<a href="#">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<span>Message</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-comment-o" aria-hidden="true"></i>
						<span>Daily tips</span>
					</a>
				</li>
				<li>
					<a href="information.php">
						<i class="fa fa-circle-o-notch" aria-hidden="true"></i>
						<span>Information</span>
				</li>
				<li>
					<a href="uploadvideo.php">
						<i class="fa fa-magnet" aria-hidden="true"></i>
						<span>Upload video</span>
					</a>
				</li>
				
			</ul>
		</nav>
		<div>
 
 <?php
 $fetchVideos = mysqli_query($con, "SELECT * FROM videoss ORDER BY id DESC");
 while($row = mysqli_fetch_assoc($fetchVideos)){
   $location = $row['location'];
   $name = $row['name'];
   echo "<div style='float: left; margin-right: 5px;'>
	  <video src='".$location."' controls width='320px' height='320px' ></video>     
	  <br>
	  <span>".$name."</span>
   </div>";
 }
 ?>

</div>
		<section class="section-1">
			<h3> How To Make Own Nursery? </h3>
			<div class="img-box">
						
						<img src="https://thearchitecturedesigns.com/wp-content/uploads/2018/09/14-diy-hanging-planter-759x500.jpg"align="center" class="img-responsive">


						
	               </div>

			<h4> Types Of Nursery </h4>

			<p><br> 1.Temporary Nursery  </br>


				<br> 2. Permenent Mursery </br>
				<br> Temporary Nursery: The Temporary Nurseries are season based. The nursery stock is supplied for a certain period. The production is stopped when the requirement is fulfilled</br>
				<br> Permenent Nursery: This is a nursery that does not depend on the season, and the owner uses it for commercial purposes. This is the reason this land could be of any dimensions required by the owner, relatively larger than a temporary nursery. This type of nursery has all the structures like a selling point, compost pit, nursery beds, office, guard room, etc., as permanent structures to facilitate the propagation in a regular manner.</br>

			</p>

				<h5> HOME GARDEN </h5>
                 <div class="img-box">
						<img src="https://i.ytimg.com/vi/3X614AD1ltw/maxresdefault.jpg"align="left" class="img-line">
						
	               </div>
	               <p> Homegarden is an area of land, individually owned, surrounding a house and usually planted with a mixture of perennials and annuals. It is an important but inexperienced way of providing a continuous supply of fresh vegetables for family table.It is also good for human health.New evidence shows that gardening activities may spur growth in your brain memory-related nerves.Before you start a home garden, you should analyze your location and consider what kind of plants you are trying to grow. Check plant packages and catalog descriptions for details on ideal conditions for sunlight, water, planting zones, and more.</p>

	                <h6>9 best ways to maintain garden at home easily</h6>
	                 <div class="img-box">
						<img src="https://www.gardeningknowhow.com/wp-content/uploads/2020/06/gardening-picture-id534227013.jpg"align="right" class="img-line">
						
	               </div>

	                <p><br>Examine the plants carefully before buying</br>
	                <br>Use a yard paste that is fully composted</br>
	                <br>Get rid of the bugs and insects</br>
	                <br>Keep it clean and tidy</br>
	                <br>Use fertilizers carefully</br>
	                <br>Prune the damaged limbs properly</br>
	                <br>Arrange and plant the trees properly</br>
	                <br>Water your plants properly</br>
	                <br>Do not crowd the plants</br></p>

	                <h5> OFFICE GARDEN </h5>
                 <div class="img-box">
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXUrr11xFgOTiJ24Pab7s_tsu78UhZPnmzeg&usqp=CAU"align="left" class="img-line">
						
	               </div>
	               <p> A small, stand alone, building that is designed for the domestic garden and is primarily used for telecommuting or as an office by small businesses. A garden office is generally quite robust and should not be confused with a garden shed, summerhouse or a log cabin.A garden anywhere is a benefit to health in its surroundings.  Corporate gardens are a low cost strategy to provide employees with the health benefits of fresh air and greenery.The feel of natural soil and fresh air in the office garden gives a calm easiness which makes its way to the work desks</p>

	                <h6>5 Tips to Start an Office Garden</h6>
	                 <div class="img-box">
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUG7-JprllVB9rygEukkVovXW47IIcc8HvQg&usqp=CAU"align="right" class="img-line">
						
	               </div>
	                <p><br>1. Purchase old garden planters</br>
	                <br>2. Plan the garden carefully</br>
	                <br>3. Set the location of your office garden</br>
	                <br>4. Use indoor plants if needed</br>
	                <br>5. Take care of your plants</br></p>

	                <h5> TERRACE GARDEN </h5>
                 <div class="img-box">
						<img src="https://indiagardening.com/wp-content/uploads/2020/08/20-Beautiful-Terrace-Garden-Ideas2.jpg"align="left" class="img-line">
						
	               </div>
	               <p>A terrace garden is a garden which is established on a terrace, roof, usually in a house where there is limited gardening space. These types of gardens are especially popular in urban areas, and they are sometimes used in restaurants and other establishments as well.Terrace garden Also known as roof garden,it is a garden that cultivates vegetables, fruits or flowers on the balconies or roof of buildings.The presence of terrace gardens lowers the temperature of floors below the garden by 6 to 8 degrees Celsius.Gives you and your family true nutrition.It gives The convenience of safe,healthy green fresh fruits or vegetables.</p>

	                <h6> Tips for Terrace Gardening</h6>
	                 <div class="img-box">
						<img src="https://www.thehindu.com/life-and-style/homes-and-gardens/7mzwdp/article31405995.ece/ALTERNATES/LANDSCAPE_1200/22MPTERRACEGARDEN"align="right" class="img-line">
						
	               </div>

	                <p><br>1. Check the load-bearing capacity of the roof slab</br>
	                <br>2. Essential pre-treatments</br>
	                <br>3. Get the right soil mixture</br>
	                <br>4. Choose the right type of plants</br>
	                <br>5. Plan the seating and other aesthetic elements</br>
	                <br>6. After-care and maintenance</br>
	               





	               	

				
			</section>
	
	</div>

	

</body>
</html>