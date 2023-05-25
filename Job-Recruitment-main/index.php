<?php
session_start();
include("./php/navigator.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="./css/landingpage.css" />
  </head>

  <body>
  <?php include('./header.php') ?>
    <div class="fullContainer banner" id="homeSection">
      
      <!--header ends here-->

      <div class="container">
        <h1>Partnering Your <span>Talent Growth</span></h1>
        <p>
          Welcome to our job recruitment system! We are dedicated to providing a streamlined and efficient platform for both employers and job seekers. Our system is designed to make the job search and hiring process as simple and straightforward as possible, with easy-to-use tools and intuitive navigation.
        </p>
        <button>Start Your Journey NoW</button>
      </div>
    </div>
    <!--homeSection ends here -->

    <section class="fullContainer" id="aboutSection">
      <div class="container">
        <h2 class="sectionTitle">About Us</h2>
        <p>
          Welcome to our job recruitment system! We are dedicated to providing a streamlined and efficient platform for both employers and job seekers. Our system is designed to make the job search and hiring process as simple and straightforward as possible, with easy-to-use tools and intuitive navigation.

At our job recruitment system, we are committed to providing the highest level of customer support and service to both employers and job seekers. Whether you are a job seeker looking for your next career opportunity or an employer seeking top talent, we are here to help you every step of the way.
        </p>
        <center>
        <div class="cards">
          <div class="applicantBox">
            <div class="title">Become a Applicant</div><br>
            <p>
              For job seekers, Our System provides job listings, personalized recommendations, profile creation, and application tracking with resume and cover letter uploads for streamlined job seeking.
            </p>
            <button>Apply Now</button>
          </div>
          <!--donation box ends here-->

          <div class="employeeBox">
            <div class="title">Become a Employee</div><br>
            <p>
              Our system enables employers to post job listings, manage applications, and track candidate progress with a user-friendly dashboard, and offers filtering tools for finding the best candidates
            </p>
            <button>Post Jobs Now</button>
          </div>
          <!--donation box ends here-->

        
        </div>
      </center>
      </div>
    </section>
    <!--about section ends here-->

   

    
  </body>
</html>
