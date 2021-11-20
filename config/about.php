          <section class="about section" id="about">
                <div class="about__container container grid">
                    <div class="about__data">
                        <h2 class="section__title about__title">More Information <br> About The Best Beaches</h2>
                        <p class="about__description">You can find the most beautiful and pleasant places at the best 
                            prices with special discounts, you choose the place we will guide you all the way to wait, get your 
                            place now.
                        </p>

                        <?php if(isset($_GET['hotel'])){
                            echo '
                        <a href="#" class="button">Reserve a Hotel</a>
                            
                            ';
                        }   else if(isset($_GET['place'])){
                            echo '
                        <a href="#" class="button">Reserve a Place</a>
                            
                            ';
                        }   else if(isset($_GET['restaurant'])){
                            echo '
                        <a href="#" class="button">Reserve a Restaurant</a>
                            
                            ';
                        } ?>
                    </div>
                    <div class="about__img">
                        <div class="about__img-overlay">
                            <img src="img/about1.jpg" alt="" class="about__img-one">
                        </div>

                        <div class="about__img-overlay">
                            <img src="img/about2.jpg" alt="" class="about__img-two">
                        </div>
                    </div>
                    <div class="about__img">
                         <div class="about__img-overlay">
                            <img src="img/about2.jpg" alt="" class="about__img-two">
                        </div>
                        <div class="about__img-overlay">
                            <img src="img/about1.jpg" alt="" class="about__img-one">
                        </div>
                    </div>
                </div>
            </section>
            <div class="anuncio">
                <div>
                    <b>Actualizacion sobre el COVID-19:</b> <span>estas son las medidas adicionales de salud y seguridad que estan tomando en estos establecimientos.</span> <a href="#mensaje">Leer más</a>
                </div>
            </div>