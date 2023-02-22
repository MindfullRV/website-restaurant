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
        <!-- Wrapper -->
        <div class="wrapper">
            <!-- Header Nav -->
            <header class="bg-transparent">
                <a href="index.php">
                    <img src="assets/svg/logo.svg" alt="icon" />
                </a>
                <nav>
                    <img src="assets/svg/close.svg" alt="icon">
                    <ul>
                        <li><a class="active" href="#home">Beranda</a></li>
                        <li><a href="#about">Tentang</a></li>
                        <li><a href="#contact">Kontak</a></li>
                        <li>
                            <a href="login.php">
                                <button>Login</button>
                            </a>
                        </li>
                    </ul>
                </nav>
                <img src="assets/svg/menu.svg" alt="icon">
            </header>
            <!-- Headline section -->
            <section id="hero">
                <h1>Good food in good environment.</h1>
                <p>Inspired by traditional cuisine, our menu offers fresh, local ingredients with unique flavor combinations.</p>
                <a href="#menu">
                    <button>Recommended Menu</button>
                </a>
            </section>
            <!-- About section -->
            <section id="about">
                <h1>About Us</h1>
                <div class="feature flip">
                    <div class="content">
                        <h4>MAKES A GOOD FIRST IMPRESSION</h4>
                        <p>While food quality is very important, our customers receive their first impression of a restaurant from the welcome and appearance. Therefore, the restaurant needs to immediately start its customer service the moment the guest enters the restaurant. To do this, our employees must focus on two things, namely speaking politely, using ethics.</p>
                    </div>
                    <img src="images/about-img1.png" alt="Image">
                </div>
                <div class="feature">
                    <div class="content">
                        <h4>FAST SERVICE.</h4>
                        <p>Our restaurant has enough staff to seat you, take orders, fulfill requests, clear tables and complete transactions. Otherwise, customers will be made to wait due to insufficient staff rather than increased demand.</p>
                    </div>
                    <img src="images/about-img2.png" alt="Image">
                </div>
                <div class="feature flip">
                    <div class="content">
                        <h4>RESOLVE CUSTOMER COMPLAINTS IMMEDIATELY.</h4>
                        <p>Our restaurant will promptly address customer complaints to avoid bigger issues and negative reviews. Regardless of whether the complaint is legitimate or not, employees must pay attention to customers. To deal with problems, our staff will solve problems quickly and discreetly.</p>
                    </div>
                    <img src="images/about-img3.png" alt="Image">
                </div>
                <div class="videos">
                    <h1>Video</h1>
                    <video style="width: 500px; transform: translateX(50%);" controls src="images/video.mp4"></video>
                </div>
            </section>
            <!-- Menu section -->
            <section id="menu">
                <div class="container">
                    <h1>Menu Rekomendasi</h1>
                    <div class="card-container">
                        <div class="card-menu">
                            <img class="image-menu" src="assets/fried-rice.png" alt="Image">
                            <div class="content-menu">
                                <div class="text-menu">Fried Rice</div>
                            </div>
                        </div>
                        <div class="card-menu">
                            <img class="image-menu" src="assets/grilled-chicken.png" alt="Image">
                            <div class="content-menu">
                                <div class="text-menu">Grilled Chicken</div>
                            </div>
                        </div>
                        <div class="card-menu">
                            <img class="image-menu" src="assets/pasta.png" alt="Image">
                            <div class="content-menu">
                                <div class="text-menu">Pasta</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimony -->
            <section id="testi">
                <h1>Testimony</h1>
                <div class="container">
                    <div class="card">
                        <img src="assets/svg/person.svg" alt="Icon">
                        <h3>John Doe</h3>
                        <p>“The food is delicious, the seasoning taste nice. Recommended to eat with loved ones.”</p>
                    </div>
                    <div class="card two">
                        <img src="assets/svg/person.svg" alt="Icon">
                        <h3>John Doe</h3>
                        <p>“10/10 Really a recommendation for those who want to have a date in a luxurious place, my girlfriend is so happy.”</p>
                    </div>
                    <div class="card">
                        <img src="assets/svg/person.svg" alt="Icon">
                        <h3>Jane Doe</h3>
                        <p>“Very nice, luxurious place. The food is delicious.”</p>
                    </div>
                </div>
            </section>
            <!-- Section Contact -->
            <section id="contact">
                <div class="container">
                    <div class="left">
                        <h1>Contact</h1>
                        <div class="detail">
                            <div class="add">
                                <img src="images/icons/ic-address.svg" alt="Icon">
                            <div>
                            <h4>Address</h4>
                            <p>610 W Town St, Columbus. Ohio, 43215</p>
                        </div>
                        <div class="add">
                            <img src="images/icons/ic-phone.svg" alt="Icon">
                            <div>
                                <h4>Telephone</h4>
                                <p>(614) 313-8138</p>
                            </div>
                        </div>
                        <div class="add">
                            <img src="images/icons/ic-email.svg" alt="Icon">
                            <div>
                                <h4>Email</h4>
                                <p>restopro@restoran.com</p>
                            </div>
                        </div>
                        <div class="socmed">
                            <a href="facebook.com">
                                <img src="images/icons/ic-facebook.svg" alt="Icon">
                            </a>
                            <a href="instagram.com">
                                <img src="images/icons/ic-instagram.svg" alt="Icon">
                            </a>
                            <a href="twitter.com">
                                <img src="images/icons/ic-twitter.svg" alt="Icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="inputGroup">
                        <input type="text" required="" autocomplete="off">
                        <label for="name">Name</label>
                    </div>
                    <div class="inputGroup">
                        <textarea name="message" class="input" required="" autocomplete="off"></textarea>
                        <label for="message">Send Message here...</label>
                    </div>
                    <input type="submit" class="submit"/>
                </div>
            </section>
        </div>
        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="footer-content">
                    <img src="images/icons/logo.svg" alt="Icon">
                    <p>Inspired by traditional cuisine, our menu offers fresh, local ingredients with unique flavor combinations.</p>
                    <ul class="social">
                        <li>
                            <a href="facebook.com">
                                <img src="images/icons/ic-facebook.svg" alt="Icon">
                            </a>
                        </li>
                        <li>
                            <a href="instagram.com">
                                <img src="images/icons/ic-instagram.svg" alt="Icon">
                            </a>
                        </li>
                        <li>
                            <a href="twitter.com">
                                <img src="images/icons/ic-twitter.svg" alt="Icon">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="bottom">
                    <p>Copyright &copy; 2023 | Made by MindfullRV</p>
                </div>
            </div>
        </footer>
    </body>
</html>