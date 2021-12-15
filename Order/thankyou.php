<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Kalani Mangin">
    <meta name="copyright" content="December 12 2021">
    <title>Home</title>
    <link rel="icon" type="image/png" href="../images/favicon-16x16.png"> <!-- Make this the logo of the website -->
    <link rel="stylesheet" href="../styles/main.css">
    <script src="../js/jquery.slicknav.min.js"></script>
    <script src="https://kit.fontawesome.com/729aa822ab.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <a href="../index.html"><img src="../images/logo.png" alt="Bamboo Emporium"></a> <!-- put a picture up here to be the logo for the site -->
    <h1>The Bamboo Emporium</h1>
    <h2>"We Sell Bamboo for Cheap"</h2>
    <nav>
        <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="../aboutUs.html">About Us</a></li>
            <li class=""><a href="#">Products</a>
                <ul>
                    <li><a href="../Products/furniture.html">Furniture</a></li>
                    <li><a href="../Products/bulk.html">Bulk</a></li>
                </ul>
            </li>
            <li><a href="../faqs.html">FAQs</a></li>
            <li><a href="order.html">Order Now!</a> </li>
        </ul>
    </nav>
</header>

<main>
    <div>
        <section class="main">
            <h1>Thank you for your order!</h1>
            <h2>Your order will be delivered to you: never</h2>
            <p>You have just been scammed. Gotta a problem with that? Call 1-800-SUCKS2BEU</p>
            <h2><?php echo "This page was broght to you via php. Today's date is: " . date( "F d Y")?></h2>
        </section>
        <aside>
            <h3>Strongest 5 Bamboo</h3>
            <ol>
                <li>Guadua angustifolia</li>
                <li>Dendrocalamus asper</li>
                <li>Dendrocalamus strictus</li>
                <li>Bambusa balcooa</li>
                <li>Bambusa bambos</li>
            </ol>
        </aside>
    </div>
</main>

<footer>
    <section>
    </section>
    <section>
        <ul id="social-media">
            <li><a href="https://facebook.com" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://pinterest.com" target="_blank" title="Pinterest"><i class="fab fa-pinterest"></i></a></li>
            <li><a href="https://twitter.com" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://youtube.com" target="_blank" title="YouTube"><i class="fab fa-youtube"></i></a></li>
            <li><a href="https://instagram.com" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
        </ul>
        <ul>
            <li><a href="#"></a>Sitemap</li>
            <li><a href="#"></a>Careers</li>
            <li><a href="#"></a>News & Events</li>
            <li><a href="#"></a>Return Policy</li>
            <li><a href="#"></a>Suppliers</li>
            <li><a href="#"></a>Employees</li>
            <li><a href="#"></a>Privacy</li>
            <li><a href="#"></a>Terms of Use</li>
        </ul>
        <span class="copyright">© 2021 Bamboo Emporium All rights reserved.</span>
    </section>
</footer>

</body>
</html>
