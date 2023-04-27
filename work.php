<?php $focus = 'Work' ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="styles/favicon.svg">
    <link rel="stylesheet" href="styles/root.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/work.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    <?php include_once "navbar.php"; ?>

    <div style="text-align:center">
        <div class="container" style="margin-top: 30px;">
            <div class="col">
                <div class="card"><img src="images/Home-Works.jpg" style="width: 100%; border-radius: 25px; ">
                    <div class="overlay-text">Designs</div>
                </div>
            </div>
            <div class="col-middle">
                <div class="card"><img src="images/World Xplore SS.png" style="width: 100%; border-radius: 25px; ">
                    <div class="overlay-text">Websites</div>
                </div>
                <span style="margin-bottom:10%"></span>
                <div class="card"><img src="images/Photos-Works.jpeg" style="width: 100%; border-radius: 25px; " onclick="location.href='photos.php'">
                    <div class="overlay-text">Photographs</div>
                </div>
            </div>
            <div class="col">
                <div class="card"><img src="images/Application-Works.png" style="width: 100%; border-radius: 25px; ">
                    <div class="overlay-text">Applications</div>
                </div>
            </div>
        </div>
</body>

</html>