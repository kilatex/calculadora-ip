<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <title>CALCULADORA IP</title>
</head>
<body class="calculadora">

    <div class="cotainer">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

                <div class="container-fluid">
                    <a class="navbar-brand" href="./index.html">Aplicación</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                            <li class="nav-item">
                                <a class="nav-link" href="./index.html">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./capas.html">Capas de TCP/IP</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="./ipv4.html">IPV4</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./ipv6.html">IPV6</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./calculadora.php">Calculadora</a>
                            </li>

                        </ul>

                    </div>
                </div>
                </nav>
        <h1 class="text-center mt-3 bg-primary text-white">Calculadora IP</h1>

        <div class="row">
            <div class="col-md-6 offset-md-3 mt-3">
                <form method="GET" action="./calculo.php">
                  
                    <div class="mb-3">
                        <p>Digite en cada casilla los numeros sin puntos</p>
                      <label for="exampleInputEmail1" class="form-label">Dirección</label>
                      <input type="number" name="first" min="0" placeholder="192" class="input-number" id="first" required> .
                      <input type="number" name="second" min="0" placeholder="168" class="input-number"  id="second" required> .
                      <input type="number" name="third"  min="0" placeholder="1" class="input-number"  id="third" required> .
                      <input type="number" name="fourth"  min="0" placeholder="0" class="input-number"  id="fourth" required> 
                    </div>

                    <div class="mb-2">
                      <label for="exampleInputPassword1" class="form-label">Cantidad de Bits adicionales para las SubRedes (de 1 A 8)</label>
                      <input type="number" name="bits" class="form-control text-black font-weight-bold" id="subnet" min="1" max="8" required>
                    </div>
                   

                    <button id="btn-calcular" class="btn btn-primary">Calcular</button>
                  </form>
            </div>

           
        </div>
       
    
    </div>
    
   
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>