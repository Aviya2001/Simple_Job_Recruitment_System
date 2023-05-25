<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Events</title>
    <link rel="stylesheet" href="../css/createvacany.css" />
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
                <span class="dashboard">Create Or Update Your Vacancies</span>
            </div>
        </nav>

        <main>
            <div class="container">
                <div class="flex">
                    <a href="./create_vacancy.php"> <button class="abc">Create Vacancy</button></a>

                </div> <br>
                <div class="like">

                    <?php
                    include('./db.php');
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <div class="profile-card">
                            <div class="cards">

                                <div class="text-data">
                                    <span class="name"><u>Vacancy Name:
                                            <?php echo $row['name']; ?>
                                        </u></span><br>
                                    <span class="job">Minimal Qualification:
                                        <?php echo $row['minqualification']; ?>
                                    </span><br>
                                    <span class="job" align="justify">Details:
                                        <?php echo $row['details']; ?>
                                    </span>

                                </div>

                                <div class="buttons">
                                    <a class ="aclass" href="?deleteV=<?php echo $row['vacancyId']; ?>">
                                        <button class="button">Delete</button>
                                    </a>
                                    <a class ="aclass" href="./update_vacancy1.php?showV=<?php echo $row['vacancyId']; ?>">
                                        <button class="button">Edit</button>
                                    </a>
                                </div>


                            </div>

                        </div>
                    <?php } ?>
                </div>
            </div>



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