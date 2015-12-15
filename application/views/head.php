<!-- Bootstrap Core CSS -->
    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../../font-awesome/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../unslider/dist/css/unslider.css">
    <link href="../../css/full-slider.css" rel="stylesheet">
      <link rel="shortcut icon" type="image/x-icon" href="../../favicon.ico">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="../../sss/sss/sss.min.js"></script>
<link rel="stylesheet" href="../../sss/sss/sss.css" type="text/css" media="all">

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





  