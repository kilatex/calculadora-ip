<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <title>TCP-IP</title>
</head>

<body>

    <div class="cotainer">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php">Aplicación</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                        <li class="nav-item">
                            <a class="nav-link" href="./index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./capas.php">Capas de TCP/IP</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="./ipv4.php">IPV4</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./ipv6.php">IPV6</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./calculadora.php">Calculadora</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
        <h1 class="text-center mt-3 bg-primary text-white">IP v4</h1>

        <div class="row mt-5">
            <div class="col-md-5 offset-md-1    bg-primary p-5 border rounded ">
                <h2 class="text-center">Direccionamiento IPv4</h2>
                <p class="text-center">El direccionamiento IPv4 es actualmente el protocolo de Internet que casi todos
                    utilizamos en nuestros hogares, ya que los ISP aún no han dado el salto al direccionamiento IPv6.
                    El protocolo IPv4 es uno de los protocolos fundamentales de Internet, ya que es el que identifica
                    los diferentes dispositivos conectados a la red. Una dirección IPv4 tiene 32 bits, por lo que
                    tenemos casi 4.300 millones de direcciones únicas, aunque muchas de ellas están reservadas para
                    tareas específicas, como por ejemplo los rangos de direccionamiento IP privado (LAN) que no son
                    enrutables a través de Internet. Una dirección IPv4 se representa normalmente en formato decimal
                    separado por puntos, los 32 bits están subdivididos en octetos de 8 bits cada uno.



                </p>
            </div>
            <div class="col-md-5  ">
                <img class="mt-3" src="./img/ipv4_logo.jpg" alt="">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-5 mt-4 offset-md-1">
                <img src="./img/./ipv4logo.png" class="" alt="">
            </div>
            <div class="col-md-5     bg-primary p-5 border rounded">
                <h2 class="text-center">¿Qué Utiliza el IPv4?</h2>
                <p class="text-center">El IPv4 utiliza direcciones de 32 bits que limitan el espacio de direcciones a 4
                    294 967 296 direcciones posibles.

                    El IPv4 (Protocolo de Internet versión 4) reserva bloques de direcciones especiales para redes
                    privadas (en total 16 777 216 direcciones, así como direcciones de multidifusión (268
                    435 456 direcciones).
                    En el diseño original de IPv4, una dirección IP se dividió en dos partes: el identificador de red era el octeto más significativo de la dirección, y por su parte, el identificador de host (anfitrión o huésped) era el resto de la dirección. Este último también fue llamado el campo de descanso. Esta estructura permitía un máximo de 256 identificadores de red, que rápidamente se encontró que eran inadecuados.





                </p>
            </div>
        </div>
       
        <div class="footer mt-5 mb-2 bg-primary pt-1">
            <p class="text-center fs-4">Santiago Maldonado CI: 29699795 PROYECTO PARA REDES</p>
        </div>
    </div>


    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>