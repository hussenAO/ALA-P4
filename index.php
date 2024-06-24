<!-- ---------------------------------
naam script     : index.php
omschrijving    : Dit is de hoofdpagina van de onze webblog. Hier kan de gebruiker navigeren naar onze sportprogrammas en inloggen of uitloggen.
Auteur          : Djojo, Tejo en Rahman
project         : peridode 3
Aanmaakdatum    : 01-02-2024
-------------------------------------->
<?php
// Start de sessie
session_start();


?>
<!DOCTYPE html>
<!-- rest of your HTML code -->

<html lang="en">   

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!--=============== REMIXICON ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles1.css">

    <title>OG Fitness</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
    <nav class="nav container">
        <a href="index.php" class="nav__logo">
            <img src="assets/img/logo-nav.png" alt="logo"> OG FITNESS
        </a>
 
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="#home" class="nav__link active-link">Home</a>
                </li>
                <li class="nav__item">
                    <a href="#program" class="nav__link">Program</a>
                </li>
                <li class="nav__item">
                    <a href="#choose" class="nav__link">Choose Us</a>
                </li>
                <li class="nav__item">
                    <a href="#pricing" class="nav__link">Bodybuilders</a>
                </li>
                <li class="nav__item">
                    <a href="#BMI" class="nav__link">Calculate BMI</a>
                </li>
                <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                <li class="nav__item profile">
                    <img src="user.png" alt="User Profile" id="profile-icon">
                    <div class="dropdown-menu" id="dropdown-menu">
                        <div class="profile-info">
                            <img src="user.png" alt="User" id="profile-picture">
                        </div>
                        <ul>
                            <li><a href="#" id="edit-profile">Edit Profile</a></li>
                            <li><a href="#">Settings & Privacy</a></li>
                            <li><a href="#">Help & Support</a></li>
                            <li><a href="assets/php/logout.php">Logout</a></li>
                        </ul>
                        <div class="edit-profile-section" id="edit-profile-section">
                            <input type="file" id="upload-input" accept="image/*">
                        </div>
                    </div>
                </li>
                <?php else: ?>
                <li class="nav__item">
                    <a class="log1" href="html/login.php">Inloggen</a>
                </li>
                <?php endif; ?>
            </ul>
 
       
         <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>
                 
  
            <!-- Toggle button -->
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
            
   
 </nav>
        <!-- Cookie Acceptance Popup -->
<div id="cookieConsentPopup" class="cookie-popup">
    <div class="cookie-content">
        <p>This website uses cookies to ensure you get the best experience on our website.</p>
        <button id="acceptCookiesBtn">Accept Cookies</button>
    </div>
</div>

  
</header>              

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__data">
                    <h2 class="home__subtitle">HERE ARE</h2>
                    <h1 class="home__title">OUR STARS</h1>
                    <p class="home__description">
                        Here, we guide you in sculpting and perfecting your physique to become the epitome of
                        bodybuilding excellence, allowing you to embrace life to its fullest potential.
                    </p>
                    <a href="#pricing" class="button button__flex">
                        Get Started <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <div class="home__images">
                    <img src="assets/img/main.png" alt="home image" class="home__img">

                    <div class="home__triangle home__triangle-3"></div>
                    <div class="home__triangle home__triangle-2"></div>
                    <div class="home__triangle home__triangle-1"></div>
                </div>
            </div>
        </section>


        <!--==================== PROGRAM ====================-->
        <section class="program section" id="program">
            <div class="container">
                <div class="section__data">
                    <h2 class="section__subtitle">Our Program</h2>
                    <div class="section__titles">
                        <h1 class="section__title-border">BUILD YOUR</h1>
                        <h1 class="section__title">BEST BODY</h1>
                    </div>
                </div>

                <div class="program__container grid">
                    <article class="program__card">
                        <div class="program__shape">
                            <img src="assets/img/program1.png" alt="program image" class="program__img">
                        </div>

                        <h3 class="program__title">Flex Muscle</h3>

                        <p class="program__description">
                            Creating tension that's temporarily making the muscle
                            fibers smaller or contracted.
                        </p>

                        <a href="#" class="program__button">
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>

                    <article class="program__card">
                        <div class="program__shape">
                            <img src="assets/img/program2.png" alt="program image" class="program__img">
                        </div>

                        <h3 class="program__title">Cardio Exercise</h3>

                        <p class="program__description">
                            Exercise your heart rate up and keeps it
                            up for a prolonged period of time.
                        </p>

                        <a href="#" class="program__button">
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>

                    <article class="program__card">
                        <div class="program__shape">
                            <img src="assets/img/program3.png" alt="program image" class="program__img">
                        </div>

                        <h3 class="program__title">Basic Yoga</h3>

                        <p class="program__description">
                            Diaphragmatic this is the most common breathing
                            technique you'll find in yoga.
                        </p>

                        <a href="#" class="program__button">
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>

                    <article class="program__card">
                        <div class="program__shape">
                            <img src="assets/img/program4.png" alt="program image" class="program__img">
                        </div>

                        <h3 class="program__title">Weight Lifting</h3>

                        <p class="program__description">
                            Attempts a maximum weight single lift of a
                            barbell loaded with weight plates.
                        </p>

                        <a href="#" class="program__button">
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>
                </div>
            </div>
        </section>

        <!--==================== CHOOSE US ====================-->
        <section class="choose section" id="choose">
            <div class="choose__overflow">
                <div class="choose__container container grid">
                    <div class="choose__content">
                        <div class="section__data">
                            <h2 class="section__subtitle">Best Reason</h2>
                            <div class="section__titles">
                                <h1 class="section__title-border">WHY</h1>
                                <h1 class="section__title">CHOOSE US ?</h1>
                            </div>
                        </div>

                        <p class="choose__description">
                            Choose your favorite class and start now. Remember the
                            only bad workout is the one you didn't do.
                        </p>

                        <div class="choose__data">
                            <div class="choose__group">
                                <h3 class="choose__number">200+</h3>
                                <p class="choose__subtitle">Total Members</p>
                            </div>
                            <div class="choose__group">
                                <h3 class="choose__number">50+</h3>
                                <p class="choose__subtitle">Best trainers</p>
                            </div>
                            <div class="choose__group">
                                <h3 class="choose__number">25+</h3>
                                <p class="choose__subtitle">Programs</p>
                            </div>
                            <div class="choose__group">
                                <h3 class="choose__number">100+</h3>
                                <p class="choose__subtitle">Awards</p>
                            </div>
                        </div>
                    </div>

                    <div class="choose__images">
                        <img src="assets/img/anwar.png" alt="choose image" class="choose__img">

                        <div class="choose__triangle choose__triangle-1"></div>
                        <div class="choose__triangle choose__triangle-2"></div>
                        <div class="choose__triangle choose__triangle-3"></div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== PRICING ====================-->
        <section class="pricing section" id="pricing">
            <div class="container">
                <div class="section__data">
                    <h2 class="section__subtitle">Our Bodybuilders</h2>
                    <div class="section__titles">
                        <h1 class="section__title-border">THEIR</h1>
                        <h1 class="section__title">SPECIAL DIET</h1>
                    </div>
                </div>

                <div class="pricing__container grid">
                    <article class="pricing__card">
                        <header class="pricing__header">
                            <div class="pricing__shape">
                                <img src="assets/img/pricing1.png" alt="pricing image" class="pricing__img">
                            </div>
                            <h1 class="pricing__title">Ronnie's Plan</h1>
                            <h2 class="pricing__number">🦍</h2>
                        </header>

                        <ul class="pricing__list">
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> 5 Days In A Week
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Ronnie's special diet
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> 01 Bottle of Protein
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Access to Videos
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Muscle Stretching
                            </li>
                        </ul>

                        <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                            <a href="html/ronnie.php" class="button button__flex pricing__button">
                              Go To <i class="ri-arrow-right-line"></i>
                            </a>
                        <?php else: ?>
                          <p>U moet inloggen om de prijsplannen te bekijken.</p>
                        <?php endif; ?>
                    </article>

                    <article class="pricing__card pricing__card-active">
                        <header class="pricing__header">
                            <div class="pricing__shape">
                                <img src="assets/img/pricing2.png" alt="pricing image" class="pricing__img">
                            </div>
                            <h1 class="pricing__title">Eddie's Plan</h1>
                            <h2 class="pricing__number">💪🏼</h2>
                        </header>

                        <ul class="pricing__list">
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> 5 Days In A Week
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Eddie's Special Diet
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> 01 Bottle of Protein
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Access to Videos
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Muscle Stretching
                            </li>
                        </ul>
           
                   
                    <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
    <a href="html/eddie.php" class="button button__flex pricing__button">
        Go To <i class="ri-arrow-right-line"></i>
    </a>
<?php else: ?>
    <p style="color: black;">U moet inloggen om de prijsplannen te bekijken.</p>
<?php endif; ?>
 </article>

    

                    <article class="pricing__card">
                        <header class="pricing__header">
                            <div class="pricing__shape">
                                <img src="assets/img/pricing3.png" alt="pricing image" class="pricing__img">
                            </div>
                            <h1 class="pricing__title">Arnold's Plan</h1>
                            <h2 class="pricing__number">🏋️‍♂️</h2>
                        </header>

                        <ul class="pricing__list">
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> 5 Days In A Week
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Arnold's Special Diet
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> 01 Bottle of Protein
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Access to Videos
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Muscle Stretching
                            </li>
                        </ul>
                        <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                            <a href="html/arnold.php" class="button button__flex pricing__button">
                              Go To <i class="ri-arrow-right-line"></i>
                            </a>
                        <?php else: ?>
                          <p>U moet inloggen om de prijsplannen te bekijken.</p>
                        <?php endif; ?>
                    </article>
                </div>
            </div>
        </section>

        <!--==================== CALCULATE ====================-->
        <section class="calculate section" id="BMI">
            <div class="calculate__container container grid">
                <div class="calculate__content">
                    <div class="section__titles">
                        <h1 class="section__title-border">CALCULATE</h1>
                        <h1 class="section__title">YOUR BMI</h1>
                    </div>

                    <p class="calculate__description">
                        The body mass index (BMI) calculator calculates
                        body mass index from your weight and height.
                    </p>

                    <form action="" class="calculate__form" id="calculate-form">
                        <div class="calculate__box">
                            <input type="number" placeholder="Height" class="calculate__input" id="calculate-cm">
                            <label for="" class="calculate__label">cm</label>
                        </div>
                        <div class="calculate__box">
                            <input type="number" placeholder="Weight" class="calculate__input" id="calculate-kg">
                            <label for="" class="calculate__label">kg</label>
                        </div>

                        <button type="submit" class="button button__flex">
                            Calculate Now <i class="ri-arrow-right-line"></i>
                        </button>
                    </form>

                    <p class="calculate__message" id="calculate-message"></p>
                </div>
                <img src="assets/img/body.png" alt="calculate image" class="calculate__img">
            </div>
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section" id="footer">
        <div class="footer__container container grid">
            <div>
                <a href="#" class="footer__logo">
                    <img src="assets/img/logo-nav.png" alt="logo"> OG FITNESS
                </a>
                <p class="footer__description">
                    Subscribe for company <br> updates below.
                </p>

                <form action="" class="footer__form" id="contact-form">
                    <input type="email" name="user_email" placeholder="Your Email" class="footer__input"
                        id="contact-user">
                    <button type="submit" class="button">
                        Subscribe
                    </button>
                </form>

                <p class="footer__message" id="contact-message"></p>
            </div>

            <div class="footer__content">
                <div>
                    <h3 class="footer__title">
                        SERVICES
                    </h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Flex Muscle</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Cardio Exercise</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Basic Yoga</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Weight Lifting</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title">
                        BODYBUILDERS
                    </h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#pricing" class="footer__link">Ronnie</a>
                        </li>
                        <li>
                            <a href="#pricing" class="footer__link">Eddie</a>
                        </li>
                        <li>
                            <a href="#pricing" class="footer__link">Arnold</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title">
                        COMPANY
                    </h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">About Us</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Careers</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Customers</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Partners</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="footer__group">
                <ul class="footer__social">
                    <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                        <i class="ri-facebook-circle-fill"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                        <i class="ri-twitter-fill"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                        <i class="ri-instagram-line"></i>
                    </a>
                </ul>

                <span class="footer__copy">
                    &#169; Copyright OG Fitness. All rights reserved
                </span>
            </div>
        </div>
    </footer>


    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== EMAIL JS ===============-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/profile.js" ></script>
    <button id="acceptCookies">Accept Cookies</button>
 
 <script>  
 document.getElementById("acceptCookies").onclick = function() {
     setCookie("cookiesAccepted", "true", 7);
     this.disabled = true;
     this.innerText = "Cookies Accepted";
 }
  
 function setCookie(name, value, days) {
     var expires = "";
     if (days) {
         var date = new Date();
         date.setTime(date.getTime() + (days*24*60*60*1000));
         expires = "; expires=" + date.toUTCString();
     }
     document.cookie = name + "=" + (value || "")  + expires + "; path=ani";
 }
 // When the page loads, add the current page to the pagesVisited cookie
 window.onload = function() {
     var currentPage = window.location.href;
     var pagesVisited = getCookie("pagesVisited");
     if (pagesVisited) {
         pagesVisited = pagesVisited.split(",");
     } else {
         pagesVisited = [];
     }
     pagesVisited.push(currentPage);
     setCookie("pagesVisited", pagesVisited.join(","), 7);
 }
  
 // Existing setCookie function
 function setCookie(name, value, days) {
     var expires = "";
     if (days) {
         var date = new Date();
         date.setTime(date.getTime() + (days*24*60*60*1000));
         expires = "; expires=" + date.toUTCString();
     }
     document.cookie = name + "=" + (value || "")  + expires + "; path=ani";
 }
  
 // Function to get a cookie
 function getCookie(name) {
     var nameEQ = name + "=";
     var ca = document.cookie.split(';');
     for(var i=0;i < ca.length;i++) {
         var c = ca[i];
         while (c.charAt(0)==' ') c = c.substring(1,c.length);
         if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
     }
     return null;
 }
 // Function to check time spent
 function checkTimeSpent() {
     var timeSpent = getCookie("timeSpent");
     if (!timeSpent) {
         timeSpent = 0;
     }
     timeSpent = parseInt(timeSpent);
     timeSpent += 1;
     setCookie("timeSpent", timeSpent, 1);
     console.log("Time spent on the page" + timeSpent + " seconds");
 }
 // Call the checkTimeSpent function every second
 setInterval(checkTimeSpent, 1000);
  
 // Function to check if the user has accepted cookies
 function checkCookiesAccepted() {
     var cookiesAccepted = getCookie("cookiesAccepted");
     if (cookiesAccepted) {
         document.getElementById("acceptCookies").disabled = true;
         document.getElementById("acceptCookies").innerText = "Cookies Accepted";
     }
 }
 checkCookiesAccepted();
  
 // Function to check if the user has visited the page before
 function checkVisitedBefore() {
     var pagesVisited = getCookie("pagesVisited");
     if (pagesVisited) {
         pagesVisited = pagesVisited.split(",");
         if (pagesVisited.includes(window.location.href)) {
             console.log("You have visited this page before");
         } else {
             console.log("You have not visited this page before");
         }
     }
 }
 checkVisitedBefore();
  
 document.addEventListener('DOMContentLoaded', function() {
     var cookiesAccepted = getCookie("cookiesAccepted");
     var cookiePopup = document.getElementById("cookieConsentPopup");
  
     // Show the popup if cookies haven't been accepted yet
     if (!cookiesAccepted) {
         cookiePopup.style.display = "block";
     }
  
     // When the user clicks on "Accept Cookies" button, accept cookies and hide the popup
     document.getElementById("acceptCookiesBtn").onclick = function() {
         setCookie("cookiesAccepted", "true", 365); // Set the cookie to expire in 365 days
         cookiePopup.style.display = "none";
     };
 });
 // Function to delete a cookie
 function deleteCookie(name) {
     document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
 }
  
 // Call the deleteCookie function to delete the "cookiesAccepted" cookie
 deleteCookie("cookiesAccepted");
  
  
  
  
 </script>
  
 
</body>
</html>