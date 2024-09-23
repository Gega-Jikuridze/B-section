

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B Section</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./style.css">
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
                <a href="./index.php">B-<span>Section</span></a>
            </div>

            <div class="nav">
                <a href="./profile.php">Home</a>
                <a href="./about.php">About</a>
                <a href="./persons.php">Persons</a>
                <a href="./contact.php">Contact us</a>
            </div>
        </div>
    </header>



    <div class="profile container">

        <div class="profile-picture">
            <img src="./assets/female.jpg" alt="">
        </div>


        <div class="profile-info">
            <h2>Name: Gega</h2>
            <h2>LastName: Jikuridze</h2>
            <h2>Email: gega@gmail.com</h2>
            <h2>Tel:500000000</h2>
            <h2>Gender: male</h2>
        </div>

    </div>




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