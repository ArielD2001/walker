<?php

//Consulta 2
$consulta2 = 'SELECT * FROM lugares ORDER BY id DESC LIMIT 0, 9';
$sentencia2 = $conexion->prepare($consulta2);
$sentencia2->execute();
$resultado2= $sentencia2->fetchAll();

?>

<section class="discover section" id="discover">
                <h2 class="section__title">Discover the most <br> attractive places</h2>
                <p class="container">Jewels of places scattered between the magic of the colonial architectures of the Walled City and the paradisiacal beaches of the southern Caribbean islands.</p>
                <div class="discover__container container swiper-container">
                    <div class="swiper-wrapper">
                    <?php foreach($resultado2 as $resultado){ ?>

                        <div class="discover__card swiper-slide">
                        <img src="data:image/png;base64, <?php echo base64_encode($resultado['foto_perfil']); ?>" class="discover__img" draggable="false">
                            <div class="discover__data">
                                <h2 class="discover__title"><?php echo $resultado['nombre'] ; ?></h2>
                                <span class="discover__description">18 tours available</span>
                            </div>
                        </div>

                    <?php } ?>
                    </div>
                    </div>
                <div class="vermas-discover">
                    <a href="index.php?places   ">see more</a>
                </div>
            </section>