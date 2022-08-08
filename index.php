<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>khana website</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <a href="index.php" class="logo"><span class="fas fa-home" >K</span>HANA</a>

    <nav class="navbar">
        <a href="./buy/index.php">خرید</a>
        <a href="sale/index.php">فروش</a>
        <a href="rent/index.php">اجاره</a>
    </nav>

    <div class="icons">
        <div id="menu-bars" class="fas fa-bars"></div>
        <a href="#" class="fas fa-user"></a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <form action="">

        <h3>خانه زیبای تان را پیدا کنید</h3>

        <input class="inputBox" type="search" id="search-bar" placeholder=".........جستجو کنید">

        <input type="submit" value="جستجو " class="btn">

    </form>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading">  خدمات<span> ما</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/s-3.png" alt="">
            <h3>اجاره</h3>
            <a href="#" class="btn">جزئیات</a>
        </div>

        <div class="box">
            <img src="images/s-1.png" alt="">
            <h3>فروش</h3>

            <a href="#" class="btn">جزئیات</a>
        </div>

        <div class="box">
            <img src="images/s-2.png" alt="">
            <h3>خرید</h3>
            <a href="buy/index.php" class="btn">جزئیات</a>
        </div>

    </div>

</section>

<!-- services section ends -->



<!-- agents section starts  -->

<section class="agents" id="agents">

    <h1 class="heading"> مشاوران  <span>ورزیده</span> </h1>

    <div class="box-container">

        <div class="box">
            <a href="#" class="fas fa-envelope"></a>
            <a href="#" class="fas fa-phone"></a>
            <img src="images/pic-3.jpg" alt="">
            <h3>محمد شعیب</h3>
            <span>مشاور</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-envelope"></a>
            <a href="#" class="fas fa-phone"></a>
            <img src="images/pic-3.jpg" alt="">
            <h3>علی سجاد</h3>
            <span>مشاور</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-envelope"></a>
            <a href="#" class="fas fa-phone"></a>
            <img src="images/pic-3.jpg" alt="">
            <h3>روح الله</h3>
            <span>مشاور</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-envelope"></a>
            <a href="#" class="fas fa-phone"></a>
            <img src="images/pic-3.jpg" alt="">
            <h3>امان سروری</h3>
            <span>مشاور</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>

<!-- agents section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading">ارتباط <span> با ما</span></h1>

<div class="icons-container">

    <div class="icons">
        <img src="images/icon-1.png" alt="">
        <h3>شماره های تماس</h3>
        <p>+93784384008</p>
        <p>+93202503232</p>
    </div>

    <div class="icons">
        <img src="images/icon-3.png" alt="">
        <h3>ایمل آدرس</h3>
        <p>bigzad98@gmail.com</p>
        <p>Aman_sarware@gmail.com</p>
    </div>

     <div class="icons">
        <img src="images/icon-3.png" alt="">
        <h3>آدرس دفتر</h3>
        <p>کارته چهار-کابل-افغانستان</p>
    </div>

</div>

</section>

<!-- contact section ends -->


<!-- javascript part  -->
<script>

let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    navbar.classList.toggle('active');
    menu.classList.toggle('fa-times');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
    menu.classList.remove('fa-times');
}

</script>

</body>
</html>