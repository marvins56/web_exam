<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>user dashboard</title>
    <link rel="stylesheet" href="user.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" >
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  </head>
  <body>
    <div class="container">
         <div class="user_credentials">
            <div class="user_image">
    <img src="marvin.jpeg" alt="">
            </div>
            <div class="user_details">
              <span>logged in as.....</span>
              <strong>
                <p>NAME: <?php echo $_SESSION['username']; ?></p>

                <p>   <?php $mydate = time() + (7 * 24 * 60 * 60);
                  // 7 days; 24 hours; 60 mins; 60 secs
                  echo 'DATE:       '. date('Y-m-d') ."\n"; ?>
              <br>   <br> <a href="logout.php">logout.</a><br>
              <a href="#iot"> more info...</a><br>
            <span>Contact of users are listed below</span>
                </p>
              </strong>

            </div>

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
            <p>joon the confrence using the link below</p>
            <a href="https://zoom.us/j/95306254494?pwd=bWNTK29FWDNsTjNiM245V21aeWh2UT09">CLICK TO JOIN</a> <br>CONFRENCE ONCE TIMER ENDS

            </div>
          <div class="contact_list">
            <table>
              <tr>
                <th>ID</th>
                <th>USERNAME</th>
                <th>EMAIL</th>
                <th>PHONENO</th>

              <tr>

                <?php
          $query = "select * from users";
          $result = mysqli_query($con,$query);
          if($result){

            while ($row  = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $username = $row['username'];
                $email = $row['email'];
                $phoneno = $row['phoneno'];

                echo '<tr>
                  <td> '.$id.'</td>
                <td> '.$username.'</td>
                <td>'.$email.'</td>
                <td>'.$phoneno.'</td>

                </tr>';
            }
          }

                 ?>
            </table>
          </div>
    </div>
<div class="review">
  <h3>A REVIEW OF THE PREVIOUS CONFRENCES</h3>
</div>
    <section>
      <div class="about_us">
                    <div class="aboutus2">
          <figure class="cap-bot">
        <a href="#iot">   <img src="iot.jpg" alt=""></a>
            <figcaption>
          <p>The Internet of Things (IoT) and the mmWave Frontier</p>
            </figcaption>
          </figure>
                    </div>
          <div class="aboutus1">
              <div class="aboutus1">
        <figure class="cap-bot">
      <a href="#communication">  <img src="communication.jpg" alt=""></a>
        <figcaption>
        <p>IEEE Consumer Communications & Networking Conference 11-14 January 2019 // Las Vegas // USA</p>

        </figcaption>
        </figure>
          </div>
      </div>
              <div class="aboutus1">
              <figure class="cap-bot">
            <a href="#5g">  <img src="5g.jpg" alt=""></a>
              <figcaption>
              <p>5G Technology Workshop during Mobile World Congress in Barcelona </p>

              </figcaption>
              </figure>
                </div>

</div>




    </section>


    <div class="iot-sec">
      <div class="iot" id="iot">
        <h3>The Internet of Things (IoT) and the mmWave Frontier</h3>
        <p>The 3rd IoT Vertical and Topical Summit was held January 26 -27, 2020 as part of RWW2020 in San Antonio, Texas. The one and a half day Summit addressed the important role that mmWaves played in the IoT ecosystem.
           The choice of the theme, “IoT and the mmWave Frontier”, is motivated by increases in deployment and the regulatory attention paid to new allocations of licensed and unlicensed mmWave spectrum.

The Summit is designed to foster dialogue amongst professionals from industry, the public sector, and the research community. Participants will gather in a highly interactive setting to explore mmWave solutions— from 30GHz to 300GHz as well as the adjacent spectrum from 6GHz to 30GHz and 300GHz to 1,000GHz— and applications for IoT, with a focus on the opportunities and challenges for adoption. This includes electromagnetic-waves used as a technology for: (i) Communications; (ii) Sensors; and (iii) Manufacturing/Industrial Processes.
RWW Website: https://radiowirelessweek.org/</p>
<div class="iot-c">
  IoT is simply the introduction of Internet connectivity to
  devices that are by default, not internet enabled.
  These devices can detect/sense signals and transmit them
   to a cloud-based storage system. The data stored in the cloud
   storage can then be fed into a software platform that can clean,
   organize and analyze the data to derive intelligence therein. Slowly
    but surely, the impact of the Internet of Things (IoT) is gradually
    coming to the fore in our daily and business lives. Indeed, the IoT is the most disruptive technology of our lives in recent times.
</div>
      </div>

      <div class="communication" id="communication">
  <h3>IEEE Consumer Communications & Networking Conference</h3>
<p>Welcome to IEEE CCNC 2019!
IEEE Consumer Communications and Networking Conference, sponsored by IEEE Communications Society, is a major annual international conference organized with the objective of bringing together researchers, developers, and practitioners from academia and industry
working in all areas of consumer communications and networking</p>
  <div class="">
    IEEE CCNC 2019 will present the latest developments and technical solutions in the areas of home networking, consumer networking, enabling technologies (such as middleware) and novel applications and services. The conference will include a peer-reviewed program of technical sessions, special sessions, business
    application sessions, tutorials, and demonstration sessions.
  </div>
      </div>

      <div class="g_5" id="5g">
  <h3>5G Technology Workshop during Mobile World Congress in Barcelona</h3>
  <p>IEEE, the world’s largest professional organization advancing technology for humanity is hosting Future Technology Workshop focusing on technologies pertaining to 5G era and beyond in the backdrop of Mobile World Congress on Thursday, February 28, 2019 at University of Politecnica De Catalunya, Barcelona.</p>
  <p>This workshop is sponsored by IEEE Future Networks Initiative, and is aimed at bringing together researchers, scientists, technology experts, and stakeholders from the Industry, Governments and Academia to discuss Future Network technologies pertaining to 5G era systems, the opportunities and challenges that these pose for a broad spectrum of verticals e.g., smart cities, tactical and first responder missions, eHealth, connected cars, and infrastructure and ecosystem preparedness. This workshop is expected to serve as a catalyst to:
investigate and identify requirements for mass scale deployment of 5G era systems and drive open industry ecosystems and standards addressing such requirements;
discuss future trends to identify new research areas for technologies to be developed or enhanced to support future extensions targeting next ten year timeframe.
The workshop will have the expert talks and panel on the topics related to MIMO, applications and verticals, Edge Automation, Security, Cognitive Radio, Fronthaul,  Future Network Testbeds and Deployment considerations and much more. An Overview of the IEEE Futures Initiative will also be presented.</p>
      </div>
    </div>
<footer>
<p>&copy; kauta marvin bscs2</p>

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
    document.getElementById("countdownTimer").innerHTML = "   ";
   }

 }, 1000);
}

</script>
  </body>
</html>
