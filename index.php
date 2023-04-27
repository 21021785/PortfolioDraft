<?php $focus = 'Home' ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="styles/favicon.svg">
    <link rel="stylesheet" href="styles/root.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/index.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    <?php include_once "navbar.php"; ?>
    <main>
        <div style="width:100%">
            <div class="index" style="padding-right: 5vw;">
                <div style="z-index: 2;">
                    <h1>Hi.</h1>
                    <h1>I'm <alt>Yong Ler</alt>
                    </h1>
                    <h3>Web Designer, Software Developer</h3>
                    <h3>
                        <alt>Programmer, Photographer</alt>
                    </h3>
                </div>
                <div class="photoframe">
                    <img src="images/me2.png" alt="" style="z-index: 1;">
                    <div class="box">
                    </div>
                </div>


            </div>
        </div>
        <div style="text-align: center; font-size: 40px; color: #faea4c; font-weight: bold">
            Find Out More About:
        </div>
        <div style="text-align:center">
            <div class="container">
                    <div class="col">
                        <div class="card"><img src="images/Home-Works.jpg" style="width: 100%; border-radius: 25px; "><div class="overlay-text">My Works</div></div>
                    </div>
                    <div class="col-middle">
                        <div class="card"><img src="images/Home-Me.jpg" style="width: 100%; border-radius: 25px; "><div class="overlay-text">Me</div></div>
                        <span style="margin-bottom:10%"></span>
                        <div class="card"><img src="images/Home-Contact.jpg" style="width: 100%; border-radius: 25px; "><div class="overlay-text">My Contact</div></div>
                    </div>
                    <div class="col">
                        <div class="card"><img src="images/Home-Resume.png" style="width: 100%; border-radius: 25px; "><div class="overlay-text">My Resume</div></div>
                    </div>
            </div>
    </main>
</body>

</html>