
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./shop/assets/css/home.css">
    <title>SlideShow</title>
</head>
<body>
<style>
    /* Additional styles for the slideshow */
    .slide-show {
        margin-top: 70px; /* Adjust this value based on your header's height */
        position: relative;
        overflow: hidden; /* Prevents overflow of content */
    }

    /* Your existing styles go here */
    /* Add any other necessary styles for the slideshow */
</style>
<?php
include_once "header.php";
?>

<div class="slide-show">
    <div class="list-image">
        <div class="slide active"> <!-- Thêm lớp active cho slide đầu tiên -->
            <img src="./shop/images/3.jpg" width="100%" alt="">
            <div class="text-overlay">
                <h3>New for 2024</h3>
                <h1>A collection with a Fan for Every space</h1>
                <a href="#" class="learn-more-btn">Learn More</a>
            </div>
        </div>
        <div class="slide">
            <img src="./shop/images/7.jpg" width="100%" alt="">
            <div class="text-overlay">
                <h3>TriAire</h3>
                <h1>Two of your favourite finishes now available in Marine Grade</h1>
                <a href="#" class="learn-more-btn">Learn More</a>
            </div>
        </div>
        <div class="slide">
            <img src="./shop/images/22.jpg" width="100%" alt="">
            <div class="text-overlay">
                <h3>Wrap</h3>
                <h1>Brush satin brass + Matte white</h1>
                <a href="#" class="learn-more-btn">Learn More</a>
            </div>
        </div>
        <div class="slide">
            <img src="./shop/images/23.jpg" width="100%" alt="">
            <div class="text-overlay">
                <h3>Neutral & Now</h3>
                <h1>Featuring the new Antique Graphite finish with new Light Oak finish Blades</h1>
                <a href="#" class="learn-more-btn">Learn More</a>
            </div>
        </div>
    </div>
    <div class="btns-left btn">❮</div>
    <div class="btns-right btn">❯</div>
    <div class="index-image">
        <div class="index-item index-item-0 active"></div>
        <div class="index-item index-item-1"></div>
        <div class="index-item index-item-2"></div>
        <div class="index-item index-item-3"></div>
    </div>
    <script src="./shop/assets/js/home.js"></script>
</div>
</div>
<div class="wrap-image">
    <div class="introduction">
        <p>Fanimation fans are the perfect fusion of beauty and functionality. With designs for every
            </br>style and technology-driven controls for your convenience, Fanimation fans inspire your home. </br>
            They integrate into any space and allow you to make a statement that is all your own.
        </p>
    </div>
    <div class="list">
        <div class="row-1">
            <div class="ceilingfan">
                <div class="img-container">
                    <a href="#"> <!-- Thêm thẻ a để link -->
                        <img src="./shop/images/Remove-bg.ai_1728388796796.png" alt="">
                        <p>Ceiling Fans</p>
                    </a>
                </div>
            </div>
            <div class="pedestialfan">
                <div class="img-container">
                    <a href="#">
                        <img src="./shop/images/gg.png" alt="">
                        <p>Pedestal Fans</p>
                    </a>
                </div>
            </div>
            <div class="wallfan">
                <div class="img-container">
                    <a href="#">
                        <img src="./shop/images/gg4ez.png" alt="">
                        <p>Wall Fans</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="row-2">
            <div class="exhaustfan">
                <div class="img-container">
                    <a href="#">
                        <img src="./shop/images/Remove-bg.ai_1728333774158.png" alt="">
                        <p>Exhaust Fans</p>
                    </a>
                </div>
            </div>
            <div class="accessories">
                <div class="img-container">
                    <a href="#">
                        <img src="./shop/images/Remove-bg.ai_1728332740308.png" alt="">
                        <p>Accessories</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="aboutus">
    <img src="./shop/images/gg3ez.jpg" alt="">
    <div class="text">
        <h2>ABOUT US</h2>
        <h1>Air</br>Apparent</h1>
        <p>From the very first fan we created</br>more than 30 years ago to the</br>newest ones in our portfolio, we</br>create fans you can’t wait to show</br>off! The same ingenuity and quality</br>craftsmanship that gave birth to</br>Fanimation continues to guide us</br>today.</p>
    </div>
</div>
<!-- best seller  -->
</div>
<?php
include_once "footer.php";
?>
</body>
</html>
