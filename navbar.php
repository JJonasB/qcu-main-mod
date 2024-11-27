<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link rel="stylesheet" href="css/navbar.css">
    <?php session_start();?>
</head>
<body>
<header>
            <a href="index.php" class="logo">
                <img src="qceimages/KYUSI-E.png" class="kyusilogo" alt="Kyusi Logo">
                <span>Kyusi Esports</span>
            </a>

            <ul class="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="QCEnews.php">News</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="QCEFAQ.php">FAQ</a></li>
                <li><a href="QCEmembership.php">Membership</a></li>
                <li><a href="QCesports.php">Esports</a></li>
            </ul>

            <div class="header-main">
                <?php
                if (!isset($_SESSION['username'])) {
                    echo "<a href='log-in/index.php' class='user'><i class='ri-user-fill'></i>Sign in</a>";
                    echo "<a href='log-in/sign-up.php'>Register</a>";
                } else {
                    echo "<a href='#' class='user'><i class='ri-user-fill'></i>Profile</a>";
                    echo "<a href='log-in/phps/logout.php'>Sign out</a>";
                }
                ?>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </header>
</body>
</html>