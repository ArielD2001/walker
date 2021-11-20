<?php 
include('config/condb.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">

    <?php
        if(isset($_GET['restaurants'])){
            echo '<title>Walker - Restaurants</title>';
        }
        else if(isset($_GET['places'])){
            echo '<title>Walker - Places</title>';
        }
        else if(isset($_GET['hotels'])){
            echo '<title>Walker - Hotels</title>';
        }else{
            ?>
                <title>Walker</title>
            <?php
        }
    ?>
</head>
<body>
    <?php include('config/header.php'); ?>
    <main class="main">
        <?php 
        if(!isset($_GET['places']) && !isset($_GET['hotels']) && !isset($_GET['restaurants'])){
            ?>
                <section class="home" id="home">
                    <img src="img/home1.jpg" alt="" class="home__img">

                    <div class="home__container container grid">
                        <div class="home__data">
                            <span class="home__data-subtitle">Discover your place</span>
                            <h1 class="home__data-title">Explore The <br> <b>Cartagena<br> de Indias</b></h1>
                            <a href="#about" class="button">Explorar</a>

                        </div>

                        <div class="home__social">
                            <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                                <i class="ri-facebook-box-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                                <i class="ri-instagram-fill"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="home__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </div>

                        <div class="home__info">
                            <div>
                                <span class="home__info-title">5 best Hotels</span>
                                <a href="#places" class="button button--flex button--link home__info-button">
                                    More <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>

                            <div class="home__info-overlay">
                                <img src="img/home2.jpg" alt="" class="home__info-img">
                            </div>
                        </div>
                    </div>
                </section>
                <?php 
                include('config/about.php');
                include('config/lugares.php');
                include('config/video.php');
                include('config/hoteles.php') ;
                include('config/mensaje.php') ;
                include('config/restaurantes.php') ;
        }
        else 
        if(isset($_GET['places']) || isset($_GET['hotels']) || isset($_GET['restaurants'])){

                include('config/about.php');
            if(isset($_GET['hotels'])){
                include('config/hoteles.php');
            }
            else if(isset($_GET['places'])){
                include ('config/video.php');
                include('config/lugares_.php');
            }
            else if(isset($_GET['restaurants'])){
                include('config/restaurantes.php');
            }
                
                include('config/imagenes.php');
            }
        ?>                     
    </main>
   <script src="https://unpkg.com/scrollreveal"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>