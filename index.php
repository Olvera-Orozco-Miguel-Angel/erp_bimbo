<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,700;1,400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9eecf96b99.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="container">
        <nav class="menu_bar desing_menuBar">
            <div>
                <h1>ERP DE BIMBO</h1>
            </div>
            <div>
                <div class="desing">
                    <a href="">Inicio Sesion</a>
                    <a href="">Contacto</a>
                    <a href="./Inteligencia_Negocios/index.html">Inteligencia de Negocios</a>

                </div>
            </div>


        </nav>
        <div class="header_grid">

            <div>

               <h2> Inicia Sesión en mi aplicación</h2>
                
                  <p class="mensaje">  Si aun no tienes una cuenta
                 puedes registrate.... <a href="">Aquí</a></p>
                <picture>
                    <img class='imagen2' src="assets/illustration-2.png" alt="">
                </picture>
            </div>
            
            <picture>
                <img class='imagen1' src="assets/illustration-1.png" alt="">
            </picture>
            <div>
               <form action="verificacion_Usuario.php" class="flex_login" method="post">
                    <input type="text"  name="nombreUsario" placeholder="Ingrese id Empleado">
                    <input type="password"  placeholder="Ingrese contraseña"   name="contrasena">
                    <input type="submit" class="submit" value="Log in">
                </form>
            </div>
        </div> <!-- aqui termina el contendor padre!-->
    </header>
</body>

</html>