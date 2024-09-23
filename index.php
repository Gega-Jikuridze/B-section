<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B Section</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css?v=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>

     <?php 
        include("data.php");
    ?> 

    <!-- header  -->

    <header>
        <div class="header container">
            <div class="logo">
                <a href="#">B-<span>Section</span></a>
            </div>

            <div class="nav">
                <a href="./index.php">Home</a>
                <a href="./about.php">About</a>
                <a href="./persons.php">Persons</a>
                <a href="./contact.php">Contact us</a>
            </div>
        </div>
    </header>



    <!-- log in  -->




<?php 


$log = isset($_SESSION['log']) ? $_SESSION['log'] : false;


if (!$log) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $logIn = false;


        foreach ($users as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                $logIn = true; 
                break; 
            }
        }

       
        if ($logIn) {
            $_SESSION['log'] = true; 
          echo '<div class="profile container">';
          echo '<div class="profile-picture">';
          echo '<img src="./assets/female.jpg" alt="">';
          echo '</div>';
          echo '<div class="profile-info">';
          echo '<h2>Name:' . $user['username'] . "</h2>";
          echo '<h2>Name:' . $user['lastname'] . "</h2>";
          echo '<h2>Name:' . $user['email'] . "</h2>";
          echo '<h2>Name:' . $user['tel'] . "</h2>";
          echo '<h2>Name:' . $user['gender'] . "</h2>";
          echo '</div>';
          echo '</div>';
            exit();
        } else {
            echo '<p style="color:red;">Please, try again.</p>';
        }
    }

    echo '<form action="./index.php" method="post" class="log-in">';
    echo '<input type="text" placeholder="Username" required name="username">';
    echo '<input type="password" placeholder="Password" required name="password">';
    echo '<input type="submit" value="Log in" class="log-in-btn">';
    echo '</form>';
} else {
    echo 'Hello! You are logged in.';
}



?> 


   

    <!-- footer  -->

    <footer>
        <div class="footer container">
            <div class="logo">
                <a href="#">B-<span>Section</span></a>
            </div>

            <div class="footer-nav">
                <a href="#"><i class='bx bx-phone'></i>+995 555 555</a>
                <a href="#"><i class='bx bx-envelope' ></i>b-section@gmail.com</a>
                <a href="#"><i class='bx bx-location-plus'></i>Georgia</a>
            </div>
        </div>
    </footer>
    
</body>
</html>