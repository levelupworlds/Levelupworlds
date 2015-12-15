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
slideShow : false, // Set to false to prevent SSS from automatically animating.

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

        <h2>Levelup Project 001</h2>
        <p>Веб-сайт</p>
        <span>Разработка сайта под ключ для брендинг-агенства.<br>Разработка основных элементов брендинга</span>
        <br><a href="#" id="contact-us" class="promo-btn"><i class="fa fa-pencil"></i> Связаться с нами</a>
         <a href="#" style="margin-left:15px;color:#666;font-size:16px">О наc</a>
        
  </div>
  <div class="col-md-6" align="right" >

   <div class="detail-preview">
    <span class="detail-preview-wrap"></span><img width="400px" src="http://www.coolwebmasters.com/uploads/posts/2013-09/1379679585_free-flat-style-single-page-website-design-template.jpg">
  
   </div>

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
  
  <div class="slider">
    
    <img src="image/maket-sample/sample1.png">
    <img src="image/maket-sample/sample2.png">
    <img src="image/maket-sample/sample3.png">

  </div>


  <h2>Здесь будет текст к проекту</h2>
  Можно будет писать о стадиях проекта, этапы разработки и разговор о прочих мелочах этого проекта

  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempor elit a tempus malesuada. Vivamus sem nisl, dictum a ligula ut, imperdiet vestibulum sem. Praesent sagittis massa eu tellus tincidunt dictum. Suspendisse quis dolor vel orci viverra eleifend. Nulla at orci id nibh molestie cursus. Fusce finibus convallis dui, sed cursus nisl interdum sed. Nulla vitae ex cursus nulla elementum feugiat et vitae dui. Donec non dolor ornare, cursus elit ut, pulvinar erat.
   <h2>Заголово 2</h2>
   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempor elit a tempus malesuada. Vivamus sem nisl, dictum a ligula ut, imperdiet vestibulum sem. Praesent sagittis massa eu tellus tincidunt dictum. Suspendisse quis dolor vel orci viverra eleifend. Nulla at orci id nibh molestie cursus. Fusce finibus convallis dui, sed cursus nisl interdum sed. Nulla vitae ex cursus nulla elementum feugiat et vitae dui. Donec non dolor ornare, cursus elit ut, pulvinar erat.
  
   Теги:  <div class="tags"><ul>
                <li>Сайт</li>
                <li>Веб-разработка</li>
                <li>Верстка</li>
                <li>HTML</li>
                <li>CSS</li>
                <li>Интерфейсы</li>
                <li>UX/UI</li>
             </ul>

           </div>
            

</div>

</div>
<div class="col-md-4 details" style="border-radius:0 0 16px 0">


            <img src="image/avatar-test.jpg"><div class="author">Иван Иванов<b>Штатный дизайнер <span>levelup</span></b></div>
            <ul>
              <li><i>Код:</i> <b>Levelup Project 001</b></li>
              <li><i>Тип:</i>  <b>Веб-сайт</b></li>
              <li><i>Задача:</i>  <b>Разработка сайта под ключ для брендинг-агенства</b></li>
              <li><i>Инструменты:</i>  <b>Flat UI, Bootstrap, HTML, CSS, PHP</b></li>
              <li><i>Адаптивность:</i>  <b>Да</b></li>
              <li><i>Начало разработки:</i>  <b>07.12.2015</b></li>
              <li><i>Окончание:</i>  <b>20.01.2016</b></li>
              
            </ul>


             <div class="like-btn like-detail">Мне нравится <i class="fa fa-heart"></i></div>
</div>
</div>




</div>   
</div>
        
        

 
<?php include 'bottom.php'; ?>

</body>

</html>
