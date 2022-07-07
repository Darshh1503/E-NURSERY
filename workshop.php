<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>webinar</title>
	<style>
	body
{
	margin:1px;
	padding: 1px;
	font-family: arial;
}
section
{
	width: 100%;
	height: 100vh;
	background: url(b1.jpg);
	background-size: cover;
}
section .leftBox
{
	width: 50%;
	height: 100%;
	float: left;
	padding: 50px;
	box-sizing:border-box;
}
section .leftBox .content
{
	color:white;
	background:rgba(0,0,0,.5);
	padding: 40px;
	transition: .5s;
}
section .leftBox .content:hover
{
	background:#e91e63;
}
section .leftBox .content h1
{
	margin: 0px;
	padding: 10px;
	font-size: 20px;
	text-transform: uppercase;
}
section .leftBox .content p
{
	margin: 10px 0 0;
	padding: 0;
}
section .events
{
	position: relative;
	width: 50%;
	height: 100%;
	background:rgba(0,0,0,.5);
	float: right;
	box-sizing: border-box;
}
section .events ul
{
	position: absolute;
	top:50%;
	transform: translateY(-50%);
	margin: 0;
	padding:50px;
	box-sizing: border-box;
}
section .events ul li
{
	list-style: none;
	background: white;
	box-sizing: border-box;
	height: 220px;
	border: 2px solid black;
	/margin:15px 0;/
}
section .events ul li .time
{
	position: relative;
	padding: 10px;
	background: gray;
	box-sizing: border-box;
	width: 30%;
	height: 100% ;
	float: left;
	text-align: right;
	transition: .5s;
}
section .events ul li:hover .time 
{
       background:#e91e63;
}
section .events ul li .time h2
{
	position: absolute;;
	margin:0;
	padding:0;
	top: 50%;
	left: 50%
	transform: translate(-50%,-50%);
	color: white;
	font-size: 30px;
}
section .events ul li .time h2 span
{
	font-size: 30px;
}
section .events ul li .details
{
	padding: 10px;
	background: white;
	width: 70%;
	box-sizing: border-box;
	height: 100%;
	font-family: arial;
	float: left;
}
section .events ul li .details h3
{
	position: relative;
	margin: 0px;
	padding: 0px;
	font-size: 22px;
	font-family: arial;
}
section .events ul li .details p
{
	position: relative;
	margin: 10px 0 0;
	padding: 10;
	font-size: 14px;
	font-family:arial;
}
section .events ul li .details a
{
	display: inline-block;
	text-decoration: none;
	text-transform: uppercase;
	padding: 10px 15px;
	border:2px solid black;
	margin-top: 20px;
	font-size: 18px;
	margin-bottom: 15px;
	transition: .5s;
	float: left;
	height: 20px;
	width: 200px;
}
section .events ul li .details a:hover
{
	background: gray;
	color: white;
	border-color:blue;
}
@media (max-width:100%)
{
	section
	{
	     height: 100%;
	     background-position:center;
	}
	section .leftBox
	{
		width: 100%;
    	height: auto;
   		float: none;
    	padding: 50px;
	}
	section .events
	{
 	    width: 100%;
    	height: auto;
   		background: transparent;
   		float: right;
	}
	section .leftBox .content
	{
		padding:20px;
	}
	section .leftBox .content h1
	{
		font-size: 30px;
	}
	section .events ul
	{
		position: relative;
		transform: translateY(0px);
		padding: 0 20px 20px;
	}
	section .events ul li
	{
		height: auto;
	}
	section .events ul li .time
	{
		width:80px;
		height:80px;
		padding: 0;
	}
	section .events ul li .time h2
	{
		font-size: 15px;
		line-height: 24px;
	}
	section .events ul li .time h2 span
	{
		font-size:15px;
	}
	section .events ul li .details 
	{
		width: 100%;
		float: none;
		padding-left: 100px;
		background: transparent;
	}
	section .events ul li .details a
	{
		padding: 5px 10px;
	}
}
	</style>
	
</head>
<body>

	<section>
			<div class="leftBox">
				<div class="content">
					<h1>webinar and seminar</h1>
					<p>Home gardens are an important building block, along with community gardens, parks and other natural spaces, to replacing lost habitat. Gardeners can help restore some of nature's balance by designing their landscape with the needs of wildlife in mind that's why  We are bringing our inspiring content to life with online educational seminars presented by leading horticulture professionals and our knowledgeable staff</p>
				</div>
			</div>
			<div class="events">
				<ul>
					<li>
						<div class="time">
							<h2>Date<br><span>month</span></h2>
					    </div>
					    <div class="details">
                            <h3>Herb Garden Guide</h3>
                            <p>Learn the step by step to set up, grow, and harvest your own delicious, organic herbs right from your own beautiful herb garden and say, 'goodbye' to store-bought and tasteless herbs for good </p>
                            <a href="#">View Details</a>  
					    </div>	
					    <div style="clear: both;"></div>
					</li><br>
					<li>
						<div class="time">
							<h2>Date<br><span>month</span></h2>
					    </div>
					    <div class="details">
                            <h3>Organic Gardening Made Easy</h3>
                            <p> This webinar guides you through 4 easy pieces to growing an organic garden with recipes and projects for building soil, composting, natural fertilizers, and managing insects/pests. </p>
                            <a href="#">View Details</a>  
					    </div>	
					   	<div style="clear: both;"></div>
					</li><br>
					<li>
						<div class="time">
							<h2>Date<br><span>month</span></h2>
					    </div>
					    <div class="details">
                            <h3>CONTAINER GARDEN IDEAS</h3>
                            <p>Container gardening or pot gardening is the practice of growing plants exclusively in containers instead of planting them in the ground. A container in gardening is a small and usually portable object used for displaying live flowers or plants. </p>
                            <a href="#">View Details</a> 
                            <div style="clear: both"></div> 
					    </div>
					</li>			
				</ul>
			</div>
	</section>
</body>
</html>