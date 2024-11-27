<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyusi Esports</title>
    <link rel="stylesheet" href="css/QCE.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    
        <!-- Header Section ito-->
        <?php
        include "navbar.php";
        ?>

        <!-- Main Section ito-->
        <main class="main-content">
            <div class="slider">
                <div class="slides">
                    <img class="slide" src="qceimages/qct1.jpg" alt="Image #1">
                    <img class="slide" src="qceimages/qct2.jpg" alt="Image #2">
                    <img class="slide" src="qceimages/qct3.jpg" alt="Image #3">
                </div>
                <button class="prev" onclick="prevSlide()">&#10094;</button>
                <button class="next" onclick="nextSlide()">&#10095;</button>
                </div>

            <h2 class="sponsors-title">S<span class="red-letter">P</span>ONS<span class="red-letter">O</span>RS</h2>
            <div class="image-gallery">
                <img src="qceimages/qcesponsors.jpg" alt="Image 1" class="sponsor1">
                <img src="qceimages/qcesponsors2.jpg" alt="Image 2" class="sponsor2">
            </div>
        </main>
    </div>

    <!-- Footer Section ito-->
    <?php
        include "footer.php";
    ?>

    <script src="javascript/QCE.js"></script>
</body>
</html>
