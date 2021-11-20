<?php
//Consulta 3
if(isset($_GET['restaurants'])){
    $consulta3 = 'SELECT * FROM restaurantes ORDER BY id DESC';
}else{
    $consulta3 = 'SELECT * FROM restaurantes ORDER BY id DESC LIMIT 0, 4';
}
$sentencia3 = $conexion->prepare($consulta3);
$sentencia3->execute();
$resultado3= $sentencia3->fetchAll();
 
?>
<section class="restaurants section " id="restaurants">
                <h2 class="section__title">  The best restaurants</h2>
            <?php 
            foreach($resultado3 as $resultado){ 
                ?>
                <div class="restaurant">
                    <div class="imagen">
                        <img src="data:image/png;base64, <?php echo base64_encode($resultado['foto_perfil']); ?>" draggable="false" class="place__img">
                        <div class="valorate">
                            <i class="ri-star-line place__rating-icon"></i>
                            <span><?php echo $resultado['calificacion'] ;?></span>
                        </div>
                     </div>
                     <div class="text__restaurant">
                         <h3 class="title">
                            Restaurant <?php echo $resultado['nombre'] ;?>
                         </h3>
                         <p class="text">
                            <b>Abierto:</b> <?php echo $resultado['abierto'] ;?> - <?php echo $resultado['cerrado'] ;?><br>
                            <b><?php echo $resultado['numero'] ;?> </b>Restaurantes en Cartagena
                            <br>
                            <p>Rango de precios</p>
                            <b><?php echo $resultado['precio'] ;?></b>
                            <br>
                            <p>Tipos de Comida</p>
                            <b><?php echo $resultado['comida'] ;?></b>
                         </p>
                         <a href="restaurants.php?restaurant=<?php echo $resultado['id'] ?>" class="button"><i class="ri-arrow-right-line"></i></a>
                     </div>
                 </div>
        <?php 
            } 
        ?>
</section>       
<?php include('config/mensaje.php')    ;