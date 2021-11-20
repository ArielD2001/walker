<?php 

if(isset($_GET['hotels'])){
    $consulta = 'SELECT foto  FROM hoteles_fotos ORDER BY id_foto DESC LIMIT 0, 8';
}

else if(isset($_GET['places'])){
    $consulta = 'SELECT foto  FROM lugares_fotos ORDER BY id_foto DESC LIMIT 0, 8';
}

else if(isset($_GET['restaurants'])){
    $consulta = 'SELECT foto  FROM res_fotos ORDER BY id_foto DESC LIMIT 0, 8';
}
$sentencia = $conexion->prepare($consulta);
$sentencia ->execute();

$resultado1 = $sentencia->fetchAll();
?>
    <div class="container">
          <div class="grid imagenes_grid">
<?php
foreach ($resultado1 as $resultado) {
    ?>

        <div class="imagen_item">
            <img src="data:image/png;base64, <?php echo base64_encode($resultado['foto']); ?>" draggable="false" class="place__img">
        </div>

       

    
    
    <?php
}

?> 
    </div>
</div>