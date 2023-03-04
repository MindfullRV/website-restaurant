<?php
    // All the includes
    @include 'includes/favicon.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/index.css">
        <!-- Website Title -->
        <title>RestoPro</title>
    </head>
    <body>
        <!-- Image Banner -->
        <div class="hero-img"></div>

        <!-- Header -->
        <header>
            <img src="assets/svg/logo.svg" alt="icon">
            <nav>
                <ul>
                    <li><a class="active" href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#review">Review</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li>
                        <a href="login.php">
                            <button>Login</button>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <!-- Main -->
        <main>
            <!-- Headline -->
            <section id="headline">
                <div class="container">
                    <h1>Fine dining for the modern palate</h1>
                    <p>Inspired by traditional food, our menu offers fresh, local ingredients with unique flavor combinations.</p>
                    <a href="#menu">
                        <button>Our Reccomendation</button>
                    </a>
                </div>
            </section>
            <section id="about">
                <div class="container">
                    <h1 class="text-center">About</h1>
                    <div class="feature flip">
                        <div class="content">
                            <h4>MAKES A GOOD FIRST IMPRESSION.</h4>
                            <p>While food quality is very important, our customers receive their first impression of a restaurant from the welcome and appearance. Therefore, the restaurant needs to immediately start its customer service the moment the guest enters the restaurant. To do this, our employees must focus on two things, namely speaking politely, using ethics.</p>
                        </div>
                        <img src="assets/about-img1.png" alt="image">
                    </div>
                    <div class="feature">
                        <div class="content">
                            <h4>FAST AND EFFICIENT SERVICE.</h4>
                            <p>Our restaurant has enough staff to reserve you a seat, take orders, fulfill requests, clear tables and complete transactions. Otherwise, customers will be made to wait due to insufficient staff rather than increased demand.</p>
                        </div>
                        <img src="assets/about-img2.png" alt="image">
                    </div>
                    <div class="feature flip">
                        <div class="content">
                            <h4>RESOLVE CUSTOMER COMPLAINTS PROMPTLY.</h4>
                            <p>Our restaurant will promptly address customer complaints to avoid bigger issues and negative reviews. Regardless of whether the complaint is legitimate or not, employees must pay attention to customers. To deal with problems, our staff will solve problems quickly and discreetly.</p>
                        </div>
                        <img src="assets/about-img3.png" alt="image">
                    </div>
                </div>
            </section>
            <section id="review">
                <div class="container">
                    <h1 class="text-center">Reviews</h1>
                    <div class="grid-4">
                        <div class="card">
                            <img src="assets/person1.jpg" alt="image">
                            <div class="card-body">
                                <h3>Patrick</h3>
                                <q>The food is really delicious, the spices are tasty and delicious. Recommended to eat with loved ones.</q>
                            </div>
                        </div>
                        <div class="card">
                            <img src="assets/person2.jpg" alt="image">
                            <div class="card-body">
                                <h3>Tyler</h3>
                                <q>10/10 Really a recommendation for those who want to have a date in a luxurious place, my girlfriend is so happy.</q>
                            </div>
                        </div>
                        <div class="card">
                            <img src="assets/person3.jpg" alt="image">
                            <div class="card-body">
                                <h3>Louis</h3>
                                <q>The place is really nice, and luxurious. The food is delicious.</q>
                            </div>
                        </div>
                        <div class="card">
                            <img src="assets/person4.jpg" alt="image">
                            <div class="card-body">
                                <h3>Driver</h3>
                                <q>The food is really tasty, richly spiced and delicious. Recommend to dine with relatives. </q>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <footer></footer>
    </body>
</html>