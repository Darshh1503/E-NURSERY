<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
    @media only screen and (max-width: display: ) 
* {
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: arial, ;
	color:yellow;
}
.header {
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 15px 30px;
	background: #23242b;
	color: #fff;
}
button
{
	width:auto;
	background: black;
	font-color: red;
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
	padding: 5px ;
	tex

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
	color: #fff;
	font-size: 50px;
	color:Black;
	text-align:left;
	margin: 10px;
	font-family: arial;
}
.section-1 h2
{
  color: green;
}
.section-1 p
{
	font-size: 20px;
	font-family: arial;
	
}

.side-bar ul li {
	font-size: 16px;
	padding: 15px 0px;
	padding-left: 20px;
	transition: 500ms background;
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
		<h2 class="u-name">Job apply</b>
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
					<a href="#">
						<i class="fa fa-magnet" aria-hidden="true"></i>
						<span>About us</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-home" aria-hidden="true"></i>
						<span>Home</span>
					</a>
				</li>
			</ul>
		</nav>
		<section class="section-1">
			<p>Exceptionally dedicated and resourceful Plant Nursery Worker with extensive botanical knowledge and excellent customer service skills. Able to work well independently with little to no supervision or as a member of a professional tree and plant care team. Adept at explaining complicated tree care and planting procedures to customers and other non-professional audiences in a clear and accessible fashion</p>
			<p>Nursery workers provide customers with information to help them select and care for trees, shrubs, flowers, and other plants. The job can also include record keeping, preparing budgets, development of marketing plans, and preparation of trees and shrubs for sale or shipment.</p>
			<img src="job1.jpg" align="left" height="200px"; width="300px"><img src="job3.jpg" height="200px"; width="300px">
			<h4>  Skills required for job </h4>
			<ol>
              <li>Extensive plant nursery care experience.</li>
              <li>Excellent proficiency in a variety of nursery plant types.</li>
              <li>Strong grasp of sales and inventory computer data systems.</li>
              <li>Exceptional physical stamina for working outdoors for long periods of time.</li>
              <li>Superior plant identification abilities.</li>
              <li>High verbal and written communication skills.</li>
            </ol>
            <img src="job2.jpg" align="right" height="300px"; width="300px">
            <h4>There are some task that they have to knowledge </h4>
            <ul>
            	<h4><li>Plant crops, trees, or other plants.</li></h4>
            	 <dd>
            	 	<li>Plant, spray, weed, fertilize, and water plants, shrubs, and trees, using hand tools and gardening tools.</li>
            	 	<li>Apply chemical solutions to plants to protect against disease or insects or to enhance growth.</li>
            	 </dd>
            	 <h4><li>Harvest plants, and transplant or pot and label them.</li></h4>
            	 <dd>
            	 	<li>Mark agricultural or forestry products for identification.</li>
            	 	<li>Harvest agricultural products</li>
            	 </dd>
            	 <h4><li>Evaluate quality of plants or crops.</li></h4>
            	 <dd>
            	 	<li>Feel plants' leaves and note their coloring to detect the presence of insects or disease</li>
            	 </dd>
            	 <h4><li>Sell and deliver plants and flowers to customers</li></h4>
            	 <dd>
            	 	<li>Sell and deliver plants and flowers to customers</li>
            	 	<li>Sell agricultural products.</li>
            	 </dd>
            	 <h4><li>Operate farming equipment.</li></h4>
            	 <dd>
            	 <li>Operate tractors and other machinery and equipment to fertilize, cultivate, harvest, and spray fields and plants</li>
            	 </dd>
            </ul>


		</section>
		
	
	</div>

</body>
</html>