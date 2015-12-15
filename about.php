<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Levelup Worlds - Детали о проекте</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="unslider/dist/css/unslider.css">
    <link href="css/full-slider.css" rel="stylesheet">
     

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="sss/sss/sss.min.js"></script>
<link rel="stylesheet" href="sss/sss/sss.css" type="text/css" media="all">

<script>
jQuery(function($) {


$('.slider').sss({


});

});
</script> 

<script>
$( document ).ready(function() {

$("#button").click(function() {
    $('html, body').animate({
        scrollTop: $("#cards").offset().top
    }, 1000);
});

$("#contact-us").click(function() {
    $('html, body').animate({
        scrollTop: $("#contact").offset().top
    }, 1000);
});

});
</script>

<script>
$( document ).ready(function() {

$(window).scroll(function(){
            if ( $(this).scrollTop() > 10){
                $('#navigation').css({ margin: "-100px" });
            } else {
                $('#navigation').css({ margin: "0px" });
            }
        });//scroll




$( "#map-btn" ).click(function( event ) {
  event.preventDefault();
  $( this ).hide(300);
  $("#map").show(300);
});


$( "#share-button" ).click(function( event ) {
  event.preventDefault();
  $( this ).hide(0);
  $("#share-script").show(300);
});


});
</script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="padding-top:70px">

    <!-- Navigation -->
   <div class="navigation in-page" id="navigation">
       <div class="photo nav-item"><a href="photo.php">Фото & Видео</a></div>
       <div class="web nav-item active"><a href="brand.php">Брендинг</a></div>
       <div class="brand nav-item"><a href="web.php">Веб-разработка</a></div>
       <div class="music nav-item"><a href="#">Звук</a></div>

   </div>



   <div class="header-photo">

<div class="container" style="padding:10px 25px">
    <div class="row" style="margin-top:5%">
  
  <div class="col-md-6" align="left" style="vertical-align:middle;">

        <h2>Что такое Levelup?</h2>
        <p>Разбор полетов</p>
        
     
        
  </div>
  <div class="col-md-6" align="right" >

  

  </div>
  
</div>



  </div>
   </div>




       <div class="container" id="cards">
    <div class="row" align="center" >
  <div style="background:#fff">
 

<div class="col-md-8 details" style="-webkit-box-shadow: 0 0 10px 0.1px #DBDBDB;
box-shadow: 0 0 10px 0.1px #DBDBDB;">

<div class="gallery">
  
  <div class="slider" style="max-height:400px;overflow:hidden;">
    
    <img src="https://pp.vk.me/c623218/v623218413/1140e/mK3HEFuOkq8.jpg">
    <img src="https://pp.vk.me/c624421/v624421453/1392a/9HTa0P_pY78.jpg">
    
    <img src="https://pp.vk.me/c621923/v621923556/ce53/jyrJ6BoYkgo.jpg">

  </div>


  <h2>О нашем проекте основная информация</h2>
  Тут будет информация о нашем проекте

  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempor elit a tempus malesuada. Vivamus sem nisl, dictum a ligula ut, imperdiet vestibulum sem. Praesent sagittis massa eu tellus tincidunt dictum. Suspendisse quis dolor vel orci viverra eleifend. Nulla at orci id nibh molestie cursus. Fusce finibus convallis dui, sed cursus nisl interdum sed. Nulla vitae ex cursus nulla elementum feugiat et vitae dui. Donec non dolor ornare, cursus elit ut, pulvinar erat.
   <h2>Заголовок 2</h2>
   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempor elit a tempus malesuada. Vivamus sem nisl, dictum a ligula ut, imperdiet vestibulum sem. Praesent sagittis massa eu tellus tincidunt dictum. Suspendisse quis dolor vel orci viverra eleifend. Nulla at orci id nibh molestie cursus. Fusce finibus convallis dui, sed cursus nisl interdum sed. Nulla vitae ex cursus nulla elementum feugiat et vitae dui. Donec non dolor ornare, cursus elit ut, pulvinar erat.
  
  
         <div class="social">

        <div style="padding:10px;font-size:25px" align="center">А это мы в социальных сетях</div>
          <a href="#"><p class="vk">Мы в <i class="fa fa-vk"></i></p></a>
          <a href="#"><p class="instagram">Мы в <i class="fa fa-instagram"></i></p></a>
          <a href="#"><p class="twitter">Мы в <i class="fa fa-twitter"></i></p></a>
          <a href="#"><p class="facebook">Мы в <i class="fa fa-facebook-square"></i></p></a>
        </div>

  </div>   

</div>

</div>
<div class="col-md-4 details" style="border-radius:0 0 16px 0">

<h3 style="margin-top:10px;padding-top:0px">Команда Levelup</h3>
            <div style="margin-top:20px"><img src="image/avatar-test.jpg"><div class="author">Иван Иванов<b>Штатный дизайнер <span>levelup</span></b></div></div><br>
            <div style="margin-top:10px"><img src="image/avatar-test.jpg"><div class="author">Иван Дмитриев<b>Штатный дизайнер <span>levelup</span></b></div></div><br>

            <div style="margin-top:10px"><img src="image/avatar-test.jpg"><div class="author">Иван Аносов<b>Штатный дизайнер <span>levelup</span></b></div></div><br>
            <div style="margin-top:10px"><img src="image/avatar-test.jpg"><div class="author">Иван Кириллов<b>Штатный дизайнер <span>levelup</span></b></div></div><br>
  

             
</div>
</div>




</div>   
</div>
        
        

 
<?php include 'bottom.php'; ?>

</body>

</html>
