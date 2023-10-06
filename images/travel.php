<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    
  
  // Connecting to the Database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "travels";

  // Create a connection
  $conn = mysqli_connect($servername, $username, $password, $database);

    $sql = "INSERT INTO `travelform` (`name`, `email`, `number`, `subject`)
    VALUES ('$name', '$email', '$number', '$subject')";
    $result = mysqli_query($conn, $sql);
      
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travels</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Domine:wght@500&display=swap');

    :root {
        --orange: #ffa500;
    }

    * {
        margin: 0;
        padding: 0;
        text-transform: capitalize;
        text-decoration: none;
        transform: all .2s linear;
    }

    *::selection {
        background: var(--orange);
        color: white;
    }

    html {

        scroll-padding-top: 6rem;
        scroll-behavior: smooth;
    }

    header {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        background: #333;
        display: flex;
        align-items: center;
        justify-content: space-between;
        z-index: 1000;
        padding: 1rem 10px;
    }

    header .logo {
        font-size: 1.5rem;
        font-weight: bolder;
        color: white;
        text-transform: uppercase;
        padding-left: 40px;

    }

    header .logo span {
        color: #ffa500;
    }

    header .navbar a {
        color: white;
        font-size: 1.5rem;
        font-style: initial;
        margin: 0.9rem;
    }

    header .navbar a:hover {
        color: var(--orange);
    }

    header .icons i {
        color: white;
    }

    header .search-bar-container {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        padding: 5px 5px;
        background: #333;
        border-top: 1px solid #333;
        display: flex;
        align-items: center;
        z-index: 1001;

    }

    header .search-bar-container #search-bar {
        width: 100%;
        padding: 5px;
        text-transform: none;
        color: #333;
        font-size: 1rem;
        border-radius: 8px;
        border: 2px solid white;
        background-color: whitesmoke;
    }

    header .search-bar-container label {
        color: white;
        cursor: pointer;
        font-size: 2rem;
        margin-left: 1rem;
    }

    .login-form-container {
        top: 0;
        left: 0;
        z-index: 10000;
        height: 500px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #444;

    }

    .login-form-container form {
        margin: 2rem;
        padding: 1rem 1rem;
        font-size: 20px;
        border-radius: .5rem;
        background: whitesmoke;
        width: 30rem;
    }

    .login-form-container form h3 {
        font-size: 2rem;
        color: #444;
        text-transform: uppercase;
        text-align: center;
        padding: .8rem 0;
        font-family: 'Domine', serif;
    }

    .login-form-container form .box {
        width: 80%;
        padding: .5rem;
        font-size: .8rem;
        margin: 5px 0;
        border: 2px solid whitesmoke;
        border-radius: 8px;
        text-transform: none;
    }

    .login-form-container form .box:focus {
        border-color: var(--orange);
    }

    .login-form-container form .btn {
        padding: 5px;
       
        border-radius: 5px;
    }

    .login-form-container form p {
        padding: 5px 0;
        font-size: 15px;
        color: #333;
    }

    .login-form-container form a {
        color: var(--orange);
    }

    .btn:hover {
        background: rgba(255, 165, 0, .2);
        color: #ffa500;
    }

    .login-form-container #form-close {
        position: absolute;
        top: 2rem;
        right: 2rem;
        font-size: 2rem;
        color: white;
        cursor: pointer;
    }

    section {
        padding: 10px 5px;
    }

    .home {
        height: 700px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-flow: column;
        z-index: -1;
    }

    .home .content {
        text-align: center;
        position: absolute;
        top: 600px;
    }

    .home .content h3 {
        text-transform: uppercase;
        font-size: 28px;
        font-family: serif;
        text-shadow: 0.3rem 3rem rgba(0, 0, 0, .1);
    }

    .home .content p {
        padding: 5px 0;
        font-size: 20px;
        font-family: 'Domine', serif;
    }

    .home .content .btn {
        font-size: 25px;
        font-family: 'Domine', serif;
    }

    .home .video-container video {
        width: 100%;
        position: absolute;
        top: 80%;
        left: 0;
        z-index: -1;
    }

    .home .content .vid-btn {
        height: 1rem;
        width: 1rem;
        display: inline-block;
        border-radius: 50%;
        background: white;
        cursor: pointer;
        margin: 0 10px;
    }

    .heading span {
        font-size: 2rem;
        background: rgba(255, 165, 0, .2);
        color: var(--orange);
        border-radius: 8px;
        padding: 5px 5px;

    }

    .heading span .space {
        background: none;
    }

    /* book section start*/



    .book .row {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        padding: 10px 5px;
        gap: 1rem;
    }

    .book .row .image {
        flex: 1 1 10rem;

    }

    .book .row .image img {
        width: 600px;
        height: 400px;
    }

    .book .row form {
        flex: 1 1 10rem;
        padding: 1rem;
        box-shadow: 0 1rem 1rem rgba(0, 0, 0, .1);
        border-radius: 8px;
    }

    .book .row form .inputBox {
        padding: 10px 0;
    }

    .book .row form .inputBox input {
        width: 70%;
        padding: 10px;
        border: 2px solid rgba(0, 0, 0, .1);
        color: #333;
        border-radius: 8px;
        text-transform: none;
    }

    .book .row form .inputBox h3 {
        font-size: 20px;
        padding: 5px 0;
        color: #333;
        font-family: 'Domine', serif;
    }

    /* packages section */

    .packages .box-container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
        padding: 10px 0;
        margin: 2px 5px;

    }

    .packages .box-container .box {
        flex: 1 1 .5rem;
        border-radius: 8px;

    }

    .packages .box-container .box img {
        height: 300px;
        width: 350px;
        object-fit: cover;
    }

    .packages .box-container .box .content {
        padding: 10px;
    }

    .packages .box-container .box .content h3 {
        font-size: 20px;
        color: #333;
        font-family: 'Domine', serif;
    }

    .packages .box-container .box .content p {
        font-size: 15px;
        padding: 0 5px;
        color: #333;
        font-family: 'Domine', serif;
    }

    /* services section */

    .services .box-container {
        display: flex;
        flex-wrap: wrap;
        gap: .5rem;
    }

    .services .box-container .box {
        flex: 1 1 10rem;
        border-radius: 8px;
        padding: 10px;
        align-items: center;
    }

    .services .box-container .box h3 {
        font-size: 20px;
        color: #333;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .services .box-container .box p {
        font-size: 15px;
        color: #444;
        padding: 15px 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* gallery section css */

    .gallery .box-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 1rem;
        padding: 10px 0;
    }

    .gallery .box-container .box {
        overflow: hidden;
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
        border: 2px solid #ffa500;
        border-radius: 10px;
        height: 200px;
        width: 300px;
        position: relative;
    }

    .gallery .box-container .box img {
        height: 200px;
        width: 300px;
        object-fit: cover;
    }

    .gallery .box-container .box .content {
        position: absolute;
        top: 100%;
        left: 0;
        height: 100%;
        width: 100%;
        text-align: center;
        background: rgba(0, 0, 0, .7);
        padding: 10px;
        padding-top: 8px;
    }

    .gallery .box-container .box .content h3 {
        font-size: 20px;
        padding: 8px 0;
        font-style: initial;
        color: var(--orange);

    }

    .gallery .box-container .box .content p {
        font-size: 15px;
        padding: 8px 0;
        font-style: initial;
        color: white;
    }

    .gallery .box-container .box .content .btn {
        padding: 5px 3px;
        border: 2px solid black;
        border-radius: 8px;
        color: #ffa500;

    }

    .gallery .box-container .box:hover .content {
        top: 0;
    }

    /* contact section css */

    .contact .row {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        padding: 10px;
        align-items: center;
    }

    .contact .row .image {
        flex: 1 1 20rem;
    }

    .contact .row .image img {
        padding: 10px;
        height: 400px;
        width: 600px;
    }

    .contact .row form {
        flex: 1 1 20rem;
        padding: 10px;
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
        border-radius: 8px;

    }

    .contact .row form .inputBox {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .contact .row form .inputBox input {
        width: 250px;
        margin: 10px 0;
        padding: 8px;
        font-size: 15px;
        color: #333;
        border-radius: 8px;
        background-color: whitesmoke;
        border: 1.5px solid #ffa500;
        text-transform: none;
        font-style: initial;
    }

    .contact .row form textarea {
        height: 150px;
        width: 500px;
        resize: none;
        background-color: whitesmoke;
        border-radius: 8px;
        font-size: 20px;
        border: 1.5px solid #ffa500;
        font-style: initial;
    }

    .btn {
        padding: 5px;
        border: 2px solid #ffa500;
        border-radius: 5px;
    }

    /* footer section css */

    .footer {
        background: #333;
    }

    .footer .box-container {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .footer .box-container .box {
        padding: 7px 0;
        flex: 1 1 10rem;
    }

    .footer .box-container .box h3 {
        font-size: 18px;
        padding: 8px;
        font-style: italic;
        color: white;
    }

    .footer .box-container .box p {
        font-size: 18px;
        padding: 8px;
        font-style: italic;
        color: white;
    }

    .footer .box-container .box a {
        display: block;
        font-size: 18px;
        font-style: italic;
        color: white;
    }

    .footer .box-container .box a:hover {
        color: #ffa500;
        text-decoration: underline;
    }

    .footer .credit {
        text-align: center;
        padding: 10px 8x;
        margin-top: 10px;
        font-size: 30px;
        color: white;
        font-style: italic;
    }

    .footer .credit span {
        color: #ffa500;
        font-style: italic;
        font-size: 25px;
    }

    nav .fa {
        display: none;
    }

    nav .fa-bars {
        display: none;
    }


    /* media query start */


    @media (max-width: 700px) {

        .nav-links {
            position: fixed;
            background: rgb(46, 45, 45);
            height: 200vh;
            width: 300px;
            top: 0;
            right: -300px;
            text-align: left;
            z-index: 2;
            transition: 1s;
        }

        nav .fa {
            display: block;
            color: #fff;
            margin: 10px;
            cursor: pointer;
        }

        nav .fa {
            display: block;
            color: #fff;
            margin: 10px;
            cursor: pointer;
        }

        nav .fa img {
            width: 20px;
            color: #fff;
        }

        .nav-links ul {
            padding: 30px;
        }

        nav .fa-bars {
            display: block;
            color: #fff;
            margin: 0;
            align-items: flex-end;
            justify-content: end;
            cursor: pointer;
        }

        nav .fa-bars img {
            width: 40px;
            height: 40px;
            align-items: center;
            position: absolute;
            right: 50px;
            top: 12px;

        }

        header .navbar a {
            display: flex;
            color: white;
            font-size: 30px;
            font-family: sans-serif;
            margin: 5px 35px;
            padding: 20px 50px;
        }

        header .logo {
            font-size: 35px;
            font-weight: bolder;
            color: white;
            text-transform: uppercase;
            padding-left: 40px;

        }



        header .search-bar-container {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            padding: 5px 5px;
            border-top: 1px solid #333;
            display: flex;
            align-items: center;
            z-index: 1001;

        }

        header .search-bar-container #search-bar {
            width: 50%;
            padding: 5px;
            text-transform: none;
            font-size: 1rem;
            border-radius: 8px;
            border: 2px solid white;
            background-color: whitesmoke;
        }

        .login-form-container {
            top: 0;
            left: 0;
            z-index: 10000;
            height: 470px;
            width: 650px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #444;

        }

        .home {
            height: 370px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-flow: column;
            z-index: -1;
        }

        .home .video-container video {
            width: 650px;
            position: absolute;
            top: 56%;
            left: 0;
            z-index: -1;
        }

        .home .content {
            text-align: center;
            position: absolute;
            top: 524px;
            left: 182px;
            width: 210px;
        }

        section {
            padding: 10px 14px;
        }

        .packages .box-container {
            justify-content: center;
            align-items: center;
            gap: 1rem;
            padding: 10px 0;
            margin: 2px 5px;

        }

        .packages .box-container .box {
            width: 250px;
        }

        .packages .box-container .box img {
            height: 500px;
            width: 510px;
            object-fit: cover;
            padding: 10px 30px;
            margin: 5px 14px;
        }

        .packages .box-container .box .content {
            padding: 10px 40px;
        }

        .packages .box-container .box .content h3 {
            font-size: 30px;
            padding: 0 5px;
            color: #333;
            font-family: 'Domine', serif;
        }



        .packages .box-container .box .content p {
            font-size: 22px;
            padding: 0 5px;
            color: #333;
            font-family: 'Domine', serif;
        }

        .services .box-container {
            display: inline-block;
            gap: 0.5rem;
            width: 550px;
            padding: 30px 35px;
            align-items: center;

        }

        .services .box-container .box {
            flex: 1 1 10rem;
            border-radius: 8px;
            padding: 5px 15px;
            align-items: center;
        }

        .gallery .box-container {
            display: inline-flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            padding: 25px 35px;
            width: 550px;
        }

        .gallery .box-container .box {
            height: 350px;
            width: 500px;
        }

        .gallery .box-container .box img {
            height: 350px;
            width: 500px;
            object-fit: cover;
        }

        .contact .row .image img {
            padding: 10px;
            height: 400px;
            width: 585px;
        }

        .footer {
            background: #333;
            width: 600px;
            padding: 5px 25px;
        }

        .footer .box-container .box {
            padding: 8px 34px;
            flex: 1 1 10rem;

        }
    }

    @media (max-width: 380px) {
        .home .video-container video {
            width: 650px;
            position: absolute;
            top: 75%;
            left: 0;
            z-index: -1;
        }
    }
</style>







<body>


    <header>

        <a href="#" class="logo"><span>T</span>ravel</a>
        <nav class="navbar">
            <div class="nav-links" id="navLinks">
                <i class="fa fa-time" aria-hidden="true" onclick="hideMenu()"><img src="icons8-close-30.png" alt=""></i>
                <a href="#home">home</a>
                <a href="#book">book</a>
                <a href="#packages">packages</a>
                <a href="#services">services</a>
                <a href="#gallery">gallery</a>
                <a href="#contact">contact</a>
            </div>

            <i class="fa-bars" onclick="showMenu()"><img src="menu-icon.png" alt=""></i>

        </nav>

        

    </header>


    <div class="login-form-container">

        <form action="">
            <h3>login</h3>
            <input type="email" class="box" placeholder="Enter Your Email ID">
            <input type="password" class="box" placeholder="Enter Your Password">
            <input type="submit" value="login now" class="btn">
            <input type="checkbox" id="remember">
            <p>forget password? <a href="#">check here</a></p>
        </form>

    </div>
    

    <section class="home" id="home">

        <div class="content">
            <h3>Adventure is worthwhile</h3>
            <p>Dicover new places with us, Adventure more</p>
        </div>

        <div class="controls">
            <span class="vid-btn" data-src="video travel1.mp4"></span>
        </div>

        <div class="video-container">
            <video src="video travel1.mp4" id="video-slider" loop autoplay muted></video>
        </div>

    </section>

    <section class="book" id="book">
        <br>
        <h1 class="heading">
            <span>B</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span class="space"></span>
            <span>N</span>
            <span>o</span>
            <span>w</span>
        </h1>
        <br>
        <div class="row">

            <div class="image">
                <img src="travel image.webp" alt="">
            </div>

            <form action="">

                <div class="inputBox">
                    <h3>Where To</h3>
                    <input type="text" placeholder="place name">
                </div>
                <div class="inputBox">
                    <h3>How Many</h3>
                    <input type="number" placeholder="number of guests">
                </div>
                <div class="inputBox">
                    <h3>Arrivals</h3>
                    <input type="date" placeholder="place name">
                </div>
                <input type="submit" class="btn" value="book now">

            </form>

        </div>

    </section>

    <section class="packages" id="packages">
        <br>
        <h1 class="heading">
            <span>P</span>
            <span>a</span>
            <span>c</span>
            <span>k</span>
            <span>a</span>
            <span>g</span>
            <span>e</span>
            <span>s</span>
        </h1>
        <br>
        <div class="box-container">

            <div class="box">
                <img src="travel image1.jpeg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-market-alt"></i>Mumbai</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, quidem.</p>
                    <div class="price"> $90.00 <span>$120.00</span></div>
                    

                </div>

            </div>

            <div class="box">
                <img src="travel image3.jpg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-market-alt"></i>Mumbai</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, quidem.</p>
                    <div class="price"> $90.00 <span>$120.00</span></div>
                    
                </div>

            </div>

            <div class="box">
                <img src="travel image4.jpg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-market-alt"></i>Mumbai</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, quidem.</p>
                    <div class="price"> $90.00 <span>$120.00</span></div>
                    
                </div>
            </div>

            <div class="box">
                <img src="travel image5.jpeg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-market-alt"></i>Mumbai</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, quidem.</p>
                    <div class="price"> $90.00 <span>$120.00</span></div>
                    
                </div>

            </div>


            <div class="box">
                <img src="travel image6.jpeg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-market-alt"></i>Mumbai</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, quidem.</p>
                    <div class="price"> $90.00 <span>$120.00</span></div>
                    
                </div>
            </div>

            <div class="box">
                <img src="travel image8.jpeg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-market-alt"></i>Mumbai</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, quidem.</p>
                    <div class="price"> $90.00 <span>$120.00</span></div>
                    
                </div>

            </div>

        </div>



    </section>



    <section class="services" id="services">

        <h1 class="heading">
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-hotel"><img src="apple image1.png" alt="" height="50px" width="80px"></i>
                <h3>Affordable Hotels</h3>
                <p>Today, the majority of the food energy required by the ever-increasing population of the world is
                    supplied by the industrial food industry, which produces food with intensive agriculture and
                    distributes it through complex food processing and food distribution systems.</p>
            </div>

            <div class="box">
                <i class="fas fa-hotel"><img src="food logo.png" alt="" height="60px" width="100px"></i>
                <h3>Food and Drinks</h3>
                <p>Food is organic material (cf. substances) consumed to provide nutritional support for an organism.
                    Food is usually of plant, animal or fungal origin, and contains essential nutrients, such as
                    carbohydrates, fats, proteins, vitamins, or minerals.</p>
            </div>

            <div class="box">
                <i class="fas fa-hotel"><img src="safty logo.jpg" alt="" height="70px" width="100px"></i>
                <h3>Safty Guide</h3>
                <p>Safety is the state of being "safe", the condition of being protected from harm or other danger.
                    Safety can also refer to the control of recognized hazards in order to achieve an acceptable level
                    of risk.</p>
            </div>

            <div class="box">
                <i class="fas fa-hotel"><img src="travel logo.png" alt="" height="70px" width="100px"></i>
                <h3>Fastest Travel</h3>
                <p>Travel is the movement of people between distant geographical locations. Travel can be done by foot,
                    bicycle, automobile, train, boat, bus, airplane, ship or other means, with or without luggage, and
                    can be one way or round trip.[1] Travel can also include relatively short stays between successive
                    movements, as in the case of tourism..</p>
            </div>

            <div class="box">
                <i class="fas fa-hotel"><img src="add logo.jpg" alt="" height="70px" width="100px"></i>
                <h3>Addventure</h3>
                <p>An adventure is an exciting experience or undertaking that is typically bold, sometimes risky.[1]
                    Adventures may be activities with some potential for physical danger such as traveling, exploring,
                    skydiving, mountain climbing, scuba diving, river rafting or participating in extreme sports.</p>
            </div>
        </div>

    </section>

    <section class="gallery" id="gallery">

        <h1 class="heading">
            <span>G</span>
            <span>a</span>
            <span>l</span>
            <span>l</span>
            <span>e</span>
            <span>r</span>
            <span>y</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <img src="gallery5.jpeg" alt="">
                <div class="content">
                    <h3>Taj Mahal</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, molestiae.</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>
            <div class="box">
                <img src="gallery2.jpeg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, molestiae.</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>

            <div class="box">
                <img src="gallery3.jpeg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, molestiae.</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>
            <div class="box">
                <img src="gallery4.jpeg" alt="">
                <div class="content">
                    <h3>Goa Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, molestiae.</p>
                    <a href="#" class="btn">See More</a>>
                </div>
            </div>

            <div class="box">
                <img src="gallery6.jpeg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, molestiae.</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>

            <div class="box">
                <img src="gallery7.jpg" alt="">
                <div class="content">
                    <h3>kolkata Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, molestiae.</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>

            <div class="box">
                <img src="gallery8.jpg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, molestiae.</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>

            <div class="box">
                <img src="gallery9.jpeg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, molestiae.</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>

            <div class="box">
                <img src="gallery10.jpeg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, molestiae.</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>

            <div class="box">
                <img src="gallery1.jpeg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, molestiae.</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>

            <div class="box">
                <img src="travel image5.jpeg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, molestiae.</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>


        </div>

    </section>

    <section class="contact" id="contact">

        <h1 class="heading">
            <span>C</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>
        </h1>

        <div class="row">
            <div class="image">
                <img src="contact image.jpeg" alt="">

            </div>

            <form action="">
                <div class="inputBox">
                    <input type="text" name="name" placeholder="  Enter Your Name">
                    <input type="email" name="email" id="" placeholder="  Enter Your Email">
                </div>
                <div class="inputBox">
                    <input type="number" name="number" placeholder=" Enter Your Contact Number ">
                    <input type="text" name="subject" placeholder="  Subject">
                </div>
                <textarea placeholder="  Sent Message......." name="" id="" cols="30" rows="10"></textarea>
                <input type="submit" class="btn" placeholder=" Sent Message">
            </form>

        </div>

    </section>



    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>About Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, voluptates? Laudantium magni expedita
                    dolores alias, eum distinctio. Iure, delectus itaque?</p>

            </div>

            <div class="box">
                <h3>Branch Locations</h3>
                <a href="#">India</a>
                <a href="#">USA</a>
                <a href="#">Londan</a>
            </div>

            <div class="box">
                <h3>Contact Us</h3>
                <a href="https://www.facebook.com/login/">facebook</a>
                <a href="https://www.instagram.com/accounts/login/">Instagram</a>
                <a href="https://twitter.com/">twitter</a>
            </div>

            <div class="box">
                <h3>Quick Links</h3>
                <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#packagers">packages</a>
                <a href="#services">services</a>
                <a href="#gallery">gallery</a>
                <a href="#contact">contact</a>
            </div>

        </div>

        <h1 class="credit"> Created By <span>Mr . DV Designer</span> All Right reserved</h1>

    </section>

    <script src="js/script.js"></script>

    <script>


        var navLinks = document.getElementById("navLinks")

        function hideMenu() {
            navLinks.style.right = "-300px";
        }

        function showMenu() {
            navLinks.style.right = "0";

        }

        let account = document.querySelector('.login-form-container');

        document.querySelector('#user-btn').onclick = () => {
            account.classList.add('active');
        }

        document.querySelector('#close-account').onclick = () => {
            account.classList.remove('active');
        }



    </script>


</body>

</html>