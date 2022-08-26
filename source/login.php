<?php


$flag = file_get_contents("/flag.txt");

$cookie_timeout = 300;

$username = $_POST['username'];
$password = $_POST['password'];

$admin_text = "Invalid Admin Login";

if (isset($_COOKIE['admin']) and $_COOKIE['admin'] == "true") {
  $admin_text = nl2br("Welcome Admin\n" . $flag);
}

setcookie("sessionID", rand(100000000, 999999999), time() + $cookie_timeout);
setcookie("admin", "false", time() + $cookie_timeout);
setcookie("username", $username, time() + $cookie_timeout);
setcookie("password", $password, time() + $cookie_timeout);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/script.js" defer></script>
        <title>Omni-Flags Galactic</title>
    </head>
    <body>
        <div id="overlay"></div>
        <div id="mobile-menu" class="mobile-main-menu">
            <ul>
                <li><a href="#">Mission</a></li>
                <li><a href="corporate.html">Investors</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Flags</a></li>
                <li><a href="#">Shop</a></li>

                <li class="mobile-only"><a href="colony.html">Colony</a></li>
                <li class="mobile-only"><a href="orbital.html">Orbital</a></li>
                <li class="mobile-only"><a href="deep-space.html">Deep Space</a></li>
                <li class="mobile-only hidden"><a href="admin.html">Admin</a></li>
            </ul>
        </div>
        <header class="main-header">
            <div class="logo">
                <a href="index.html">
                    <img src="img/logo.png" alt="Omni-Flags Galactic" />
                </a>
                <h3>Omni-Flags Galactic</h2>
            </div>
            <nav class="desktop-main-menu">
                <ul>
                    <li class="hidden"><a href="admin.html">Admin</a></li>
                    <li><a href="colony.html">Colony</a></li>
                    <li><a href="orbital.html">Obital</a></li>
                    <li><a href="deep-space.html">Deep Space</a></li>
                </ul>
            </nav>
        </header>

        <!-- Hamburger Menu -->
        <button id="menu-btn" class="hamburger" type="button">
            <span class="hamburger-top"></span>
            <span class="hamburger-middle"></span>
            <span class="hamburger-bottom"></span>
        </button>

        <section></section>
        <div class="section-inner-center">
            <h2><?php echo $admin_text?></h2>
        </div>

        <footer>
            <ul>
                <li>Omni-Flags Galactic &copy; 2023</li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">YouTube</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">LinkedIn</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Suppliers</a></li>
            </ul>
        </footer>
    </body>
</html>
