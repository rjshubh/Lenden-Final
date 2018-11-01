<style type="text/css">
body{
font-family: verdana,sans-serif;
margin: 0;
}

.slideshow-container{
width: 100%;
position: relative;
margin: auto;
}

.numbers{
position: absolute;
top: 0;
color: #f2f2f2;
padding: 8px 12px;
font-size: 12px;
}

.myslides{
display: none;
}

.prev , .next{
position: absolute;
top: 50%;
font-size: 18px;
font-weight: bold;
padding: 16px;
margin-top: 30px;
border-radius: 0 3px 3px 0;
color: #fff;
cursor: pointer;
}

.next{
right: 0;
border-radius: 3px 0 0 3px;
}

.prev:hover,.next:hover{
background-color: rgba(0,0,0,0.8);
}

.caption{
text-align: center;
position: absolute;
bottom: 8px;
width: 100%;
color: #f2f2f2;
font-size: 15px;
padding: 8px 22px;
}

.dots{
width: 13px;
height: 13px;
background: gray;
display: inline-block;
border-radius: 50%;
cursor: pointer;
}

.fade{
animation-name:fade;
animation-duration:1.5s;
}

@keyframes fade{
from {opacity: 0.4;}
to {opacity: 1;}
}

.active, .dot:hover {
background-color: #333;
}

</style>

<div class="slideshow-container">
<div class="myslides fade">
<div><img src="images/img1.png" width="100%" height="300"></div>
<div class="caption"></div>
</div>
<div class="myslides fade">
<div><img src="images/img2.jpg" width="100%" height="300"></div>
<div class="caption"></div>
</div>
<div class="myslides fade">
<div><img src="images/img3.jpg" width="100%" height="300"></div>
<div class="caption"></div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>
<div style="text-align:center">
<span class="dots" onclick="currentSlide(1)"></span> 
<span class="dots" onclick="currentSlide(2)"></span> 
<span class="dots" onclick="currentSlide(3)"></span> 
<span class="dots" onclick="currentSlide(4)"></span> 
</div>


<script type="text/javascript">
var slideIndex = 1;
showSlide(slideIndex);

function plusSlides(n){
showSlide(slideIndex += n);
}

function currentSlide(n) {
showSlide(slideIndex = n);
}

function showSlide(n){
var i;
var slides = document.getElementsByClassName("myslides");
var dots = document.getElementsByClassName("dots");

if (n > slides.length) { slideIndex = 1};

if (n < 1) { slideIndex = slides.length};
for (i=0;i<slides.length;i++) {
slides[i].style.display = "none";
};
for (i=0;i<dots.length;i++) {
dots[i].className = dots[i].className.replace(" active","");
};
slides[slideIndex-1].style.display = "block";
dots[slideIndex-1].className += " active";
}
</script>
<script type="text/javascript">
	var slideIndex = 1;
showSlide(slideIndex);

function plusSlides(n){
showSlide(slideIndex += n);
}

function currentSlide(n) {
showSlide(slideIndex = n);
}

function showSlide(n){
var i;
var slides = document.getElementsByClassName("myslides");
var dots = document.getElementsByClassName("dots");

if (n > slides.length) { slideIndex = 1};

if (n < 1) { slideIndex = slides.length};
for (i=0;i<slides.length;i++) {
slides[i].style.display = "none";
};
for (i=0;i<dots.length;i++) {
dots[i].className = dots[i].className.replace(" active","");
};
slides[slideIndex-1].style.display = "block";
dots[slideIndex-1].className += " active";
}
</script>


