<?php
//Consulta 1


if(isset($_GET['hotels'])){
    $consulta1 = 'SELECT * FROM hoteles ORDER BY id DESC';
}else{
    $consulta1 = 'SELECT * FROM hoteles ORDER BY id DESC LIMIT 0, 4';
}
$sentencia1 = $conexion->prepare($consulta1);
$sentencia1->execute();
$resultado1= $sentencia1->fetchAll();?>
<section class="place section" id="places">
    <h2 class="section__title">Choose Your Hotels</h2>
    <div class="contenedor_hoteles place__container container">
<?php 
        foreach($resultado1 as $resultado){
            ?>                      
                 <div class="place__card">
                        <img src="data:image/png;base64, <?php echo base64_encode($resultado['foto_perfil']); ?>" draggable="false" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number"><?php  echo $resultado['calificacion'] ;?></span>
                            </span>
                            <div class="place__data">
                                <h3 class="place__title"><?php echo $resultado['nombre'] ;?></h3>
                                <span class="place__price"> <?php echo $resultado['precio'] ;?></span>
                            </div>
                        </div>
                           <a href="hotels.php?hotel=<?php echo $resultado['id'] ;?>" class="button button--flex place__button"><i class="ri-arrow-right-line"></i></a>
                    </div>
            <?php    
        }
    ?>
    </div>
        <?php 
            if(isset($_GET['hotels'])){
                include('config/mensaje.php');
            }else{
                
            
        ?>
            <div class="vermas-discover" id="mensaje">
                <a href="index.php?hotels">see more</a>
            </div>
        <?php }?>
</section>