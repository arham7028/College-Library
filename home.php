<?php
include "db.php";
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true) {
    header("location: log-in.php");
    exit;
} else {
    # code...
}
$name = "Home";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GCOEY||HOME</title>
    <link rel="stylesheet" href="home.css">
    <style>
      .notice{
    border: 1px solid black;
    border-radius: 10px 10px;
    width: 35%;
    overflow: hidden;
    margin: auto;
    list-style:circle;
    line-height: 4vh;
    margin-right: 20px;
}
.teacher li{
    list-style: none;
    margin-top: 26px;
    
}
.teacher{
  margin-left: 45px;
}
.dbatu{
    border: 3px solid rgb(236, 234, 234);
    width: 310px;
    overflow: hidden;
    margin: 24px;
    margin-left:70px;
}
.imp{
  margin-left: 40px;
}
.ds{
  margin-top: -996px;
}
.sb img{
    margin-top: 50px;
}
.vrs img{
    margin-top: 50px;
}
.pp img{
    margin-top: 50px;
}
.pp {
    margin-top: 26px;
    margin-bottom: 366px;
    margin-top: -331px;
}
.vrs {
    margin-top: -601px;
    margin-bottom: 763px;
}
.sb{
            margin-top: 26px;
            margin-bottom: 98px;
}
#services .box {
  border: 2px solid brown;
  padding: 4px;
  border-radius: 23px;
  background-color: #8ebde9;
  margin-bottom: 20px;
  text-align: center;
  width: 292px;
  height: 339px;
  margin-right: 54px;
}
a{
  margin-right: 75px;
}
#qna{
  margin-left: 70px;
}
#pic-1{
width: 128%;
}
#pic-2{
  width: 128%;
}
#pic-3{
  width: 128%;
}
.mySlides{
  margin-left: -38%;
 margin-top: -32px;
}
.hero{
  height: 87vh;
}
    </style>
</head>
<body>
  <div id="contains">
      <div class="hero">
       <?php include "nav.php";?>
       <div id="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides">
          <div class="numbertext">1 / 3</div>
         <div class="same"><img src="pic-1.jpg" id="pic-1" style="height:454px" ></div>
          <div class="text">The Education Is Most Important Weapon IN Whole World!!! </div>
        </div>
      
        <div class="mySlides">
          <div class="numbertext">2 / 3</div>
          <img src="pic-2.jpg" id="pic-2" style="height:454px">
          <div class="text">Start Your Journey To Achive Your Goals!!!</div>
        </div>
      
        <div class="mySlides">
          <div class="numbertext">3 / 3</div>
          <img src="pic-3.jpg"  id="pic-3" style="height:454px">
          <div class="text">Focus On Your Goals!!!</div>
        </div>
      
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <!-- The dots/circles -->
      <!-- <div style="text-align:center; margin-top:-32px">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div> -->
      <marquee width="100%" direction="left" height="100px">
        <strong> Your best teacher is your last mistakes!!!!</strong>
        </marquee>
    </div>
    <hr>
    <div id="gcoey">
          <div class="welcome">
              <h2>Welcome To The <strong>GCOEY LIBRARY</strong></h2>
                <p>Even if you don’t often have the opportunity to visit campus, many of the library’s collections and services are open to you. Through this website, you’ll find access to scholarly journal articles and databases,links to treasures from our special collections, information on exhibits in our libraries, and updates on library events.</p>
            </div>
          <div class="notice">
            <h2>Notice</h2>
              <marquee width="90%" direction="up" height="100px"><ul>
                  <li>Last Updated Notes Upto Summer 2022 Session</li>
                  <li>Last Updated Syllabus As Per <strong>DBATU</strong> University</li>
                  <li>Last Updated Question Banks </li>
                  <li>New Question Banks Available Soon</li>
                  <li>For Further Updates Stay With Us</li>
               </ul>
              </marquee>
          </div>
    </div> <br><hr>
    
    <section id="facilities">
        <h1 class="secondfont">Our Facilities</h1>
        <div id="services">
            <a href="/course.html" target="blank">
                <div class="box">
                    <img src="education.png" alt="img" height="150px">
                    <h3 class="thirdfont">Notes</h3>
                    <p class="local">Here you can access and downlode any book for free.Different types of pdfs or ppt
                     available here. 
                    </p>
            </a>
        </div>
        <a href="papers.php" target="blank" id="qna">
            <div class="box">
                <img src="books.png" alt="img" height="150px">
                <h3 class="thirdfont">Question Papers & Solutions</h3>
                <p class="local">Here privious year question papers and its answers are provided.</p>
            </div>
        </a>
        <a href="#" target="blank">
            <div class="box">
                <img src="delivry.png" alt="img" height="150px">
                <h3 class="thirdfont">College library</h3>
                <p class="local">
                    Through the college library you can get hardcopy of the of the books for your study.
                </p>
            </div>
            </div>
        </a>
    </section>
    <div id="imp">
      <h1 class="cinfo">IMPORTANT LINKS</h1>
        <div id="half">
         <div class="dbatu">
            <img src="dbatu.jpeg" width="100%" height="180px">
               <h5 class="card-title"><a href="https://dbatu.ac.in/" target="blank">DBATU</a></h5>
                   <p class="card-text">The University is committed to provide quality technical education, research and development services to meet the needs of industry, business, service sector and society, at large.</p>
               <button><a href="https://dbatu.ac.in/" target="blank">View</a></button> 
         </div>
         <div class="dbatu">
            <img src="gcoey.png" width="100%" height="180px">
               <h5 class="card-title"><a href="https://gcoey.ac.in/" target="blank">GCOEY</a></h5>
                   <p class="card-text">Govt College of Engineering, Yavatmal (GCOEY) promises to fulfill quality technical human resource needed for these sectors in India.</p>
               <button class="vew"><a href="https://gcoey.ac.in/" target="blank" >View</a></button> 
         </div>
         <div class="dbatu">
          <img src="intershala.jpeg" width="100%" height="180px">
             <h5 class="card-title"><a href="https://trainings.internshala.com/?utm_source=Google-Search&utm_campaign=CT-Search-Brand-Oct22&utm_adgroup=Brand&utm_locationinterest=&utm_searchkeyword=internshala&utm_keywordid=kwd-296575527534&gclid=Cj0KCQiAvqGcBhCJARIsAFQ5ke6jas4fvUUyE_nIIOGTMyN3yR_L_o2UmgMsx0LJXgGFYyTkYUmvAIkaAknlEALw_wcB" target="blank">INTERNSHALA</a></h5>
                 <p class="card-text">Internshala Trainings certificate is recognized by over 1.8 lakh companies. Enroll now. Get Internship & Job Preparation Training Free With Online Courses.
                 </p>
             <button  class="vew"><a href="https://trainings.internshala.com/?utm_source=Google-Search&utm_campaign=CT-Search-Brand-Oct22&utm_adgroup=Brand&utm_locationinterest=&utm_searchkeyword=internshala&utm_keywordid=kwd-296575527534&gclid=Cj0KCQiAvqGcBhCJARIsAFQ5ke6jas4fvUUyE_nIIOGTMyN3yR_L_o2UmgMsx0LJXgGFYyTkYUmvAIkaAknlEALw_wcB" target="blank">View</a></button> 
            </div>
        </div>
           <div id="full">
             <div class="dbatu">
              <img src="dte.jpeg" width="100%" height="180px">
                 <h5 class="card-title"><a href="http://dte.maharashtra.gov.in/" target="blank">DTE</a>
                </h5>
                     <p class="card-text">The Directorate has under it’s development and supervisory ambit, around 1600 Technical Education institutions across the state of Maharashtra.</p>
                 <button><a href="http://dte.maharashtra.gov.in/" target="blank">View</a></button> 
             </div>

             <div class="dbatu">
              <img src="DBT.png" width="100%" height="180px">
                 <h5 class="card-title"><a href="https://mahadbtmahait.gov.in/SchemeData/SchemeData?str=E9DDFA703C38E51AA07C7E01997E4885" target="blank">DBT</a></h5>
                     <p class="card-text">Maha DBT – Online direct benefit transfer scheme to distribute scholarships for students studying in Maharashtra state by the government of Maharashtra.</p>
                 <button><a href="https://mahadbtmahait.gov.in/SchemeData/SchemeData?str=E9DDFA703C38E51AA07C7E01997E4885" target="blank">View</a></button> 
             </div>
                <div class="dbatu">
                  <img src="engg.png" width="100%" height="180px">
                   <h5 class="card-title"><a href="https://www.enggsolution.com/" target="blank">ENGG-SOLN</a></h5>
                   <p class="card-text">Enggsolution provides all in one solution for Acadecmics , Trainings and placements for engineering students.</p>
                   <button class="vew"><a href="https://www.enggsolution.com/" target="blank">View</a></button> 
                </div>
           </div>
     </div>
     <hr>
    </div>
  </div> 
  <div class="teacher">
        <ul>
             
             <div class="sb">
              <li><img src="sid.jpg"><br>
              <p><strong>&nbsp;&nbsp; &nbsp; &nbsp;Jr. Developer &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;</strong><br>Higher & Technical Education</p></li>
            </div>
            <div class="pp">
              <li><img src="hr.jpg"><br>
              <p><strong>&nbsp;&nbsp;&nbsp;Project Designer &nbsp;&nbsp;&nbsp;&nbsp;</strong><br>Higher & Technical Education</p></li>
            </div>
            <div class="vrs">
              <li><img src="sahil.jpg"><br>
              <p><strong>&nbsp;&nbsp;Assistant Manager &nbsp;&nbsp;&nbsp;</strong><br>Higher & Technical Education</p></li>
            </div>
            <div class="ds">
               <li><img src="yash.jpg"><br>
                <p><strong>&nbsp;&nbsp;Project Secreatery &nbsp;&nbsp;&nbsp;</strong><br>Higher & Technical Education</p></li>
             </div>
        </ul>
      </div> 
      <div id="info">
        <div class="main">
          <h3><i class="fa fa-users" aria-hidden="true">&nbsp;</i>About Group</h3><hr>
         <p>Designed to provide Question Papers, Solutions &<br> Notes mcq questions with answers pdf<br> Lonere university by <strong>DAV.</strong></p>
        </div>
           <div id="usl" class="main">
              <h3 class="ful"><i class="fa fa-link" aria-hidden="true">&nbsp;</i>Useful Links</h3>
             <a href="https://gcoey.ac.in/"><p class="use">gcoey.ac</p></a>
           </div>
         <div id="contact" class="main">
          <div class="coni"><h3><i class="fa fa-user-circle" aria-hidden="true">&nbsp;</i>Contact Info</h3></div><hr>
            <div class="conii"><ul>
                  <li>GCOEY</li>
                  <li><i class="fa fa-map-marker" aria-hidden="true">&nbsp;</i>C-21,Naringe Nagar,Yavatmal-444022</li>
                  <li><i class="fa fa-envelope" aria-hidden="true">&nbsp;</i>dav@gmail.com</li>
                  <li><i class="fa fa-phone" aria-hidden="true">&nbsp;</i>7620005945</li>
                </ul>
              </div>
        </div>

    </div>
    <div id="foot">
      <footer>Copyright © 2020 by BatuPapers.<br>
               All Rights Reserved.</footer>
    </div>  
     <script>
      
//         let slideIndex = 1;
// showSlides(slideIndex);

// // Next/previous controls
// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }

// // Thumbnail image controls
// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }

// function showSlides(n) {
//   let i;
//   let slides = document.getElementsByClassName("mySlides");
//   let dots = document.getElementsByClassName("dot");
//   if (n > slides.length) {slideIndex = 1}
//   if (n < 1) {slideIndex = slides.length}
//   for (i = 0; i < slides.length; i++) {
//     slides[i].style.display = "none";
//   }
//   for (i = 0; i < dots.length; i++) {
//     dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";
//   dots[slideIndex-1].className += " active";
// } 
        let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
     </script> 
</body>
</html>