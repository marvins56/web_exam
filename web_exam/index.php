<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IEEE CONFRENCE </title>
    <link rel="stylesheet" href="stylings.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  </head>
  <body>

    <header>
<div class="images">
  <img src="img2.jpg" alt="">
</div>

        <div class="menu">
          <div class="btn">
            <i class="fas fa-times close-btn"></i>
          </div>
          <a href="#about">ABOUT</a>
          <a href="login.php">LOGIN</a>
          <a href="register.php">REGISTER</a>
          <a href="info.php">Q&A</a>
            <a href="adminlogin.php">ADMIN</a>
        </div>
        <div class="btn">
          <i class="fas fa-bars menu-btn"></i>
        </div>
    </header>

<main>
  <div class="wrap_container">
    <div class="cols1 animated-border" data-aos="zoom-in-up" >
 <img src="img4.jpg" alt="">
    </div>
    <div class="cols">
      <h1>IEEE CONFRENCE</h1>
<p>IEEE is the world’s largest technical professional organization dedicated
  to advancing technology for the benefit of humanity.</p>
<h3>Mission statement:</h3>
<p>IEEE's core purpose is to foster technological
   innovation and excellence for the benefit of humanity.</p><br>
   <h3>Vision statement:</h3>
   <p>IEEE will be essential to the global technical community and to t
     echnical professionals everywhere, and be universally recognized for the contributions of technology and o
     f technical professionals in improving global conditions..</p>
       Click here__<a href="register.php">REGISTER TO ATTEND</a>
   </div>


  </div>
</main>
<section>
  <div class="about_container">
    <div data-aos="fade-right" class="about c1">
      <h2>ORGANIZER CONTACTS</h2>
      <span>

              <pre>
                KAUTA MARVIN
                Okmarvins@gmail.com
                0773603206
              </pre>

    </span>
    </div>

      <div data-aos="flip-left"  class="about c2">
        <h2>CONFRENCE VENUE</h2>
          <pre>
          Uganda Christian University, Bishop Road
           P.O. Box 4, Mukono, Uganda
          Telephone:+256 312 350 800 /880.
          Email us: info@ucu.ac.ug

        </pre>

       </div>

    <div data-aos="zoom-in" class="about c3">
      <h2> OUR PARTNERS</h2>
      <span>
        <img src="img2.jpg" alt="">
        <img src="ucu.png" alt="">
    </span>
    </div>
  <div data-aos="flip-up" class="about c4" id="about">
      <p id="countdownTitle"><strong>CONFRENCE BEGINS IN</strong></p>
      <div id="countdownTimer">
        <div id="days"></div>
        <span>Days  </span>
        <div> :</div>
        <div id="hours"></div>
         <span>Hours </span>
        <div> :</div>

        <div id="minutes"></div>
            <span>Minutes </span>
        <div> :</div>
        <div id="seconds"></div>
        <span>Seconds</span>
    </div>
    </div>
    </div>


</section>
<footer>
<div class="footer">
  <h1>Register to Attend:</h1><br>
  <h2>Venue: UGANDA CHRISTIAN UNIVERSITY</h2>
  <h3>DATE : 8th To 10th December 2021.</h3><br>
  <span>&copy; kauta_marvin_bscs2, IEEE CONFRENCE </span>

</div>

</footer>
<script type="text/javascript">
let expiryDateTime = "10 Dec 2021 12:00:00";
window.addEventListener('load', function(event){
   countdownTimer(expiryDateTime);
});
function countdownTimer(expiryDateTime){
    var countdownDateTime = new Date(expiryDateTime).getTime();


var timeInterval = setInterval(function() {
   var currentDateTime = new Date().getTime();

   var remainingDayTime = countdownDateTime - currentDateTime;

   var totalDays = Math.floor(remainingDayTime / (1000 * 60 * 60 * 24));
   var totalHours = Math.floor((remainingDayTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
   var totalMinutes = Math.floor((remainingDayTime % (1000 * 60 * 60)) / (1000 * 60));
   var totalSeconds = Math.floor((remainingDayTime % (1000 * 60)) / 1000);

   document.getElementById("days").innerHTML = totalDays;
   document.getElementById("hours").innerHTML = totalHours;
   document.getElementById("minutes").innerHTML = totalMinutes;
   document.getElementById("seconds").innerHTML = totalSeconds;



  if (remainingDayTime < 0) {
    clearInterval(timeInterval);
    document.getElementById("countdownTimer").innerHTML = "CONFRENCE HAS ENDED THANKS FOR ATTENDING";
   }

 }, 1000);
}

</script>
<script>
  AOS.init();
</script>
    <script type="text/javascript">
    //javascript for navigation bar effect on scroll
    window.addEventListener("scroll", function(){
      var header = document.querySelector("header");
      header.classList.toggle('sticky', window.scrollY > 0);
    });

    //javascript for responsive navigation sidebar menu
    var menu = document.querySelector('.menu');
    var menuBtn = document.querySelector('.menu-btn');
    var closeBtn = document.querySelector('.close-btn');

    menuBtn.addEventListener("click", () => {
      menu.classList.add('active');
    });

    closeBtn.addEventListener("click", () => {
      menu.classList.remove('active');
    });
    </script>

  </body>
</html>
