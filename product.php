<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="product.css">
    <title>Product</title>
</head>
<body>
    <div class="logo">
        <img src="image/vgz1.jpg"  width="100px " height="100px" >
    </div>
    <div class="menu">
        <ul>
            <li><a href="home.html" >Home</a></li>
            <li><a href="new.php">New</a></li>
            <li><a href="login.php">Sign In</a></li>
            <li><a href="product.php">Product</a></li>
        </ul>
    </div>
<!-- //////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="image/anh5.jpg" style="width:100%">
      <div class="text">Caption Text</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="image/anh9.jpg" style="width:100%">
      <div class="text">Caption Two</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="image/anh8.jpg" style="width:100%">
      <div class="text">Caption Three</div>
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
    
    <script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    </script>

<!-- //////////////////////////////////////////////////////////////////////// -->
<div class="main">
    <div class="con">
        <p style="color:white;">Folow us</p></br>
        
    </div>
    <div class="con">
        <p style="color:white;">Store</p></br>
        
    </div>
   </div>
   <div class="con">
       <p  style="color:white;">Link</p></br>
  <ul>
      <li><a href="#dathang" style="color:white;">Ordering Guide</a></li></br>
      <li><a href="#abouus" style="color: white;">About VietGang$</a></li></br>
      <li><a href="#security" style="color:white;">Policy And Privacy</a></li></br>
      <li><a href="#check" style="color:white;">Check Order</a></li></br>

  </ul>
  <ul>
       
   </div>
   <div class="con">
       <p style="color:white; text-align: center;"> SOCIA NETWORK </p>
      <img class="tao" src="http://vietgangz.com/wp-content/uploads/2020/10/hihi.png" width="200px" height="200px">
      <div class="anh">
          <div class="anh1">
              <a href="https://www.instagram.com/vietgangz_original/" target="_blank">
              <img src="http://vietgangz.com/wp-content/uploads/2020/09/Instagram-icon-WHITE-800x800-2-768x768.png" width="30px" height="30px">
          </a>
      </div>
      <div class="anh2">
          <a href="https://www.youtube.com/watch?v=QMEMbNRGPxE&ab_channel=VietgangzBrotherhood" target="_blank">
              <img src="http://vietgangz.com/wp-content/uploads/2020/09/tai-xuong-1-1.png"width="30px" height="30px">
          </a>
      </div>
      <div class="anh3">
          <a href="https://www.facebook.com/vietgangz" target="_blank">
              <img src="http://vietgangz.com/wp-content/uploads/2020/09/tai-xuong-2-1.png" width="30px" height="30px">
          </a>
      </div>
      </div>
   </div>
</div>




    </div>
    
</body>
</html>