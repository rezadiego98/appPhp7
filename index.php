<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo XA</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problema.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.php">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href="#">Otros Ejemplos Php7</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
  <h2>Problema: Determinar velocidad con que viaja el telescopio alrededor de la Tierra</h2>
  <p>Descripción:</p>
  <p>El telescopio hubbie se encuentra orbitando a 600km sobre la superficie de la Tierra. <br>
Si la masa de la Tierra es de 5.97x10 24KG y su radio ecuatorial es de 6 378km,<br>
      determina cual es la velocidad con que viaja el telescopio alrededor de la Tierra.<br>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
velocidad2 = Gmtierra/(Rtierra+d)n<br>
</section>
<section class="datos">
<h2>Datos:</h2>
   Gmtierra= 5.97E24 Kg. <br>
   Rtierra= 6378 Km.<br>
    d= 600km.<br>
</section>
<section class="calculos">
<h2>Solución</h2>
   <p>La velocidad con que viaja el telescopio alrededor de la Tierra es:<br>
    velocidad2 = 5.97E24 Kg. /(6378 Km.+600km.) <br>
   
</section>
<?php
     function calcula_velocidad(){
        $Gmtierra= 5.97E24;
        $radio= 6378e3;
        $d= 600;
        $velocidad2=$Gmtierra/($radio+$d) ;
        $velocidad= sqrt($velocidad2);
        return $velocidad;
     }
?>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<?php
 print "<h1> resultado: densidad = ".calcula_velocidad(). " kg/(kilometro)</h1>";
?>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2019
    </footer>
   </section>
</body>
</html>
