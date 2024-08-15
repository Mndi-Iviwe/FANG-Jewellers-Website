<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styling/Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
     integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <title>Product HomePage</title>
</head>
<body>
    <header class="nav-header">

                <div class="nav-icon">
                    <img src="Images/fangtastic logo.jpeg" alt="Logo FANGJewlerz" class="circle-logo">
                    <h4 class="company-name">FANGTASTIC</h4>
                </div>

        <div class="nav-div">

            <nav>
            <ul class="nav-links">
                <li><a href="index.php">Homepage</a></li>
                <li><a href="Products.html.php">Products</a></li>
                <li><a href="NewsPage.html.php">News & Updates</a></li>
                <li><a href="ContactUs.html.php">Contact Us</a></li> 
                <li><a href=""><i class="fa-solid fa-cart-shopping"></i></a></li>
                <li><a href=""><i class="fa-solid fa-user"></i></a></li>
                </ul>

            </nav>
        </div>

    </header>

    <section class="store-prices" >
        <div class="price-header">
            <h1>Selection & Prices</h1>
        </div>
        
        <div class="price-container">
         
            <table>
                <tr>
                    <th><u>SWARVOSKI GEMS</u></th>
                    <th><u>PRICE</u></th>
                </tr>
                <tr>
                    <td>Small Crystal</td>
                    <td>R120</td>
                </tr>
                <tr>
                    <td>Large Crystal</td>
                    <td>R150</td>
                </tr>
                <tr>
                    <td>Tinted Crystal</td>
                    <td>R150</td>
                </tr>
                <tr>
                    <td>Neon Gems</td>
                    <td>R180</td>
                </tr>                
                <tr>
                    <td>2 For 1</td>
                    <td>R250</td>
                </tr>
                <tr>
                    <td>Crystal Shapes</td>
                    <td>R250</td>
                </tr>
                <tr>
                    <td>Butterfly Set</td>
                    <td>R350</td>
                </tr>
                <tr>
                    <td>Dragon Fly Set</td>
                    <td>R350</td>
                </tr>
                <tr>
                    <td>Opal Butterfly</td>
                    <td>R400</td>
                </tr>
                <tr>
                    <td>Opal Heart</td>
                    <td>R400</td>
                </tr>
                <tr>
                    <td>Chandelier Tooth</td>
                    <td>R420</td>
                </tr>
                <tr>
                    <td>Halo Tooth</td>
                    <td>R100 p/Gem</td>
                </tr>

                

                <tr>
                    <td>18K Gold/White Gold Charm</td>
                    <td>Enquire</td>
                </tr>


            </table>
            
    
        </div>

           
        
    </section>

    <div class="cartcontainer">
        <h1>Fangtastic Gems Shopping Cart</h1>
        <div class="products">
            <div class="product">
                <img src="Images/Toothgem-kit.jpg" alt="Tooth Gems Box of tooth gems ">
                <h2>House Tooth Gem Kit</h2>
                <p>R200.00</p>
                <button onclick="addToCart('Fangtastic Tooth Gems', 200)">Add to Cart</button>
            </div>
            <div class="product"> 
                <img src="Images/gem-kits.webp" alt="">
                <h2>Gemzees: DIY TOOTH GEMS</h2>
                <p>R150.00</p>
                <button onclick="addToCart('Gemzees: DIY gem set', 150)">Add to Cart</button>
            </div>
            <div class="product"> 
                <img src="Images/IMG-4362.webp" alt="">
                <h2>ICYBOSS: Tooth gem kit</h2>
                <p>R127.00</p>
                <button onclick="addToCart('ICYBOSS tooth gem kit', 127)">Add to Cart</button>
            </div>
        </div>
        <h2></h2>
        <div class="cart" id="cart">
            <ul id="cart-items"></ul>
            <p>Total: R<span id="total-price">0.00</span></p>
        </div>
    </div>

    <section class="" style="background-color: lightpink;">
        <h2><u>Styles for Inspiration</u></h2>
        <div class="image-row">
            <img src="Images/prices_1.jpg" alt="Image 1">
            <img src="Images/prices_2.jpg" alt="Image 2">
        </div>
    </section>


    <footer>
        <div class="footer-container">
            <div class="social-icons">
                <a href="https://za.pinterest.com/alexandriianyathii26/fangtastic-sa-pinspo/"><i class="fa-brands fa-pinterest"></i></a>
                <a href="https://www.instagram.com/fangtasticsa?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.tiktok.com/discover/tooth-gem-fangs"><i class="fa-brands fa-tiktok"></i></a>
            </div>
            <nav>
                <ul class="footer-nav-links">
                <li><a href="HomePage.html">Homepage</a></li>
                <li><a href="Products.html">Products</a></li>
                <li><a href="NewsPage.html">News & Updates</a></li>
                </ul>
            </nav>
            
        </div>
        <div class="footer-credit">
            <p>@Mo Piiercings</p>
            <p>155 Smit Street, Braamfontein</p>
            <p>CopyRight &copy;2024; Designed By <span class="designer">FANGJewellerz</span></p>
        </div>
    </footer>

    <script src="JavaScrypt/Scrypt.js"></script>
</body>
</html>