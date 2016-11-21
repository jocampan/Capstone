<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Home</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/slider.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/superfish.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/sForm.js"></script>
     <script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
     <script src="js/tms-0.4.1.js"></script>
     <script>
      $(window).load(function(){
      $('.slider')._TMS({
              show:0,
              pauseOnHover:false,
              prevBu:'.prev',
              nextBu:'.next',
              playBu:false,
              duration:800,
              preset:'fade', 
              pagination:true,//'.pagination',true,'<ul></ul>'
              pagNums:false,
              slideshow:8000,
              numStatus:false,
              banners:false,
          waitBannerAnimation:false,
        progressBar:false
      })  
      });
      
     $(window).load (
    function(){$('.carousel1').carouFredSel({auto: false,prev: '.prev',next: '.next', width: 960, items: {
      visible : {min: 1,
       max: 4
},
height: 'auto',
 width: 240,

    }, responsive: false, 
    
    scroll: 1, 
    
    mousewheel: false,
    
    swipe: {onMouse: false, onTouch: false}});
    
    
    });      

     </script>
     <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">

    <![endif]-->
     </head>
     <body>
       <div class="main">
<!--==============================header=================================-->
 <header> 
  <div class="container_12">
    <div class="grid_12">
    <a href="index.php"><div>  <h2>Welcome to John John's Dogs</h2> </div></a>
    
         <div class="menu_block">
           <nav  class="" >
            <ul class="sf-menu">
			
                   <li><a href="index.php">Home</a></li>
                   <li><a href="aboutus.php">About Us</a></li>
                   <li><a href="Menu.php">Menu</a></li>
                   <li><a href="events.php">Events </a></li>
                   <li><a href="contactus.php">Contact Us</a></li>
				   <li><a href="login/adminmenu.php">Admin Login</a></li>
                 </ul>
              </nav>
           <div class="clear"></div>
		   
		   
           </div>
           <div class="clear"></div>
      </div>
    </div>
</header>

<!--=======content================================-->

 <div class="slider-relative">
    <div class="slider-block">
      <div class="slider">
        <ul class="items">
          <<li><img src="images/welcome.jpg" alt=""></li>
          <li><img src="images/welcome2.jpg" alt=""></li>
          <li class="mb0"><img src="images/welcome3.jpg" alt=""></li>
        </ul>
      </div>
    </div>
 </div>

      
   
<!--==============================footer=================================-->
<footer>    
  <div class="container_12">
    <div class="grid_12">
	 <div class="bottom_block">
     <nav><ul>
                   <li class="current"><a href="index.php">Home</a></li>
                   <li ><a href="aboutus.php">About Us</a></li>
                   <li><a href="Menu.php">Menu</a></li>
                   <li><a href="events.php">Events </a></li>
                   <li><a href="contactus.php">Contact Us</a></li>
                 </ul></nav>
    </div>
    <div class="clear"></div>
  </div>
</footer>
</div>
</div>
</body>
</html>