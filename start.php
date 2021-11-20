 
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/inicio.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
</head>
<body>
    <div class="contenedor">
        
        <div class="form">
            <div class="logo2">
                <img src="img/logo.jpg" width="170px">
            </div>
            <?php if(isset($_GET['login'])){?>
                        <form action="#">
                            <div class="campo"> <i class="fas fa-user"></i> <input type="text" placeholder="Username" id="campo1"></div>
                            <div class="campo"> <i class="fas fa-lock"></i><input type="password" placeholder="Password" id="campo2"></div>
                        </form>
                        <div class="olvido">
                            <a href="#"><small>¿Olvidaste tu contraseña?"</small></a>
                        </div>
                        <a href="index.php" class="btn" id="iniciars">Sing in</a>
                        <a href="start.php?singup" class="btn btn2">Sing up</a>
            <?php }else if(isset($_GET['singup'])){?> 
                        <form action="#">
                            <div class="campo"> <i class="fas fa-user"></i> <input type="text" placeholder="Nombre"></div>
                            <div class="campo"> <i class="fas fa-user"></i> <input type="text" placeholder="Apellido"></div>
                            <div class="campo"><i class="far fa-envelope"></i><input type="text" placeholder="E-mail"></div>
                            <div class="campo"> <i class="fas fa-lock"></i><input type="password" placeholder="Password"></div>
                            <input type="checkbox" name="" id="check"><label for="check">Acepto los terminos y condiciones</label>
                        </form>
                        <a href="index.php" class="btn">Sing</a>
                <?php
            } ?>
        </div>
    </div>
</body>
</html>