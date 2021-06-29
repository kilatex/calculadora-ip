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
<body  class="calculadora">

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
      <h1 class="text-center mt-3 bg-primary text-white">Calculadora IP</h1>

    </div>
    
   
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>


<?php

  $adressp1 = (int)$_GET['first'];

  $adressp2 = (int)$_GET['second'];


  $adressp3 = (int)$_GET['third'];

  $adressp4 = (int)$_GET['fourth'];

  $bits = (int)$_GET['bits'];


  $subnet = pow(2,$bits);
  $bitsBin = decbin($bits);

  if($bits == 1){
    $bitsBin =  10000000;
  }
  if($bits == 2){
    $bitsBin =  11000000;
  }
  if($bits == 3){
    $bitsBin =  11100000;
  }
  if($bits == 4){
    $bitsBin =  11110000;
  }
  if($bits == 5){
    $bitsBin =  11111000;
  }
  if($bits == 6){
    $bitsBin =  11111100;
  }
  if($bits == 7){
    $bitsBin =  11111110;
  }

  if($bits == 8){
    $bitsBin =  11111111;
  }

  

  
 

  $adress = $adressp1.'.'.$adressp2.'.'.$adressp3.'.'.$adressp4;

  if($adressp1 >=0 && $adressp1 <=127){
      $typeClass = 'Clase A';
      $netMask = '255.0.0.0 = 8'; 
      $network = $adressp1.'.0.0.0';
      $hostMin = $adressp1.'.0.0.1';
      $hostMax =  $adressp1.'.255.255.254';
      $broadcast =  $adressp1.'.255.255.255';
      
      
      $maximo = bindec($bitsBin);
      $saltos = (int)($maximo/($subnet-1)-1);
      echo '<div class="row p-5">';
      echo '<h2> Clase = '.$typeClass.'  --- Cantidad de Bits adicionales '.$bits.'</h2>';
      echo '<h2> Dirección = '.$adress.' --- Cantidad de Sub Redes Obtenidas '.$subnet.'</h2>';

      echo '<div class="col-md-2  border m-3">';
        echo '<h2> Red 1</h2>';
        echo '<p> Network = '.$adressp1.'.0.0.0</p>';
        echo '<p> HostMin = '.$adressp1.'.0.0.1</p>';
        echo '<p> HostMax = '.$adressp1.'.'.($saltos).'.255.254</p>';
      echo '</div>';
        $saltos = $saltos+1;
        $saltos2 = ($saltos*2)-1;
        $saltos3= 0;

        if($bits <=8){
            for ($i=1; $i <$subnet; $i++) { 
              $saltos3 =  $saltos3 +$saltos;
              echo '<div class="col-md-2 border m-3">';
                echo '<h2> Red '.($i+1).'</h2>';
                echo '<p> Network = '.$adressp1.'.'.($saltos3).'.0.0</p>';
                echo '<p> HostMin = '.$adressp1.'.'.($saltos3) .'.0.1</p>';
                echo '<p> HostMax = '.$adressp1.'.'.$saltos2.'.255.254</p>';
                
                $saltos2 = $saltos2 + ($saltos);
              echo '</div>';
            }
        }
    
        echo '</div> "';

  }   


  if($adressp1 >127 && $adressp1 <=191){
      $typeClass = 'Clase B';
      $netMask = '255.255.0.0 = 16'; 
      $network = $adressp1.'.'.$adressp2.'.0.0';
      $hostMin= $adressp1.'.'.$adressp2.'.0.1';
      $hostMax =  $adressp1.'.'.$adressp2.'.255.254';
      $broadcast =  $adressp1.'.'.$adressp2.'.255.255';

      $maximo = bindec($bitsBin);
      $saltos = (int)($maximo/($subnet-1)-1);

      echo '<div class="row p-5">';
      echo '<h2> Clase = '.$typeClass.'  --- Cantidad de Bits adicionales '.$bits.'</h2>';
      echo '<h2> Dirección = '.$adress.' --- Cantidad de Sub Redes Obtenidas '.$subnet.'</h2>';

      
      echo '<div class="col-md-2  border m-3">';
          echo '<h2> Red 1</h2>';
          echo '<p> Network = '.$adressp1.'.'.$adressp2.'.0.0</p>';
          echo '<p> HostMin = '.$adressp1.'.'.$adressp2.'.0.1</p>';
          echo '<p> HostMax = '.$adressp1.'.'.$adressp2.'.'.($saltos).'.254</p>';

      echo '</div>';

      $saltos = $saltos+1;
      $saltos2 = ($saltos*2)-1;
      $saltos3= 0;
      
      if($bits <=8){
        for ($i=1; $i <$subnet; $i++) { 
          $saltos3 =  $saltos3 +$saltos;
          echo '<div class="col-md-2  border m-3">';
            echo '<h2> Red '.($i+1).'</h2>';
            echo '<p> Network = '.$adressp1.'.'.$adressp2.'.'.($saltos3).'.0</p>';
            echo '<p> HostMin =  '.$adressp1.'.'.$adressp2.'.'.($saltos3).'.1</p>';
            echo '<p> HostMax =  '.$adressp1.'.'.$adressp2.'.'.($saltos2).'.254</p>';
          echo '</div>';
          $saltos2 = $saltos2 + ($saltos);
        
        }
      }
  }   

  if($adressp1 >191 && $adressp1 <=223){

      $typeClass = 'Clase C';
      $netMask = '255.255.255.0 = 24'; 
      $network = $adressp1.'.'.$adressp2.'.'.$adressp3.'.0';
      $hostMin = $adressp1.'.'.$adressp2.'.'.$adressp3.'.1';
      $hostMax =  $adressp1.'.'.$adressp2.'.'.$adressp3.'.254';
      $broadcast =  $adressp1.'.'.$adressp2.'.'.$adressp3.'.255';

      $maximo = bindec($bitsBin);
      $saltos = (int)($maximo/($subnet-1)-2);

      echo '<div class="row p-5">';
      echo '<h2> Clase = '.$typeClass.'  --- Cantidad de Bits adicionales '.$bits.'</h2>';
      echo '<h2> Dirección = '.$adress.' --- Cantidad de Sub Redes Obtenidas '.$subnet.'</h2>';

      
      echo '<div class="col-md-2  border m-3">';
          echo '<h2> Red 1</h2>';
          echo '<p> Network = '.$network.'</p>';
          echo '<p> HostMin = '.$hostMin.'</p>';
          echo '<p> HostMax = '.$adressp1.'.'.$adressp2.'.'.$adressp3.'.'.($saltos).'</p>';

      echo '</div>';

      $saltos = $saltos+2;
      $saltos2 = ($saltos*2)-2;
      $saltos3= 1;
      
      if($bits <=8){
        for ($i=1; $i <$subnet; $i++) { 
          $saltos3 =  $saltos3 +$saltos;
          echo '<div class="col-md-2  border m-3">';
            echo '<h2> Red '.($i+1).'</h2>';
            echo '<p> Network = '.$adressp1.'.'.$adressp2.'.'.$adressp3.'.'.($saltos3-1).'</p>';
            echo '<p> HostMin =  '.$adressp1.'.'.$adressp2.'.'.$adressp3.'.'.($saltos3).'</p>';
            echo '<p> HostMax =  '.$adressp1.'.'.$adressp2.'.'.$adressp3.'.'.($saltos2).'</p>';
          echo '</div>';
          $saltos2 = $saltos2 + ($saltos);
        
        }
      }
  }   


      
    echo '<div class="row mb-5"> <div class="col-md-6 offset-md-4  ">'
          .'<a class="btn btn-lg  btn-primary" href="./calculadora.php">Volver a la Calculadora</a>'.
          '</div> </div>';
?>




