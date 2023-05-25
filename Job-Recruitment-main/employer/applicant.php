<?php
session_start();
include("./db.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Create Vacancy</title>
    <link rel="stylesheet" href="../css/applicant1.css" />
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
            <span>
                <?php echo $_SESSION['name'] ?>
            </span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="./home.php">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Home</span>
                </a>
            </li>
            <li>
                <a href="./vacancies.php?show=vacancy">
                    <i class="bx bx-user"></i>
                    <span class="links_name">Create Your Vacancy</span>
                </a>
            </li>
            <li>
                <a href="./applicant.php?show=applicant">
                    <i class="bx bx-list-check"></i>
                    <span class="links_name">Applicant details</span>
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
                <span class="dashboard">Create Vacancy</span>
            </div>
        </nav>

        <main>
            <?php
            include('./db.php');
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="container">
                    <header>Job Position :
                        <?php echo $row['name']; ?>
                    </header><br>
                    <div class="cards_heading head">
                        <div><u>Name Of The Applicant</u></div>
                        <div><u>Minimum Qualification</u></div>
                        <div><u>Email Address</u></div>
                    </div>
                    <?php
                    $vid = $row['vacancyId'];
                    $sql2 = "select u.name, u.email, p.minqualification from user u, applies a, applicant p where p.username=u.username and u.username=a.username and vacancyId = $vid;";
                    $result2 = mysqli_query($conn, $sql2) or die($conn->error);
                    while ($row2 = $result2->fetch_assoc()) {
                        ?>
                        <div class="cards_heading cards_color">
                            <div class="abc">
                                <?php echo $row2['name']; ?>
                            </div>
                            <div class="abc">
                                <?php echo $row2['minqualification']; ?>
                            </div>
                            <div class="abc"><a href="mailto:<?php echo $row2['email']; ?>"><?php echo $row2['email']; ?></a>
                            </div>

                        </div>
                    <?php } ?>
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