<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pls work</title>
    <style>
        .Desktop1 {
            width: 1920px;
            height: 1080px; 
            position: relative; 
            background: white;
        }
        .Rectangle1 {
            width: 1346px;
            height: 251px;
            left: 231px;top: 
            59px;position: 
            absolute;background: #CE9519;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 124px;
            border: 1px black solid;
        }
        .HelloUsernameYouAreLogDIn {
            left: 730px;
            top: 176px;
            position: absolute;
            color: black;
            font-size: 32px;
            font-family: Agbalumo;
            font-weight: 400;
            word-wrap: break-word;
        }
        .LogOut{
            left: 150px;
            top: 202px;
            position: absolute;
            color: black;
            font-size: 32px;
            font-family: Agbalumo;
            font-weight: 400;
        }
        button {
            height: 100px;
            width: 100px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <?php
    session_start(); // Start the session

    // Check if the user is logged in
    if (!isset($_SESSION['username'])) {
        // Redirect to login page if not logged in
        header("Location: login.php");
        exit();
    }
    ?>
    
    <div class="Desktop1">
    <div class="Rectangle1"></div>
    <div class="HelloUsernameYouAreLogDIn"><?php
            echo "HELLO " . htmlspecialchars($_SESSION['username']) . " YOU ARE LOG’D IN!";
            ?>
    <div class="LogOut"><button type="button" onclick="logout()">Log out</button></div>
    </div>

    <script>
        function logout() {
            window.location.href = 'phps/logout.php';
        }
        
    </script>
</body>
</html>