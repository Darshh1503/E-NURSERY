<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-NURSERY</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
</head>
<body>
   <header>
    <img src="logo.png" class="logo">
    <div class="menu-toggle"></div>   
    <nav>
      <ul>
      <li><a href="home.php" class="active" target ="_SELF">ABOUT PLANTS</a></li>
   <li> <a href="reg.php"target="_SELF" >REGISTRATION</a></li>
   <li> <a href="LOGIN.php" target="_SELF">LOGIN</a></li>
   <li> <a href="workshop.php" target="_SELF">WORKSHOP</a></li>
   <li> <a href="SERVICES.php" target="_SELF">SERVICES</a></li>
   <li> <a href="about us.php" target="_SELF">ABOUT US</a></li>
      </ul>
    </nav>
    <div class="clearfix"></div>
   </header>
   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.menu-toggle').click(function()
      {
        $('.menu-toggle').toggleClass('active')
        $('nav').toggleClass('active')
      })
    })
  </script>
   <div class="welcome-text">
    <h1>WELCOME TO THE WORLD OF NATURE</h1>
  </div>
  <div class="testimonails">
 
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
      <img src="https://hgtvhome.sndimg.com/content/dam/images/hgtv/fullset/2018/4/18/1/shutterstock_217144456_Alexander-Raths_planting-garden.jpg.rend.hgtvcom.1280.853.suffix/1524082599163.jpeg" class ="logo1" alt="image not found..." >
      <p>To create a garden is to search for a better world. In our effort to improve on nature, we are guided by a vision of paradise. Whether the result is a horticultural masterpiece or only a modest vegetable patch, it is based on the expectation of a glorious future. This hope for the future is at the heart of all gardening</p>
      
      </div>
      <div class="swiper-slide">
      <img src="https://www.vpr.org/sites/vpr/files/styles/x_large/public/202003/feeding-plants-istock-weerapatkiatdumrong.jpg"class ="logo1" alt="image not found..." >
      <p>Happiness is turning your space into a garden</p>
      
      </div>

      <div class="swiper-slide">
      <img src="data:image/jpeg;base64,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"class ="logo1" alt="image not found..." >
      <p>The garden is a love song, a duet between a human being and Mother Nature</p>
      
      </div>
      
      <div class="swiper-slide">
      <img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F37%2F2018%2F01%2F16022557%2Fplacing-plants-holes-garden-bed-5f324ff2.jpg"class ="logo1" alt="image not found..." >
      <p>No single sort of garden suits everyone. Shut your eyes and dream of the garden you’d most love then open your eyes and start planting. Loved gardens flourish, boring ones are hard work</p>
      
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  
 

  <!-- Swiper JS -->
  <script>src="../package/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
  
  </div>

  
</body>
</html>