<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <?php include("./database/like.inc.php"); ?>
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
            <div class="english">
                <a href="home_eng.php">
                    <img src="images/english.png" alt="">
            </div>
            <h1 class="logo">Vista College</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="cart.php">Eten</a></li>          
                    <li><a href="drinken.php">Drinken</a></li>
                </ul>
            </nav>
            <a class="btn btn-secondary" href="login/login.php">Login</a></li>
        </div>
    </div>
    <!-- Showcase -->
    <section class="showcase">
        <div class="container grid">
            <div class="showcase-text">
                <h1>Over ons</h1>
                    <p>En jij bent waarschijnlijk op zoek naar een lekkere maaltijd.
                    Een makkelijk snel maaltijd waarmee jij al je energie terug van krijgt en direct weer kan studeren of werken.
                    Met goedkope maaltijden en drinken.
                </p>
                <a href="aboutusnl.php" class="btn btn-outline">Lees meer</a>
            </div>
            <div class="showcase-form card">
                <h2>Stuur ons een mail</h2>
                <form>
                    <div class="form-control">
                        <input type="text" name="name" placeholder="Je volledige naam">
                    </div>
                    <div class="form-control">
                        <input type="email" name="email" placeholder="Je E-mail adress">
                    </div>
                    <div class="form-control">
                        <input type="text" name="subject" placeholder="Beschrijf hier kort je bericht">
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
                Meest gekochte gerechten en dranken
            </h3>
            <div class="grid grid-3 text-center my-4">
                <div>
                    <img src="images/frikandel.png" alt="">
                    <h3>Gerechten</h3>
                </div>
                <div>
                    <img src="images/cola.png" alt="">
                    <h3>Dranken</h3>
                </div>
                <div>
                    <div class="englishfood.png">
                    <img src="images/british.png" alt="">
                    <h3>Brits</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Cloud -->
    <section class="cloud bg-primary my-2 py-2">
        <div class="container grid">
            <div class="text-center">
                <h2 class="lg">Vista College</h2>
                <p class="lead my-1">Link naar Vista College home</p>
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

                <?php

                include_once("./database/selectfaq.inc.php"); 
    
                ?>
                
            </p>
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
                <li><a href="index.html">Home</a></li>
                <li><a href="eten.html">Eten</a></li>
                <li><a href="drinken.html">Drinken</a></li>
            </ul>
        </nav>
        <div class="social">
            <a href="https://www.facebook.com/VISTAcollege.officialpage"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="https://www.instagram.com/vistacollege_ict/"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="https://twitter.com/VISTAcollege_"><i class="fab fa-twitter fa-2x"></i></a>   
    </div>
</body>
</html>
