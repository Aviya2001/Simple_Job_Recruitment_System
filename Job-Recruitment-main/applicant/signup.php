<?php
session_start();
$error = "";
include("../php/applicant_signup.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/registerApplicant.css" />
  <title>Sign Up </title>
  <script>
  var err = '<?php echo $error; ?>';
  if(err)
        alert(err);
</script>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" method="POST" class="sign-in-form">
          <h2 class="title">Sign Up As An Applicant</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="applicant_name" placeholder="Enter your name" required>
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="user_name" placeholder="Enter your username" required>
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="e_mail" placeholder="Enter your email" required>
          </div>
          <div class="input-field">
            <i class="fas fa-phone"></i>
            <input type="text" name="telephone" placeholder="Enter your number" required>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="confirm_pass" placeholder="Confirm your password" required>
          </div>
          <div class="qualification-details">
          <span class="qualification-title">Minimum Qualification</span><br>
          <input type="radio" name="min_qualification" id="dot-1" value="O/L">
          <input type="radio" name="min_qualification" id="dot-2" value="A/L">
          <input type="radio" name="min_qualification" id="dot-3" value="Diploma">
          <input type="radio" name="min_qualification" id="dot-4" value="Degree">
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">O/L</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">A/L</span>
            </label>
            <label for="dot-3">
              <span class="dot three"></span>
              <span class="gender">Diploma</span>
            </label>
            <label for="dot-4">
              <span class="dot four"></span>
              <span class="gender">Degree</span>
            </label>
          </div>
        </div>
        
          <input type="submit" name="submit" value="Sign Up" class="btn solid" />

        </form>

      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Want Anyone For Hire?</h3>
          <p>
            Create an account as an Employer and hire your Employee from here
          </p>
          <a href="../employer/signup.php">

            <button class="btn transparent" id="sign-up-btn">
              Employer
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