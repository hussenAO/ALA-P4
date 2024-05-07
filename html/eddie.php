<?php
// Include your database connection file
include '../assets/php/db.php';

// Create a query to fetch comments from the database
$query = "SELECT * FROM comments ORDER BY timestamp DESC";

// Execute the query
$result = mysqli_query($conn, $query);

// Fetch all comments as an associative array
$comments = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!-- The rest of your HTML starts here -->
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
        <link rel="stylesheet" href="../assets/css/styles.css">
        <link rel="stylesheet" href="../assets/css/comments.css">
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
                        </div>
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
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__data">
                        <h2 class="home__subtitle">HERE IS</h2>
                        <h1 class="home__title">EDDIE</h1>
                        <p class="home__description">
                            Eddie Hall is a British strongman and former professional weightlifter. He is particularly renowned for winning the World's Strongest Man competition in 2017, becoming the first Brit to achieve this title since 1993. Hall is also known for his impressive strength and record-breaking feats, such as deadlifting 500 kg in 2016, which was a world record at the time. His career is marked by his dedication to strength training and his participation in international strongman competitions.
                        </p>
                        <a href="#pricing" class="button button__flex">
                            Go To Routines <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>

                    <div class="home__images">
                        <img src="../assets/img/eddie.png" alt="home image" class="home__img">

                        <div class="home__triangle home__triangle-3"></div>
                        <div class="home__triangle home__triangle-2"></div>
                        <div class="home__triangle home__triangle-1"></div>
                    </div>
                </div>
            </section>

             <!--==================== PRICING ====================-->
             <section class="pricing section" id="pricing">
                <div class="container">
                    <div class="section__data">
                        <h2 class="section__subtitle">Our Bodybuilders</h2>
                        <div class="section__titles">
                            <h1 class="section__title-border">HIS</h1>
                            <h1 class="section__title">SPECIAL DIET</h1>
                        </div>
                    </div>
                    
                    <div class="pricing__container grid">
                        <article class="pricing__card">
                            <header class="pricing__header">
                                <div class="pricing__shape">
                                    <img src="../assets/img/pricing1.png" alt="pricing image" class="pricing__img">
                                </div>
                                <h1 class="pricing__title">Monday</h1>
                                <h2 class="pricing__number">🦍</h2>
                                <h3 class="pricing__number">Routines</h3>
                            </header>

                            <ul class="pricing__list">
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> Deadlift:

                                    Sets: 4-5
                                    Repetitions: 15-12-10-8
                                </li>
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> Lat Half-moon:

                                    Sets: 4-5
                                    Repetitions: 15-12-10-8
                                </li>
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> Machine Rows:

                                    Sets: 4-5
                                    Repetitions: 15-12-10-8
                                </li>
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> Dumbbell Rows:

                                    Sets: 4-5
                                    Repetitions: 15-12-10-8
                                </li>
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> Weighted Crunches:

                                    Sets: 4-5
                                    Repetitions: 15-12-10-8
                                </li>
                            </ul>

                            <a href="https://www.youtube.com/watch?v=Vxadx7VZr98&pp=ygUSZWRkaWUgaGFsbCB3b3Jrb3V0" target="_blank" class="button button__flex pricing__button">
                                Watch Video <i class="ri-arrow-right-line"></i>
                            </a>
                        </article>

                        <article class="pricing__card pricing__card-active">
                            <header class="pricing__header">
                                <div class="pricing__shape">
                                    <img src="../assets/img/pricing2.png" alt="pricing image" class="pricing__img">
                                </div>
                                <h1 class="pricing__title">Tuesday</h1>
                                <h2 class="pricing__number">💪🏼</h2>
                                <h3 class="pricing__number">Routines</h3>
                            </header>

                            <ul class="pricing__list">
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> Front to Back Military Press:

                                    Sets: 4-5
                                    Repetitions: 15-12-10-8
                                </li>
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> Arnold Press:

                                    Sets: 4-5
                                    Repetitions: 15-12-10-8
                                </li>
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> Front Raises:

                                    Sets: 4-5
                                    Repetitions: 15-12-10-8
                                </li>
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> Lateral Raise:

                                    Sets: 4-5
                                    Repetitions: 15-12-10-8
                                </li>
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> Shrugs:

                                    Sets: 4-5
                                    Repetitions: 15-12-10-8
                                </li>
                            </ul>

                            <a href="https://www.youtube.com/watch?v=Jos3djAPdzQ&pp=ygUSZWRkaWUgaGFsbCB3b3Jrb3V0" target="_blank" class="button button__flex pricing__button">
                                Watch Video <i class="ri-arrow-right-line"></i>
                            </a>
                        </article>

                        <article class="pricing__card">
                            <header class="pricing__header">
                                <div class="pricing__shape">
                                    <img src="/assets/img/pricing3.png" alt="pricing image" class="pricing__img">
                                </div>
                                <h1 class="pricing__title">Wednesday</h1>
                                <h2 class="pricing__number">🏋️‍♂️</h2>
                                <h3 class="pricing__number">Routines</h3>
                            </header>

                            <ul class="pricing__list">
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> Bicep Curls:

                                    Sets: 4-5
                                    Repetitions: 15-12-10-8
                                </li>
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> Barbell Curls:

                                    Sets: 4-5
                                    Repetitions: 15-12-10-8
                                </li>
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> Preacher Curls:

                                    Sets: 4-5
                                    Repetitions: 15-12-10-8
                                </li>
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i>Hammer Curls:

                                    Sets: 4-5
                                    Repetitions: 15-12-10-8
                                </li>
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> Tricep Pushdown:

                                    Sets: 4-5
                                    Repetitions: 15-12-10-8
                                </li>
                            </ul>

                            <a href="https://www.youtube.com/watch?v=6Jx4ILVdqk4&pp=ygUSZWRkaWUgaGFsbCB3b3Jrb3V0" target="_blank" class="button button__flex pricing__button">
                                Watch Video <i class="ri-arrow-right-line"></i>
                            </a>
                        </article>
                    </div>
                </div>
                <!-- Comment Form -->
                <form action="../assets/php/submit_comment.php" method="post">
                    <input type="text" name="username" placeholder="Enter your username here...">
                    <textarea name="comment" placeholder="Enter your comment here..."></textarea>

                    <!-- Star Rating -->
                    <div class="star-rating">
                        <input id="star5" name="rating" type="radio" value="5" class="radio-btn hide" />
                        <label for="star5" class="star" title="5 stars">&#9733;</label>
                        <input id="star4" name="rating" type="radio" value="4" class="radio-btn hide" />
                        <label for="star4" class="star" title="4 stars">&#9733;</label>
                        <input id="star3" name="rating" type="radio" value="3" class="radio-btn hide" />
                        <label for="star3" class="star" title="3 stars">&#9733;</label>
                        <input id="star2" name="rating" type="radio" value="2" class="radio-btn hide" />
                        <label for="star2" class="star" title="2 stars">&#9733;</label>
                        <input id="star1" name="rating" type="radio" value="1" class="radio-btn hide" />
                        <label for="star1" class="star" title="1 star">&#9733;</label>
                    </div>

                    <input type="submit" value="Submit Comment">
                    </form>
                    <!-- Comments Section -->
                    <section id="comments">
                        <?php foreach ($comments as $comment): ?>
                            <div class="comment">
                                <h3><?php echo htmlspecialchars($comment['username']); ?></h3>
                                <div class="rating">
                                    <?php for ($i = 0; $i < 5; $i++): ?>
                                        <span><?php echo $i < $comment['rating'] ? '&#9733;' : '&#9734;'; ?></span>
                                    <?php endfor; ?>
                                </div>
                                <p><?php echo htmlspecialchars($comment['comment']); ?></p>
                                <p><?php echo htmlspecialchars($comment['timestamp']); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </section>

            <!--==================== FOOTER ====================-->
            <footer class="footer section" id="footer">
    <div class="footer__container container grid">
        <div>
            <a href="#" class="footer__logo">
                <img src="../assets/img/logo-nav.png" alt="logo"> OG FITNESS
            </a>
            <p class="footer__description">
                Subscribe for company <br> updates below.
            </p>

            <form action="" class="footer__form" id="contact-form">
                <input type="email" name="user_email" placeholder="Your Email" class="footer__input" id="contact-user">
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
                        <a href="ronnie.php" class="footer__link">Ronnie</a>
                    </li>
                    <li>
                        <a href="eddie.php" class="footer__link">Eddie</a>
                    </li>
                    <li>
                        <a href="arnold.php" class="footer__link">Arnold</a>
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
<script src="../assets/js/scrollreveal.min.js"></script>

<!--=============== EMAIL JS ===============-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

<!--=============== MAIN JS ===============-->
<script src="../assets/js/main.js"></script>
</body>
</html>