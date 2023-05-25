<?php
session_start();
include("./php/navigator.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/login.css" />
  <title>Sign in </title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <legend>
          <?php echo $error; ?>
        </legend>
        <form method="post" action="" class="sign-in-form">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="user_name" placeholder="Enter Username">
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Enter Password">
          </div>
          <input type="submit" name="submit" value="Login" class="btn solid" />

        </form>

      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Don't have an account? You can sign up as and Employer or as an Applicant
          </p>
          <a href="./employer/signup.php">

            <button class="btn transparent" id="sign-up-btn">
              Employer
            </button>
          </a>

          <a href="./applicant/signup.php">
            <button class="btn transparent" id="sign-up-btn">
              Applicant
            </button>
          </a>
        </div>
        <img src="images/log.svg" class="image" alt="" />
      </div>

    </div>
  </div>

</body>

</html>