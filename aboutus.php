<?php

mysql_connect('localhost', 'jocampan_jcuser', 'jc1234');
mysql_select_db('jocampan_jcpub');

$sql = "SELECT * FROM `aboutus` WHERE id=1";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
$text = $row['description'];
$imageurl = "admin/uploads/".$row['image'];



?>

<!DOCTYPE html>
<html lang="en">
     <head>
     <title>About Us</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/style.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/superfish.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/sForm.js"></script>
     <script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
     <script>

      
     $(window).load (
    function(){$('.carousel2').carouFredSel({auto: false,prev: '.prev1',next: '.next1', width: 410, items: {
      visible : {min: 1,
       max: 1
},
height: 'auto',
 width: 410,

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
                   <li class="current"><a href="aboutus.php">About Us</a></li>
                   <li><a href="Menu.php">Menu</a></li>
                   <li><a href="index-4.html">News </a></li>
                   <li><a href="contactus.php">Contact Us</a></li>
                 </ul>
              </nav>
           <div class="clear"></div>
           </div>
           <div class="clear"></div>
      </div>
    </div>
</header>
<!--=======content================================-->

<div class="content"><div class="ic">About Our Restraunt</div>
  <div class="container_12">
    <div class="grid_12">
      <h2>About Us</h2>
	  <!-- JAC INSERT ABOUT US IMAGE HERE  -->
      <img src="<?php echo $imageurl ?>" alt="" class="img_inner">
      <p class="col1"> <?php echo $text ?>  <br>
    </div>
	

    </div>
    <div class="clear"></div>
    <div class="bottom_block">
      <div class="grid_6">

        <nav><ul>
                   <li><a href="index.php">Home</a></li>
                   <li class="current"><a href="aboutus.php">About Us</a></li>
                   <li><a href="Menu.php">Menu</a></li>
                   <li><a href="index-4.html">News </a></li>
                   <li><a href="contactus.php">Contact Us</a></li>
                 </ul></nav>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<!--==============================footer=================================-->


</body>
</html>