<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://kit.fontawesome.com/92284d62e7.js" crossorigin="anonymous"></script>
    

    <title>Dashboard</title>
    <link rel="shortcut icon" type="image" href="./image/NEW LOGO SMART ELS.png"> 
</head>
<body>
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
                    <span class="link-name">History & Chart</span>
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

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            
            <div class="date">
                <input type="date">
            </div>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
        
            <!--<img src="images/profile.jpg" alt="">-->
        </div>
        <div>
        <div class="title">
                <i class="fa-solid fa-user-check"></i>
                <span class="text">VERIFIED USER</span>
        </div>
        <table class="content-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Owner Name</th>
                    <th>Address Device</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ms. Yusri Alfiyya</td>
                    <td>0c:98:38:b6:86:06</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>2</td>
                    <td>Ms. Nova Dwi Astuti</td>
                    <td>5c:d0:6e:34:12:1a</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>3</td>
                    <td>Mr. Iqbal Alfajar</td>
                    <td>30:c6:f7:05:86:a6</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>4</td>
                    <td>Ms. Sri Ulina</td>
                    <td>5c:d0:6e:34:12:1a</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>5</td>
                    <td>Mr. People </td>
                    <td>5c:d0:6e:34:12:1a</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>6</td>
                    <td>Ms. People</td>
                    <td>5c:d0:6e:34:12:1a</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>7</td>
                    <td>Ms. Sape Aje Dah</td>
                    <td>5c:d0:6e:34:12:1a</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>8</td>
                    <td>Mr. Sape Aje Dah</td>
                    <td>5c:d0:6e:34:12:1a</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>9</td>
                    <td>Ms. Sape Aje Dah</td>
                    <td>5c:d0:6e:34:12:1a</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>10</td>
                    <td>Mr. Sape Aje Dah</td>
                    <td>5c:d0:6e:34:12:1a</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>11</td>
                    <td>Ms. Sape Aje Dah</td>
                    <td>5c:d0:6e:34:12:1a</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>12</td>
                    <td>Mr. Sape Aje Dah</td>
                    <td>5c:d0:6e:34:12:1a</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>13</td>
                    <td>Mr. Sape Aje Dah</td>
                    <td>5c:d0:6e:34:12:1a</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>14</td>
                    <td>Mr. Sape Aje Dah</td>
                    <td>5c:d0:6e:34:12:1a</td>
                </tr>
            </tbody>

        </table>
        </div>
            <!-- <i class="uil uil-bars sidebar-toggle"></i>
            
            <div class="date">
                <input type="date">
            </div>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div> -->
        
            <!--<img src="images/profile.jpg" alt="">-->
        
    </section>

    

    <script type="text/javascript" src="script.js"></script>
    <!-- <script src="script.js"></script> -->
</body>
</html>
