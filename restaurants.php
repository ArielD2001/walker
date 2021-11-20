<?php 
if(!isset($_GET['restaurant'])){
    header('Location: index.php?restaurants');
}
include_once('config/condb.php');
$id = $_GET['restaurant'];
$consulta = 'SELECT * FROM restaurantes WHERE id = ?';
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
$calificacion = $resultado['calificacion'];
$descripcion = $resultado['descripcion'];
$direccion = $resultado['direccion'];
$iframe = $resultado['iframe'];
$precio = $resultado['precio'];
$numero = $resultado['numero'];
$abierto = $resultado['abierto'];
$cerrado = $resultado['cerrado'];
$comida = $resultado['comida'];
?>
<body>
    <?php include ('config/header.php') ?>
    <main class="main">
        <?php 
            
        ?>
    <?php include ('config/home.php') ?>
    <?php include ('config/about.php') ?>

    <section class="section descripcion container">

        <?php include('config/swiper.php') ; ?>

        <h2 class="section__title">Restaurant the <?php echo $nombre ;?></h2>
        <div class="descripcion_text">
            <?php echo $descripcion;?>
        </div>
        <div class="p">
            <div>
                <b><i class="ri-map-pin-2-fill"></i>Direccion: </b> <?php echo $direccion;?><br> 
            </div>
            <div>
                <b><i class="ri-star-fill"></i>Puntuacion: </b> <?php echo $calificacion;?><br> 
            </div>
            <div>
                <b><i class="ri-hotel-fill"></i> N. <?php echo $numero ;?></b> Restaurantes en Cartagena<br> 
            </div>
            <div class="div">
                <b><i class="ri-money-dollar-circle-line"></i>Rango de precios: </b><?php echo $precio;?><br>
            </div>
            <div class="div">
                <b><i class="ri-forbid-2-line"></i>Open: </b><?php echo $abierto.' - '.$cerrado;?><br>
            </div>
            <div class="div">
                <b><i class="ri-goblet-fill"></i>Comidas: </b><?php echo $comida;?><br>
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