<?php 
if(!isset($_GET['place'])){
    header('Location: index.php?places');
}
include_once('config/condb.php');
$id = $_GET['place'];
$consulta = 'SELECT * FROM lugares WHERE id = ?';
$sentencia = $conexion->prepare($consulta);
$sentencia->execute(array($id));
$resultado = $sentencia->fetch();
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
    <title>Walker</title>
</head>
<?php 
$nombre = $resultado['nombre'];
$descripcion = $resultado['descripcion'];
$direccion = $resultado['direccion'];
$iframe = $resultado['iframe'];
?>
<body>
    <?php include ('config/header.php') ?>
    <main class="main">
        <?php 
        include ('config/home.php') ;
        include ('config/about.php') ;
        ?> 

    <section class="section descripcion container">

        <?php include('config/swiper.php') ; ?>

        <h2 class="section__title">Hotel <?php echo $nombre ;?></h2>
        <div class="descripcion_text">
            <?php echo $descripcion;?>
        </div>
        <div class="p">
            <div>
                <b><i class="ri-map-pin-2-fill"></i>Direccion:</b> <?php echo $direccion;?><br> 
            </div>
        </div>

        <div class="mapa">
            <?php echo $iframe; ?>
        </div>
    </section>
    <?php include('config/mensaje.php') ; ?>
    </main>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>