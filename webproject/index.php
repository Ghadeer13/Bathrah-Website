<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<!DOCTYPE html>
<!--weeb-->
<html>
<head>

<meta charset ="utf-8">
<title>بذرة </title>
  <h1><img src="https://i.dlpng.com/static/png/6647896_preview.png" alt= "bathrah logo" width="200" height="150"></h1>
  
 <div class="marquee" id="mycrawler"> هذا الموقع للعرض فقط  وليس لبيع النباتات </div>

<ul>
  <li><a href="login.php">تسجيل</a></li>
  <li><a href="index.php">الرئيسية</a></li>
    <li><a href="location.php">مشاتل بجواري </a></li>
  <li><div class="show"><a href="types.php">التصنيفات</a>
<ul class="list-categories">
    <li><a href="indoorplants.php">النباتات الداخلية </a> <br>
  </li><br/>
  <br/> 
  <li><a href="outdoorplants.php">النباتات الخارجية</a>
  <br></li><br/> <br/>
  <li><a href="flowerscactus.php">زهور وصبار<br></a>
  </li><br/> <br/>
  <li><a href="harmfulplants.php">نباتات ضارة للحيوانات<br></a>
  </li><br/> <br/>
</ul> 
</div>
   <li> <div class="show"><a>حسابي</a>
    <ul class="list-categories">
      <li><a href="logout.php">تسجيل الخروج</a>
      </li></ul>
    </ul>
  </div>

   <script type="text/javascript" src="http://elahmad.com/java/js/crawler.js"></script>

<style>
    
@import
 url(http://fonts.googleapis.com/earlyaccess/droidarabickufi.css);
/* alwajhh */
ul {

        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #daf1e4;
          text-align: center;
    }
    li {
        float: right;
        display: inline;
    }

    li a {
        display: block;
        color: #1c4a30;
        text-align: center;
        padding: 20px 16px;
        text-decoration: none;
    }

    li a:hover {
        background-color: #7dcfa7;
    }
    /* all of h1 */
    h1 {
    text-align : center ;
color: #7dcfa7
    }
    /* aln9 */
    p {
    color : white ;
    background-image: url("https://nationalgeographic.com/content/dam/environment/photos/future_of_food/organic_farming_rough/01_organic_farming_i8860_20181003_11260.adapt.1900.1.jpg");
      background-repeat: no-repeat;
    text-align: center;
    background-size: 1500px 700px;
    font-size: 20px ;
    display: block;
        padding:0px;
        text-decoration: none;
        margin: 0px;
    }
/* 3 pics */
    .v{
      padding: 90px;
      display: inline-block;
    }
    /* alt9nefat */
    .show:hover ul.list-categories{
  max-height: inherit;
  opacity: 1;
  background-color: #7dcfa7;
  display: block;
}

.list-categories{
  list-style-type: none;
  padding: 0px;
  margin: 0px;
  max-height: 0px;
  opacity: 0;
  overflow: hidden;
  transition: opacity 300ms ease;
  font-size: 15px;
  font-family: serif;
}
/* slide pics at the bottom of the website */
    * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
  text-align : center;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
/* color l aldot */
.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes
 fade {
  from {opacity: .4}
  to {opacity: 1}
}
/* 3n alwebsite */
    .f{
        background-color: #DCF5DC;
        text-align:right;
        font-size: 20px ;
font-family:cursive; 
     display: block;
        padding: 0px;
        margin: 0px;
        text-decoration: none;
    }
 /* a5r alpics */
.container {
  display: flex;
}

img {
  margin : 0;
  padding: 0;
}

.box{ 
  padding: 0;
  margin: 0;
  font-size: 15px;
  height: 400px;
margin: 70px;
text-align :center;
font-family: "Droid Arabic Kufi" , serif;

}

</style>

</head>

<body>

 <script type="text/javascript">
marqueeInit({
  uniqueid: 'mycrawler',
  style: {
    'padding': '10px',
    'width': '1000987656780',
    'height': '353543',
    'background': '#7dcfa7',
    'left': '0%',

  },
  inc: 8, //speed - pixel increment for each iteration of this marquee's movement
  mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
  moveatleast: 1,
  neutral: 150,
  savedirection: true
});
</script>

  <p> 
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

  عَنْ أَنَسِ بْنِ مَالِكٍ رَضِيَ اللَّهُ عَنْهُ ، قَالَ : قَالَ رَسُولُ اللَّهِ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ : مَا مِنْ مُسْلِمٍ يَغْرِسُ غَرْسًا ، أَوْ يَزْرَعُ زَرْعًا ، فَيَأْكُلُ مِنْهُ طَيْرٌ أَوْ إِنْسَانٌ أَوْ بَهِيمَةٌ ، إِلَّا كَانَ لَهُ بِهِ صَدَقَةٌ 
  
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

<br/><br/><br/><br/>

    <div class="v">
     <img src ="https://i0.wp.com/post.healthline.com/wp-content/uploads/2020/06/Aloe-Vera-1.png?w=525" width="200" height="180" > </div>

<div class="v">
     <img src ="https://i0.wp.com/post.healthline.com/wp-content/uploads/2020/06/ZZ-Plant-2.png?w=525" width="200" height="180"> </div>

     <div class="v">
     <img src ="https://i0.wp.com/post.healthline.com/wp-content/uploads/2020/06/Snake-Plant-2-1.png?w=525"width="200" height="180" > </div>

      <br/><br/>
 <br/><br/>
 <h1><img src ="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/07368d66-d6bd-4655-a2cd-e4caf10da3e6/d9do7uc-82a5c909-122c-4cde-8420-8e849be0e1fb.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvMDczNjhkNjYtZDZiZC00NjU1LWEyY2QtZTRjYWYxMGRhM2U2XC9kOWRvN3VjLTgyYTVjOTA5LTEyMmMtNGNkZS04NDIwLThlODQ5YmUwZTFmYi5naWYifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.oTDiXsn7NO-ft3BCKN22cdl8gSzRRuaqZOV8LZDzxhk"width="50" ></h1>

<div class="f">
<img src="https://i0.wp.com/post.healthline.com/wp-content/uploads/2020/06/435791-Forget-You-Have-Plants-11-Types-That-Will-Forgive-You_Header-1.jpg?w=1155&h=1528"alt= "plant img" width="600" height="420" align="left">
 <br/><br/><br/><br/><br/>بــذرة  <br/>موقع الكتروني جديد مهتم بنشر الوعي حول انواع النباتات و طريقة العنايه بها، تم تصميمه من قبل طالبات مادة تكنلوجيا الويب لجامعة القصيم  

   <br/><br/><br/><br/><br/><br/><br/><br/>
</div>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://cdn.shopify.com/s/files/1/1706/1307/products/Yucca-elephantipes-Spineless-Yucca_5000x.jpg?v=1569061520" style="width:50%">
  <div class="text"style="color : black ;">
     <b>اليوكا
</b></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://cdn.shopify.com/s/files/1/1706/1307/products/Sansevieria-zeylanica-Snake-Plant-Esra-Graphite-Plant-Pot_15be954b-0e04-4050-9dc2-fcb424c288f8_2000x.jpg?v=1569124086" style="width:50%">
  <div class="text"style="color : black ;">
     <b>
     جلد النمر
</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://cdn.shopify.com/s/files/1/0758/3437/products/Kentia_palm_800x.jpg?v=1588162914" style="width:50%">
  <div class="text"style="color : black ;">
     <b>
     كينيتيا

</b></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<h1> <br/> أشهر النباتات التي تعيش في الخليج العربي 
    <br/><br/><br/></h1>  

<div class="container">
 <a href="#"> <img src="https://i.pinimg.com/originals/94/59/cc/9459ccb2c54184b9dc76a5ef2e1bc669.jpg" height="400" alt="hawraa"></a>
  <div class="box">
<h1>اجلونيما سلفر باي
   </h1><br/>
اجلونيما (Aglaonema) سلفر باي، من النباتات الجميلة ذات الأوراق الخضراء المتموجة، لاتحتاج للكثير من العناية،
ويمكن وضعها في المنازل أو بيئات العمل المختلفة

</div> 
<a href="#"><img src ="https://assets.sainsburys-groceries.co.uk/gol/7511181/1/640x640.jpg"alt= "kenetia img" height="400" ></a>
</div>

<div class="container">
  <div class="box">
<h1>صبار حوراء القصر</h1> <br> 

حوراء القصر أو الهورثيا (Haworthia cymbiformis) تعتبر من النباتات العصارية والدائمة الخضرة ولاتحتاج للكثير من العناية.

  </div> 
<a href="#"><img src="https://i.pinimg.com/originals/52/83/a6/5283a6e6207c1521931cf9b565c3cb83.jpg"alt= " img" height="400" ></a>
  <div class="box"><h1>زهرة فريسيا<br/></h1>
تعتبر من النباتات الجميلة التي تتعدد ألوان أزهاره، حيث تضفي مظهر لطيف ومبهج، يمكن وضعها في غرف النوم أو
المكاتب أو دورات المياة .</div>
</div> 

</body>
</html>