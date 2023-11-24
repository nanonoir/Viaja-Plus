<?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "plus-viaje";

       
        $conn = new mysqli($servername, $username, $password, $database);

       
        if ($conn->connect_error) {
            die("Error al conectar a la base de datos: " . $conn->connect_error);
        }

        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.cdnfonts.com/css/tt-commons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;700&family=Sofia+Sans+Condensed:wght@700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

                

    <title>ViajaPlus</title>
</head>
<body>

    <header>
        <a class="logo" href="index.html">
            <img src="img/logo.png" width="150px" alt="">
        </a>
        

        <div class="botones">
            <b id="sobre-nosotros">Sobre Nosotros</b>
            <a class="button1" href="contacto.html">Contacto</a>
        </div>

    </header>
    <div class="row">
 
        <div class="contenedor-puestos1">
            <h1>¿Quiénes somos? Conoce más acerca de nosotros</h1>
            <p>¡Somos ViajaPlus, tu socio de confianza en el emocionante mundo de los viajes en ómnibus! En ViajaPlus, nos definimos por nuestra pasión por conectar personas con experiencias inolvidables, y lo hacemos a través de un servicio de compra de pasajes que simplifica y transforma tu manera de viajar.<br><br>
        
            En esencia, somos mucho más que una plataforma de venta de pasajes; somos tus aliados desde el momento en que comienzas a planificar tu viaje. ¿Quiénes somos? Somos un equipo dedicado, comprometido en hacer que cada aspecto de tu experiencia de viaje sea excepcional. Nos esforzamos por ofrecerte un servicio amigable y personalizado que va más allá de lo convencional, creando una conexión genuina contigo, nuestro valioso viajero.<br><br>
        
            En ViajaPlus, nos enorgullece ofrecer una amplia gama de opciones de destinos, horarios y servicios de ómnibus, todo en un solo lugar. Queremos que la planificación de tu viaje sea emocionante y sin complicaciones, desde la comodidad de tu hogar. Para nosotros, la accesibilidad es clave, ya sea que estés planeando un viaje espontáneo de fin de semana o una aventura más elaborada.<br><br>
        
            Entendemos que viajar no solo se trata de llegar a un destino, sino del viaje en sí. Así que, ¿quiénes somos? Somos tu puerta de entrada a nuevas experiencias, tu compañero de viaje en cada aventura. ViajaPlus está aquí para hacerte descubrir la emoción en cada paso del camino. ¡Bienvenido a la familia ViajaPlus, donde tu próxima gran aventura comienza!</p>
        </div>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</body>

<script>
    document.getElementById('sobre-nosotros').addEventListener('click', function() {
        window.location.href = 'about.html';
    });
</script>

</html>