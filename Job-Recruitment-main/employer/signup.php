<?php
session_start();
$error = "";
include('../php/employer_signup.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/registeremployer.css" />
  <title>Sign Up </title>
  
</head>

<body>
    
  <div class="container">
  <div class="title"><?php echo $error ?></div>
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" name="sign_up" method="post"class="sign-in-form">
          <h2 class="title">Sign Up As An Employer</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="employer_name" placeholder="Enter your name" required>
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="user_name" placeholder="Enter your username" required>
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="cName" placeholder="Enter your company name" required>
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="website" placeholder="Enter your company website" required>
          </div>
          <div class="input-field">
            <i class="fas fa-phone"></i>
            <input type="text" name="telephone" placeholder="Enter your number" required>
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="e_mail" placeholder="Enter your email" required>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="confirm_pass" placeholder="Confirm your password" required>
          </div>
          
        
          <input type="submit" name="submit" value="Sign Up" class="btn solid" />

        </form>

      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Do You Want a Job</h3>
          <p>
            Create an account as an Applycant and Apply For Jobs as you wish. 
          </p>
          <a href="../applicant/signup.php">

            <button class="btn transparent" id="sign-up-btn">
              Applicant
            </button>
          </a>
          <p>OR Already A Member</p>

          <a href="../login.php">
            <button class="btn transparent" id="sign-up-btn">
              Sign In
            </button>
          </a>
        </div>
        <img src="../images/log.svg" class="image" alt="" />
      </div>

    </div>
  </div>

</body>

</html>