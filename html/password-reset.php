<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">

    <!--=============== REMIXICON ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../assets/css/styles1.css">
    <link rel="stylesheet" href="../assets/css/styles2.css">
    <link rel="stylesheet" href="../assets/css/styles3.css">

    <title>OG Fitness</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="../index.php" class="nav__logo">
                <img src="../assets/img/logo-nav.png" alt="logo"> OG FITNESS
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="../index.php" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="../index.php" class="nav__link">Program</a>
                    </li>
                    <li class="nav__item">
                        <a href="../index.php" class="nav__link">Choose Us</a>
                    </li>
                    <li class="nav__item">
                        <a href="../index.php" class="nav__link">Bodybuilders</a>
                    </li>

                    <div class="nav__link">
                        <a href="../index.php" class="button nav__button">Go Back</a>
                    </div>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
        </nav>
    </header>

<div class="card-ps">
    <div class="card-header">
        <h3>verander wachtwoord</h3>
    </div>
    <div class="card-body">
        <?php if(isset($_SESSION['status'])){
    echo "<p class='status'>".$_SESSION['status']."</p>";
    unset($_SESSION['status']);
}
?>
    <fieldset>    
    <form action="../assets/php/pd-reset-code.php" method="post">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
                <div class="button-wrapper">
                <button type="submit" class="btn-reset-ps" name="reset-password">verzenden</button>
            </div>
            </div>
        </form>
    </fieldset>
</div>