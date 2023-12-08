<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo X__</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script>
        function calcular() {
            var masa = 18; // Toneladas
            var velocidadInicial = 36; // km/h
            var velocidadFinal = 72; // km/h
            var tiempo = 20; // segundos

            var deltaV = velocidadFinal - velocidadInicial;
            var aceleracion = deltaV / tiempo;
            var cambioMomentum = masa * aceleracion;
            var fuerza = masa * aceleracion;

            var resultadoElement = document.getElementById("resultadoA");
            resultadoElement.innerHTML = `<h1>Variación de Cantidad de Movimiento: ${cambioMomentum.toFixed(2)} toneladas km/h</h1>`;
            resultadoElement.innerHTML += `<h1>Fuerza Ejercida por el Motor: ${fuerza.toFixed(2)} toneladas de fuerza</h1>`;
        }

        // Llama a la función calcular() al cargar la página
        window.onload = calcular;
    </script>
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.html">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href=basicoPhp7.php>Básico Php7</a></li>
      </ul>
      </nav>
    </header>
    <section id="contenedor">
        <section  class="problema">
            <h2>Un camión de 18 toneladas pasa de 36 a 72 km/h en 20 s. ¿Cuánto varió su cantidad de movimiento?
            ¿Qué fuerza (supuesta constante) ejerció el motor?</h2>
            <p>Descripción:</p>
            <p>Las toneladas del camión pasan de 36 a 72 km/h en 20 s. <br>
            <p>Maria Fernanda cruz Dominguez 21090136</p>
        </section>
        <section class="formulas">
            <h2>Fórmulas</h2>
            F = ma<br>
            a = ΔV / T<br>
        </section>
        <section class="datos">
            <h2>Datos:</h2>
            M = 18 Ton. <br>
            V1 = 36 km/h.
            V2 = 72 km/h.
            T = 20s.
        </section>
        <section class="calculos">
            <h2>Solución</h2>
            <p>a) La cantidad que varió el movimiento es:</p>
        </section>
        <section class="resultado">
            <h2>Resultado:</h2>
            <div id="resultadoA"></div>
        </section>
    </section>
    <footer class="pie">
        Creative Commons versión 3.0 SciSoft 2023
    </footer>
   </section>
</body>
</html>
