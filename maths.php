<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product page</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

</head>

<body>


    <div class="mainbdy">
        <nav class="upper">

            <a href="index.php"><img src="img/logo.png" alt=""></a>

            <div class="searchbox">
                <input type="text" class="searchclass" id="searchid" placeholder="Search products">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>

            <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="login.php"><i class="fa-solid fa-plus"></i> Sell Now</a></li>
            </ul>
        </nav>

        <nav class="lower">
            <div class="category">
                <ul>
                    <li><a href="">Category <i class="fa-solid fa-sort-down"></i></a>
                        <ul>
                            <p>First Year</p>
                            <li><a href="calculator.html">Calculator</a></li>
                            <li><a href="">Books</a></li>
                            <li><a href="">Drawing tools</a></li>
                        </ul>
                    </li>
                </ul>
            </div>


            <ul>
                <li><a href="">First Year</a></li>
                <li><a href="">Second Year</a></li>
                <li><a href="">Third Year</a></li>
                <li><a href="">Fourth Year</a></li>
            </ul>
        </nav>
    </div>
    <!-- ====================================================productimage======================================================== -->
    <div class="product_img">
        <div class="productdescription">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="images/mathtech.jpg" alt=""></div>
                    <!--<div class="swiper-slide"><img src="img/drft4/drft4-img2.jpg" alt="">Slide 2</div>
                    <div class="swiper-slide"><img src="img/drft4/drft4-img3.jpg" alt=""></div>-->
                    ...
                </div>
                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev" id="prev"></div>
                <div class="swiper-button-next" id="nex"></div>
            </div>
        
            <div class="description">
                <h3>Description</h3>
                <p>Hardly 1 semester used book up for sale at half the market price.</p>
            </div>
        </div>
        <div class="productdetails">
            <div class="box">
                <div class="price">
                    <h3>₹200</h3>
                    <div>
                    <p><i class="fa-solid fa-share-nodes"></i></p>
                    <p><i class="fa-solid fa-heart"></i></p>
                    </div>
                </div>
                <span> maths book</span>
                <div class="location">
                    <p>location</p>
                    <p>location</p>
                </div>
            </div>
            <div class="box" id="box2">
                <p class="seller_description">seller Description</p>
                <div class="seller_details">
                    <img src="img/mittal1.jpg" >
                    <div>
                        <h2>Aditya Mittal</h2>
                    </div>
                </div>
                <a href="#"> chat with seller</a>
            </div>
        </div>
        
    </div>

    </div>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script>
    //  ====================================================producsliderjs======================================================== 
    const swiper = new Swiper('.swiper', {
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

    });
</script>
</body>


</html>