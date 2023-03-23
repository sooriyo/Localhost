<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.php');
}

$username = $_SESSION['username'];
echo "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="nav.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title></title>

    <!--<title>Dashboard Sidebar Menu</title>-->
</head>
<body>
<nav class="sidebar close">
    <header>
        <div class="image-text">
                <span class="image">
                    <i class='bx bx-transfer icon'></i>
                  <!--  <img src="logo.png" alt=""-->
                </span>

            <div class="text logo-text">
                <span class="name">Welcome</span>

               <!-- <span class="profession">Cylon Trains</span> -->
            </div>
        </div>

     <!--   <i class='bx bx-chevron-right toggle'></i> -->
    </header>

    <div class="menu-bar">
        <div class="menu">
            <ul class="menu-links">
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-home-alt icon'></i>
                        <span class="text nav-text">Dashboard</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-train icon'></i>
                        <span class="text nav-text">Trains</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-book-open icon'></i>
                        <span class="text nav-text">Reservations</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-package icon'></i>
                        <span class="text nav-text">Packages</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-bar-chart-alt icon'></i>
                        <span class="text nav-text">Reports</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-wallet icon'></i>
                        <span class="text nav-text">Inquiries</span>
                    </a>
                </li>

            </ul>
        </div>

        <div class="bottom-content">
            <li class="">
                <a href="index.php">
                    <i class='bx bx-log-out icon'></i>
                    <span class="text nav-text">Logout</span>
                </a>
            </li>

                <div class="toggle-switch">
                    <span class="switch"></span>
                </div>

        </div>
    </div>

</nav>

<section class="home">
  <!--  <div class="text">Dashboard Sidebar</div> -->
</section>

<script>
    const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle"),
        modeSwitch = body.querySelector(".toggle-switch"),
        modeText = body.querySelector(".mode-text");

  <!--
      toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");


    });
</script>

</body>
</html>
