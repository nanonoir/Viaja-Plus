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

                

    <title>ViajaPlus > Solicitar Pasaje</title>
</head>
<body>

    <header>
        <a class="logo" href="index.php">
            <img src="img/logo.png" width="150px" alt="">
        </a>
        

        <div class="botones">
            <b id="sobre-nosotros">Sobre Nosotros</b>
            <a class="button1" href="contacto.php">Contacto</a>
        </div>

    </header>

    <div class="contenedor"> 
        <div class="brand">
        </div>   
    <form class="form">
        <div class="elem-group">
        <p class="title">Buscar Pasaje </p>
        <div class="elem-group inlined">
        <label class="label" for="adult">Pasajeros</label>
        <input class="input" type="number" id="adult" name="total_adults" placeholder="2" min="1" required>
        </div>
        <div class="elem-group inlined">
        <div class="elem-group inlined">
        <label class="label" for="checkin-date">Fecha de Partida</label>
        <input class="input" type="date" id="checkin-date" name="checkin" required>
        </div>
        <div class="elem-group inlined">
        <label class="label" for="checkout-date">Fecha de llegada</label>
        <input class="input" type="date" id="checkout-date" name="checkout" required>
        </div>
        <div class="elem-group">
            <label class="label" for="room-selection">Punto de Partida</label>
            <select class="input" id="room-selection" name="room_preference" required>
                <option value="">Selecciona una opción</option>
                <option value="connecting">Resistencia</option>
                <option value="adjoining">Barranqueras</option>
                <option value="connecting">Fontana</option>
                <option value="adjoining">Barranqueras</option>
                <option value="connecting">Juan Jose Castelli</option>
                <option value="adjoining">Charata</option>
                <option value="connecting">Machagai</option>
                <option value="adjoining">Las Breñas</option>
                <option value="adjoining">Corrientes</option>
                <option value="connecting">Bella Vista</option>
                <option value="adjoining">Paso de la Patria</option>
                <option value="connecting">San Cosme</option>
                <option value="adjoining">Santa Ana</option>
            </select>
            </div>
            <div class="elem-group">
                <label class="label" for="room-selection">Punto de Llegada</label>
                <select class="input" id="room-selection" name="room_preference" required>
                    <option value="">Selecciona una opción</option>
                    <option value="connecting">Resistencia</option>
                    <option value="adjoining">Barranqueras</option>
                    <option value="connecting">Fontana</option>
                    <option value="adjoining">Barranqueras</option>
                    <option value="connecting">Juan Jose Castelli</option>
                    <option value="adjoining">Charata</option>
                    <option value="connecting">Machagai</option>
                    <option value="adjoining">Las Breñas</option>
                    <option value="adjoining">Corrientes</option>
                    <option value="connecting">Bella Vista</option>
                    <option value="adjoining">Paso de la Patria</option>
                    <option value="connecting">San Cosme</option>
                    <option value="adjoining">Santa Ana</option>
                </select>
                </div>
        <hr>
        <!-- <div class="elem-group">
        <label class="label" for="message">Ingresa aqui cualquier detalle relevante acerca de tu viaje</label>
        <textarea class="input2" id="message" name="visitor_message" placeholder="Escribe la información aqui." required></textarea>
        </div> -->
        <a class = "submit" type="submit" href = "busqueda.php">Buscar Opciones</a>
    </form>
</body>

    <script>
        document.getElementById('sobre-nosotros').addEventListener('click', function() {
            window.location.href = 'about.php';
        });
    </script>

</html>