<!DOCTYPE html>
<html>
<head>
	<title> Menu Page</title>
<!--for Search button-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="menucss.css">
<!--<link rel="stylesheet" type="text/css" href="social.css">-->
</head>
<body>
<div id="top">
  <center>
  <a href="">Xiomi</a>
  <a href="">Apple</a>
  <a href="">Samsung</a>
  <a href="">htc</a>
  <a href="">Gionee</a>
  <a href="">Oppo</a>
  <a href="">Vivo</a>
  <a href="">One plus</a>
  <a href="">Colors</a>
  <a href="">coolpad</a>
  <a href="">Huawei</a>
  <a href="">Lava</a>
  <a href="">Motorola</a>
  <a href="">Nokia</a>
  <a href="">Sony Xperia</a>
  </center>
</div>

<div class="social">
      <a href="https://www.facebook.com/VolumeDownR" target="_blank"><img src="facebook.png" alt="Facebook" /></a>

      <a href="https://twitter.com/rackyesh1"target="_blank"><img src="twitter.png" alt="Twitter" /></a>

      <a href="https://www.youtube.com/channel/UCCX6xFCGaHbm8PIo9vtliPw?view_as=subscriber" target="_blank"><img src="youtube.png" alt="Youtube" /></a>

      <a href="https://www.instagram.com/rack_yesh/" target="_blank"><img src="instagram.png"></a>

  </div>
<a href="home.php""> <img src="logoBlack.jpg" ></a>



<?php
/*print_r($_SERVER);*/

?>
<div class="topnav">

    <?php if ($_SERVER['REQUEST_URI'] == '/project/home.php') { ?>
<b><a class="active" href="home.php" >Home</a></b>  
<?php  }else { ?>
  <b><a class="a" href="home.php" >Home</a></b>
<?php } ?>


  <?php if ($_SERVER['REQUEST_URI'] == '/project/news.php') { ?>
  <b><a class="active" href="news.php" >Latest News</a></b>
<?php  }else { ?>
  <b><a class="a" href="news.php" >Latest News</a></b>
<?php } ?>
        
        <?php if ($_SERVER['REQUEST_URI'] == '/project/review.php') { ?>
 <b> <a class="active" href="review.php" >Review</a></b>
<?php  }else { ?>
 <b> <a class="a" href="review.php" >Review</a></b>
<?php } ?>

    <?php if ($_SERVER['REQUEST_URI'] == '/project/contact.php') { ?>
 <b> <a class="active" href="contact.php" >Contact</a></b>
<?php  }else { ?>
<b>  <a class="a" href="contact.php" >Contact</a></b>
<?php } ?>

<?php if ($_SERVER['REQUEST_URI'] == '/project/tech.php') { ?>
<b>  <a class="active" href="tech.php" >Tech guides</a></b>
<?php  }else { ?>
 <b> <a class="a" href="tech.php" >Tech guides</a></b>
<?php } ?>
 
 <?php if ($_SERVER['REQUEST_URI'] == '/project/mobileprice.php') { ?>
<b>  <a class="active" href="mobileprice.php" >Mobile Price</a></b>
<?php  }else { ?>
<b>  <a class="a" href="mobileprice.php" >Mobile Price</a></b>
<?php } ?>
  
  <?php if ($_SERVER['REQUEST_URI'] == '/project/buy.php') { ?>
<b>  <a class="active" href="buy.php" >Buy Guides</a></b>
<?php  }else { ?>
 <b> <a class="a" href="buy.php" >Buy Guides</a></b>
<?php } ?>

  <br>
</div>

  </body>
</html>