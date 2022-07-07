<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    *{
  margin: 0;
  padding: 0;
  font-family: "montserrat",sans-serif;
  box-sizing: border-box;
}

.services-section{
  background: url(b1.jpg);
  background-size: cover;
  padding: 60px 0;
}
.inner-width{
  width: 100%;
  max-width: 1200px;
  margin: auto;
  padding: 0 20px;
  overflow: hidden;
}
.section-title{
  text-align: center;
  color: blue;
  text-transform: uppercase;
  font-size: 30px;
  transition: 0.3s ;
  
}
.section-title: hover
{
  color: black;
 
}
.border{
  width: 160px;
  height: 2px;
  background: #82ccdd;
  margin: 40px auto;
}
.services-container{
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.service-box{
  max-width: 33.33%;
  padding: 10px;
  text-align: center;
  color: 	#ffff00;
  cursor: pointer;
}

.service-icon{
  display: inline-block;
  width: 70px;
  height: 70px;
  border: 3px solid #82ccdd;
  color: #82ccdd;
  transform: rotate(45deg);
  margin-bottom: 30px;
  margin-top: 16px;
  transition: 0.3s linear;
}
.service-icon i{
  line-height: 70px;
  transform: rotate(-45deg);
  font-size: 26px;
}
.service-box:hover .service-icon{
  background: white;;
  color: green;
}
.service-title{
  font-size: 18px;
  color : green;
  text-transform: uppercase;
  margin-bottom: 10px;
}
.service-desc{
  font-size: 20px;
  color: black;
}

@media screen and (max-width:960px) {
  .service-box{
    max-width: 45%;
  }
}

@media screen and (max-width:768px) {
  .service-box{
    max-width: 50%;
  }
}

@media screen and (max-width:480px) {
  .service-box{
    max-width: 100%;
  }
}

    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  </head>
  <body>
    <div class="services-section">
      <div class="inner-width">
        <h1 class="section-title">Our Services</h1>
        <div class="border"></div>
        <div class="services-container">

          <div class="service-box">
            <div class="service-icon">
            <i class="fas fa-tree"></i>
            </div>
            <div class="service-title">plantation</div>
            <div class="service-desc">
              we are helping you in the plantation of any trees.
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
            <i class="fas fa-shopping-cart"></i>
            </div>
            <div class="service-title">online shopping</div>
            <div class="service-desc">
              we are providing to our customers for online shopping
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
              <i class="fa fa-male" aria-hidden="true"></i>
            </div>
            <div class="service-title">GARDENER</div>
            <div class="service-desc">
             we are also provide the facility for those who want to design,cutting your tree with use of gardener
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
              <i class="fa fa-user" aria-hidden="true"></i>
            </div>
            <div class="service-title">admin credential</div>
            <div class="service-desc">
             we are also provide the credential of admin foe those who are register for make your own nersury
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
              <i class="fa fa-briefcase" aria-hidden="true"></i>
            </div>
            <div class="service-title">job apply</div>
            <div class="service-desc">
             we are also provide option for job apply those who find the job for nersury
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
              <i class="fa fa-handshake-o" aria-hidden="true"></i>
            </div>
            <div class="service-title">workshop</div>
            <div class="service-desc">
             we are also provide the feature of workshop so user can get the infromation about workshop
            </div>
          </div></div>
        </div>
      </div>
    </div>
  </body>
</html>
