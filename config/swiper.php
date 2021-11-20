<?php

//Consulta 2
if(isset($_GET['place'])){
    $consulta2 = 'SELECT * FROM lugares_fotos WHERE id_lugar=?';
}
else if(isset($_GET['restaurant'])){
    $consulta2 = 'SELECT * FROM res_fotos WHERE id_restaurante=?';
}
else if(isset($_GET['hotel'])){
    $consulta2 = 'SELECT * FROM hoteles_fotos WHERE id_hotel =?';
}

$sentencia2 = $conexion->prepare($consulta2);
$sentencia2->execute(array($id));
$resultado2= $sentencia2->fetchAll();

?>

<section class="discover section" id="discover">
                
                <div class="discover__container container swiper-container">
                    <div class="swiper-wrapper">
                    <?php foreach($resultado2 as $resultado){ ?>

                        <div class="discover__card swiper-slide">
                        <img src="data:image/png;base64, <?php echo base64_encode($resultado['foto']); ?>" class="discover__img" draggable="false">
                        </div>

                    <?php } ?>
                    </div>
                </div>
              
</section>