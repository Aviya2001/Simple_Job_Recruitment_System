<?php
session_start();
include("./db.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Create Vacancy</title>
    <link rel="stylesheet" href="../css/create_vacancy.css" />
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
            <div class="container">
                <header>Create Vacancy</header>

                <form action="?show=create" method="post">
                    <div class="formfirst">
                        <div class="details personal">
                            <div class="fields">
                                <div class="input-field">
                                    <label>Position</label>
                                    <input type="text" placeholder="Enter Job Position" name="vacancy_name" size=30 required>
                                </div>
                                <div class="input-field">
                                    <label>Minimum Qualification</label>
                                    <input type="text" placeholder="Enter Minimum Qualification"  name="min_quallification" size=30 required>
                                </div>

                                <div class="input-field" id="description">
                                    <label>Description</label>
                                    <textarea name="details" placeholder="Enter Your Discription"></textarea>

                                </div>
                            </div>
                        </div>

                        <div class="flex">
                             <input class="abcd" type="submit" name="create_vacancy" value="Create Vacancy">
                        </div>

                    </div>


                </form>

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