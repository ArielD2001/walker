<?php 

//Consulta 2
$consulta2 = 'SELECT * FROM lugares ORDER BY id DESC LIMIT 0, 9';
$sentencia2 = $conexion->prepare($consulta2);
$sentencia2->execute();
$resultado2= $sentencia2->fetchAll();
?>
<section class="section">
<h2 class="section__title">Discover the most <br> attractive places</h2>
                <p class="container">Jewels of places scattered between the magic of the colonial architectures of the Walled City and the paradisiacal beaches of the southern Caribbean islands.</p>
<div class ="container">
        <?php
        foreach($resultado2 as $resultado){
            ?>
    <div class="lugar place_card">
            <div class="imagen_lugar">
            <img src="data:image/png;base64, <?php echo base64_encode($resultado['foto_perfil']); ?>" class="discover__img" draggable="false">

            </div>
                        <h3><?php echo $resultado['nombre'];?></h3>
                        <p><?php echo $resultado['direccion'];?></p>
                        <a href="places.php?place=<?php echo $resultado['id'] ;?>" class="button button--flex place__button"><i class="ri-arrow-right-line"></i><a>
    </div>
            <?php
        }
        ?>

</div>
</section>

<?php
include('config/mensaje.php');
?>