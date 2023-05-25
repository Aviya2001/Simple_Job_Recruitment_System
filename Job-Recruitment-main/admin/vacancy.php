
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <title>Admin Employer Manage</title>
  <link rel="stylesheet" href="../css/admin_vacancy.css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <!--navigation bar left-->
  <div class="sidebar">
    <div class="logo-details">
      <!-- <i class="bx bx-grid-alt"></i>
      <span class="logo_name">Dashboard</span> -->
      <img src="../images/logo.png" class="logo">
    </div>
    <div class="welcome">
      <span>ADMIN</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="./applicant.php?show=applicant">
          <i class="bx bx-grid-alt"></i>
          <span class="links_name">Applicant Manage</span>
        </a>
      </li>
      <li>
        <a href="./employer.php?show=employer">
          <i class="bx bx-user"></i>
          <span class="links_name">Employer Manage</span>
        </a>
      </li>
      <li>
        <a href="./vacancy.php?show=vacancy">
          <i class="bx bx-list-check"></i>
          <span class="links_name">Vacancy Manage</span>
        </a>
      </li>
      <li class="log_out">
        <a href="../logout.php">
          <i class="bx bx-log-out"></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>
  <!--navigation bar left end-->

  <!--home section start-->
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
        <span class="dashboard">Employer Manage</span>
      </div>
    </nav>

    <main>
            <div class="cards_heading head">
                <div>Employer Name</div>
                <div>Name</div>
                <div>Details</div>
                <div>Minimum Requirement</div>
                
                <div></div>
            </div>
            <?php
                        include('./db.php');
                        while($row = $result->fetch_assoc()){
                    ?>
            <div class="cards_heading cards_color">
                <div class="abc"><?php echo $row['uname'];?></div>
                <div class="abc"><?php echo $row['name'];?></div>
                <div class="abc"><?php echo $row['details'];?></div>
                <div class="abc"><?php echo $row['minqualification'];?></div>
                
                <div>
                    <center> <a href="?deleteV=<?php echo $row['vacancyId'];?>"><button class="btnview">Delete</button> </a></center>
                 </div>
    </div>
    <?php } ?>
        </main>

  </section>
  <!--home section end-->


  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    let welcome = document.querySelector(".welcome");
    sidebarBtn.onclick = function () {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        welcome.style.display = "none";
      } else {
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        welcome.style.display = "block";
      }
    };
  </script>
</body>

</html>