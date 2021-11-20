


<section class="home" id="home">
                    <img src="data:image/png;base64, <?php echo base64_encode($resultado['foto_perfil']); ?>" alt="" class="home__img">

                    <div class="home__container container grid">
                        <div class="home__data">
                            <span class="home__data-subtitle">Discover your place</span>
                                <?php
                                if(isset($_GET['hotel'])){
                                    echo '
                                    <h1 class="home__data-title">Hotel<br> <b>'. $nombre .'</b></h1>
                                    
                                    ';
                                }else if(isset($_GET['place'])){
                                    echo '
                                    <h1 class="home__data-title">Place<br> <b>'. $nombre .'</b></h1>
                                    
                                    ';
                                }else if(isset($_GET['restaurant'])){
                                    echo '
                                    <h1 class="home__data-title">Restaurant<br> <b>'. $nombre .'</b></h1>
                                    
                                    ';
                                }

                                ?>
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
                                <a href="index.php#places" class="button button--flex button--link home__info-button">
                                    More <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>

                            <div class="home__info-overlay">
                                <img src="img/home2.jpg" alt="" class="home__info-img">
                            </div>
                        </div>
                    </div>
                </section>