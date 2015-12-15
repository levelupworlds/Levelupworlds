<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Levelup Worlds - Фото & Видео</title>

   <!-- Bootstrap Core CSS -->
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../unslider/dist/css/unslider.css">
    <link href="../css/full-slider.css" rel="stylesheet">
      <link rel="shortcut icon" type="image/x-icon" href="../../favicon.ico">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="../sss/sss/sss.min.js"></script>
<link rel="stylesheet" href="../sss/sss/sss.css" type="text/css" media="all">

<script>
jQuery(function($) { 
$('.slider').sss();
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





  

</head>
<body style="padding-top:70px">
  <!-- Navigation -->
   <div class="navigation in-page" id="navigation">
       <div class="photo nav-item active"><a href="photo">Фото & Видео</a></div>
       <div class="web nav-item"><a href="brand">Брендинг</a></div>
       <div class="brand nav-item"><a href="web">Веб-разработка</a></div>
       <div class="music nav-item"><a href="#">Звук</a></div>

   </div>




   <div class="header-photo brand-head">

<div class="container" style="padding:10px 25px">
    <div class="row" style="margin-top:10%">
  
  <div class="col-md-6" align="left" style="vertical-align:middle;">

        <h2>Levelup</h2>
        <p>Брендинг</p>
        <span>Описание нашего сервиса. Что мы предлагаем. Промо-текст. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam congue arcu at dictum sollicitudin. Cras aliquet rutrum aliquet. Nam quis scelerisque magna. Integer tempor ante sed eros posuere, ac suscipit enim consequat. </span>
        <br><a href="#" id="contact-us" class="promo-btn"><i class="fa fa-pencil"></i> Связаться с нами</a>
         <a href="#" style="margin-left:15px;color:#666;font-size:16px">О наc</a>
        <div class="social">

        <div style="padding:10px">А это мы в социальных сетях</div>
          <a href="#"><p class="vk">Мы в <i class="fa fa-vk"></i></p></a>
          <a href="#"><p class="instagram">Мы в <i class="fa fa-instagram"></i></p></a>
          <a href="#"><p class="twitter">Мы в <i class="fa fa-twitter"></i></p></a>
          <a href="#"><p class="facebook">Мы в <i class="fa fa-facebook-square"></i></p></a>
        </div>

  </div>
  <div class="col-md-6" align="right" >

 <div style="max-width:83%" id="slider1" class="slider" align="center" style="overflow:visible;display:none;">
<div class="slide-item"><i class="fa fa-briefcase"></i><p>1. Серьезно подходим к<br>своему делу</p></div>
<div class="slide-item slide-2"><i class="fa fa-magic"></i><p>2. С нашим брендингом<br>вы удивите даже самых требовательных клиентов</p></div>
<div class="slide-item slide-3"><i class="fa fa-paper-plane"></i><p>3. Брендинг - это просто, когда<br>вы работаете с нами</p></div>
<div class="slide-item slide-4"><i class="fa fa-rocket"></i><p>4. Дадим хороший старт<br>вашему бизнесу</p></div>

</div>


  </div>
  
</div>

<div class="portfolio">
  
  <a href="#" id="button">Наши работы

<!-- вывод из базы данных цикла -->
    <div style="display:none!important;opacity:0;"></div><i class="fa fa-arrow-circle-down"></i></a>



</div>

  </div>
   </div>




       <div class="container" id="cards">
    <div class="row" align="center">



    <div class="col-md-6">
      
 <div class="card-item">
           <div class="card-top">
            <img src="image/avatar-test.jpg"><div class="author">Иван Иванов<b>Штатный дизайнер <span>levelup</span></b></div>
               <div class="like-btn">Мне нравится <i class="fa fa-heart"></i></div>

          </div>
          <div class="card-image"><img src="http://levelupworlds.com/media/k2/items/cache/47359a90eed3ee35f2dab5a3c718abb3_L.jpg" width="100%">
          <p>Название работы
              <span>Небольшое описание проекта. Для кого проект</span>
          </p>
        </div>
         <div class="card-bottom">
            Теги:  <div class="tags"><ul>
                <li>Фото</li>
                <li>Фотосет</li>
                <li>Дизайн</li>
                <li>Упаковка</li>
             </ul>

           </div>
            <div class="contact"><a href="#">Связаться с автором</a></div>
          </div>

        </div>


        <div class="card-item">
           <div class="card-top">
            <img src="image/avatar-test.jpg"><div class="author">Иван Иванов<b>Штатный дизайнер <span>levelup</span></b></div>
               <div class="like-btn">Мне нравится <i class="fa fa-heart"></i></div>

          </div>
          <div class="card-image"><img src="http://levelupworlds.com/media/k2/items/cache/32088387da419227f20729e6cf7687d8_L.jpg" width="100%">
          <p>Название работы
              <span>Небольшое описание проекта. Для кого проект</span>
          </p>
        </div>
          <div class="card-bottom">
            Теги:  <div class="tags"><ul>
                <li>Фото</li>
                <li>Фотосет</li>
                <li>Дизайн</li>
                <li>Упаковка</li>
             </ul>

           </div>
            <div class="contact"><a href="#">Связаться с автором</a></div>
          </div>

        </div>

        
        
    </div>
    <div class="col-md-6">


      <div class="card-item">
           <div class="card-top">
            <img src="image/avatar-test.jpg"><div class="author">Иван Иванов<b>Штатный дизайнер <span>levelup</span></b></div>
               <div class="like-btn">Мне нравится <i class="fa fa-heart"></i></div>

          </div>
          <div class="card-image"><img src="http://levelupworlds.com/media/k2/items/cache/7e58113966c67085953dd45e2ed189c9_L.jpg" width="100%">
          <p>Название работы
              <span>Небольшое описание проекта. Для кого проект</span>
          </p>
        </div>
         <div class="card-bottom">
            Теги:  <div class="tags"><ul>
                <li>Фото</li>
                <li>Фотосет</li>
                <li>Дизайн</li>
                <li>Упаковка</li>
             </ul>

           </div>
            <div class="contact"><a href="#">Связаться с автором</a></div>
          </div>

        </div>
          <div class="card-item">
           <div class="card-top">
            <img src="image/avatar-test.jpg"><div class="author">Иван Иванов<b>Штатный дизайнер <span>levelup</span></b></div>
               <div class="like-btn">Мне нравится <i class="fa fa-heart"></i></div>

          </div>
          <div class="card-image"><img src="http://levelupworlds.com/media/k2/items/cache/a07bb170c4a36161aa1f8f4859c19794_L.jpg" width="100%">
          <p>Название работы
              <span>Небольшое описание проекта. Для кого проект</span>
          </p>
        </div>
          <div class="card-bottom">
            Теги:  <div class="tags"><ul>
                <li>Фото</li>
                <li>Фотосет</li>
                <li>Дизайн</li>
                <li>Упаковка</li>
             </ul>

           </div>
            <div class="contact"><a href="#">Связаться с автором</a></div>
          </div>

        </div>

         
    </div>
      </div>
    </div>
<?php include 'bottom.php'; ?>

</body>

</html>
