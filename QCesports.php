<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyusi Esports</title>
    <link rel="stylesheet" href="css/QCesports.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    <div class="wrapper">
        <!-- Header Section -->
        <?php
        include "navbar.php";
        ?>
        <!-- Main Body Section sa ESPORTS -->
        <main>
            <h1 class="esports-title">
                <span class="esports-text"><span class="red-e">E</span>SPORTS</span>
            </h1>

            <div class="esport-item">
                <img src="qceimages/mobilelegends.png" alt="mobile legends">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <div class="esport-item">
                <img src="qceimages/valorant.png" alt="valorant">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <div class="esport-item">
                <img src="qceimages/LOL.png" alt="league of legends">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <div class="esport-item">
                <img src="qceimages/codm.png" alt="call of duty">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </main>

        <!-- Footer Section -->
        <?php
            require "footer.php";
        ?>

    <!-- External JavaScript -->
    <script src="javascript/QCesport.js"></script>
</body>

</html>
