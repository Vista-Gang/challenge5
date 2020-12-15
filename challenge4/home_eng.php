<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Vista College</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/utilities.css">
    <link rel="stylesheet" href="css/indexstyle.css">
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="container flex">
            <div class="dutch">
                <a href="index.php"> 
                    <img src="images/dutch.png" alt="">
            </div>
            <h1 class="logo">Vista College</h1>
            <nav>
                <ul>
                    <li><a href="home_eng.php">Home</a></li>
                    <li><a href="foodEN.php">Food</a></li>
                    <li><a href="drinksEN.php">Drinks</a></li>
                </ul>
            </nav>
            <a class="btn btn-secondary" href="login/login.php">Login</a></li>
        </div>
    </div>

    <!-- Showcase -->
    <section class="showcase">
        <div class="container grid">
            <div class="showcase-text">
                <h1>About us</h1>
                    <p>And you are probably looking for a nice meal.
                    An easy quick meal that gives you all your energy back and can immediately study or work again.
                    With cheap meals and drinks.
                </p>
                <a href="aboutus.php" class="btn btn-outline">Read more</a>
            </div>

            <div class="showcase-form card">
                <h2>Send us an email</h2>
                <form>
                    <div class="form-control">
                        <input type="text" name="name" placeholder="Your full name">
                    </div>
                    <div class="form-control">
                        <input type="email" name="email" placeholder="Your E-mail adress">
                    </div>
                    <div class="form-control">
                        <input type="text" name="subject" placeholder="Your message in short">
                    </div>
                    <input type="submit" value="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="stats">
        <div class="container">
            <h3 class="stats-heading text-center my-1">
            Most bought dishes and drinks           
            </h3>

            <div class="grid grid-3 text-center my-4">
                <div>
                    <img src="images/frikandel.png" alt="">
                    <h3>Dishes</h3>
                </div>
                <div>
                    <img src="images/cola.png" alt="">
                    <h3>Drinks</h3>
                </div>
                <div>
                    <div class="englishfood.png">
                    <img src="images/british.png" alt="">
                    <h3>British</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Cloud -->
    <section class="cloud bg-primary my-2 py-2">
        <div class="container grid">
            <div class="text-center">
                <h2 class="lg">Vista College</h2>
                <p class="lead my-1">Link to Vista College home</p>
                    <a href="https://vistacollege.nl/" class="btn btn-outline">Vista Home</a>
            </div>
            <img src="images/vista.png" alt="">
        </div>
    </section>

    <section>
        <!-- Languages -->
        <div class="languages">
            <h2 class="md text-center my-2">
                FAQ
            </h2>
            <p class="md2 text-center my-2">
                1 Is the canteen open due to corona (covid-19. <br>
                No the canteen is not allowed to open until the virus is gone. <br> <br>

                2 you can pay with a debit card. <br>
                Yes, you can pay with your debit card. <br> <br>

                3 where is the canteen. <br>
                The canteen is in the West building <br> <br>

                4 there is vegetarian food. <br>
                Yes there are vegetarian options. <br> <br>

                5 people may also enter the canteen from outside. <br>
                No it is meant for the teachers and the students. <br> <br>
            </p>
            </div>  
        </div>
    </section>

    <!-- Footer -->
    <div class="footer bg-dark py-5">
        <div class="container grid grid-3">
            <div>
                <h1>Vista
                </h1>
                <p>Copyright &copy; 2020</p>
        </div>
        <nav>
            <ul>
                <li><a href="home_eng.php">Home</a></li>
                <li><a href="foodEN.php">Food</a></li>
                <li><a href="drinksEN.php">Drinks</a></li>
            </ul>
        </nav>
        <div class="social">
            <a href="https://www.facebook.com/VISTAcollege.officialpage"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="https://www.instagram.com/vistacollege_ict/"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="https://twitter.com/VISTAcollege_"><i class="fab fa-twitter fa-2x"></i></a>   
    </div>
</body>
</html>
