<!DOCTYPE html>
<!-- Coding by CodingNepal || www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>COMMANDER CONTROL UNIT</title>
    <link rel="stylesheet" href="dash.css" />
    <link rel="icon" type="image/png" href="assets/images/Logo b.png">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar">
        <div class="logo_item">
            <i class="bx bx-menu" id="sidebarOpen"></i>
            <img src="assets/images/logo b.png" alt=""></i>KYC
        </div>

        <div class="navbar_content">
            <i class="bi bi-grid"></i>
            <i class='bx bx-sun' id="darkLight"></i>
            <i class='bx bx-bell'></i>
            <a href="logout.php" class="logout-button">LOG OUT</a>
        </div>

    </nav>
    <div style="display: flex; align-items: center;justify-content: center;height: 100vh;">
        <form action="includes/action-add-announcement.php" method="post" enctype="multipart/form-data">

            <textarea name="description" row="5"></textarea><br />
            <button type="submit" name="submit">Submit</button>

        </form>
    </div>
    <!-- sidebar -->
    <nav class="sidebar">
        <div class="menu_content">
            <ul class="menu_items">
                <div class="menu_title menu_dahsboard"></div>
                <!-- Home dropdown -->
                <li class="item">
                    <div class="nav_link submenu_item">
                        <span class="navlink">HOME</span>
                        <i class="bx bx-chevron-right arrow-left"></i>
                    </div>
                    <ul class="menu_items submenu">
                        <li><a href="#" class="nav_link sublink" onclick="toggleUploadForm()">LOGO</a></li>
                    </ul>
                    <ul class="menu_items submenu" id="uploadFormContainer" style="display: none;">
                        <form action="includes/action-upload-character.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="character" /><button type="submit" name="upload">Upload</button>
                        </form>
                    </ul>
                </li>
                <!-- End Home dropdown -->

                <!-- About Us dropdown -->
                <li class="item">
                    <div class="nav_link submenu_item">
                        <span class="navlink">ABOUT US</span>
                        <i class="bx bx-chevron-right arrow-left"></i>
                    </div>

                    <ul class="menu_items submenu">
                        <li><a href="#" class="nav_link sublink">HISTORY</a></li>
                        <li><a href="#" class="nav_link sublink">VISION</a></li>
                        <li><a href="#" class="nav_link sublink">MISSION</a></li>
                    </ul>
                </li>
                <!-- End About Us dropdown -->

                <!-- Announcements dropdown -->
                <li class="item">
                    <div class="nav_link submenu_item">
                        <span class="navlink">ANNOUNCEMENTS</span>
                        <i class="bx bx-chevron-right arrow-left"></i>
                    </div>

                    <ul class="menu_items submenu">
                        <li><a href="add-announcement.php" class="nav_link sublink">ADD ANNOUNCEMENT</a></li>
                    </ul>
                </li>
                <!-- End Announcements dropdown -->

                <!-- Events dropdown -->
                <li class="item">
                    <div class="nav_link submenu_item">
                        <span class="navlink">EVENTS</span>
                        <i class="bx bx-chevron-right arrow-left"></i>
                    </div>

                    <ul class="menu_items submenu">
                        <li><a href="user-registered.php" class="nav_link sublink">USERS REGISTERED</a></li>
                        <li><a href="add-events.php" class="nav_link sublink">ADD EVENTS</a></li>
                        <li><a href="list-events.php" class="nav_link sublink">LIST EVENTS</a></li>
                        <li><a href="#" class="nav_link sublink">PAST EVENTS</a></li>
                    </ul>
                </li>
                <!-- End Events dropdown -->

                <!-- Our Team dropdown -->
                <li class="item">
                    <div class="nav_link submenu_item">
                        <span class="navlink">OUR TEAM</span>
                        <i class="bx bx-chevron-right arrow-left"></i>
                    </div>

                    <ul class="menu_items submenu">
                        <li><a href="#" class="nav_link sublink">MANAGEMENT</a></li>
                        <li><a href="#" class="nav_link sublink">STAFF</a></li>
                    </ul>
                </li>
                <!-- End Our Team dropdown -->

                <!-- Rules dropdown -->
                <li class="item">
                    <div class="nav_link submenu_item">
                        <span class="navlink">RULES</span>
                        <i class="bx bx-chevron-right arrow-left"></i>
                    </div>

                    <ul class="menu_items submenu">
                        <li><a href="#" class="nav_link sublink">CODE OF CONDUCT</a></li>
                        <li><a href="#" class="nav_link sublink">PRIVACY POLICY</a></li>
                    </ul>
                </li>
                <!-- End Rules dropdown -->

                <!-- Contact dropdown -->
                <li class="item">
                    <div class="nav_link submenu_item">
                        <span class="navlink">CONTACT</span>
                        <i class="bx bx-chevron-right arrow-left"></i>
                    </div>

                    <ul class="menu_items submenu">
                        <li><a href="#" class="nav_link sublink">SUPPORT</a></li>
                        <li><a href="#" class="nav_link sublink">FEEDBACK</a></li>
                    </ul>
                </li>
                <!-- End Contact dropdown -->

                <!-- Sidebar Open / Close -->
                <div class="bottom_content">
                    <div class="bottom expand_sidebar">
                        <span> EXPAND</span>
                        <i class='bx bx-log-in'></i>
                    </div>
                    <div class="bottom collapse_sidebar">
                        <span> COLLAPSE</span>
                        <i class='bx bx-log-out'></i>
                    </div>
                </div>
            </ul>
        </div>
    </nav>

    <script src="dash.js"></script>
</body>

</html>