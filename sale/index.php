<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>khana website</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="../css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>

<!-- from section start -->

<section class="home" id="home">

    <form action="">

        <h3>ثبت آگهی مسکن شما</h3>

        <p class="textform">:ولایت</p>
        <select name="provence" id="pro">
            <option value="kabul">کابل</option>
        </select>


        <p class="textform">:ناحیه</p>
        <select name="nahiya">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>

        </select>

        <p class="textform">:نوعیت مسکن</p>

        <select name="maskan">
            <option value="zamin">زمین</option>
            <option value="how">حویلی</option>
            <option value="appartmant">آپارتمانی</option>

        </select>

        <p class="textform">:مساحت به متر مربع</p>
        <input  type="number" name="area" class="inputtext">


        <p class="textform">:تعداد اتاق</p>
        <input  type="text" name="room" class="inputtext">

        <p class="textform">:تعداد آشپز خانه</p>
        <input  type="text" name="kichen" class="inputtext">

        <p class="textform">:تعداد حمام</p>
        <input  type="text" name="bath" class="inputtext">

        <p class="textform">:آدرس</p>
        <input  type="text" name="address" class="inputtext">

        <p class="textform">:توضیحات</p>
        <textarea name="detail" id="" cols="30" rows="10" class="textarea"></textarea>

        <p class="textform">:قیمت کل</p>
        <input  type="number" name="price" class="inputtext">


        <p class="textform">:عکس</p>
        <input type="file">


        <input type="submit" value="ثبت آگهی" class="btn">



    </form>

</section>
<!-- form end section -->



    
<!-- header section starts  -->

<header>

    <a href="../index.php" class="logo"><span class="fas fa-home" >K</span>HANA</a>

    <nav class="navbar">
        <a href="../buy/index.php">خرید</a>
        <a href="index.php">فروش</a>
        <a href="../rent/index.php">اجاره</a>
    </nav>

    <div class="icons">
        <div id="menu-bars" class="fas fa-bars"></div>
        <a href="#" class="fas fa-user"></a>
    </div>

</header>






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