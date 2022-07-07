<?php include "dash.php"; ?>
<?php include "user.php"; ?>
<?php include "history.php"; ?>
<!----======== CSS ======== -->
<link rel="stylesheet" href="style.css">
     
<!----===== Iconscout CSS ===== -->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<script src="https://kit.fontawesome.com/92284d62e7.js" crossorigin="anonymous"></script>

<nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="./image/LOGO SMART ELS.png" alt="">
            </div>

            <!-- <span class="logo_name">SMART ELIFE SOLUTIONS</span> -->
            <h2 class="danger">SMART<span class="primary"> E </span>LIFE<span class="primary"> SOLUTIONS</span></h2>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="dash.php">
                    <i class="fa-solid fa-desktop"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="user.php">
                    <i class="fa-solid fa-user-check"></i>
                    <span class="link-name">Verified User</span>
                </a></li>
                <li><a href="history.php">
                    <i class="fa-solid fa-chart-simple"></i>
                    <span class="link-name">History</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="#">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="fa-solid fa-moon"></i>
                        <span class="link-name">Dark Mode</span>
                    </a>

                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <script type="text/javascript" src="script.js"></script>