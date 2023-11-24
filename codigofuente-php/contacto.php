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

                

    <title>Viaja Plus > Contacto</title>
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

    <div class="card1">
        <span class="title">Entra en Contacto</span>
        <form class="form1">
          <div class="group1">
          <input placeholder="" type="text" required="">
          <label class = "input3" for="name">Nombre Completo</label>
          </div>
      <div class="group1">
          <input placeholder="" type="email" id="email" name="email" required="">
          <label class = "input3" for="email">Email de contacto</label>
          </div>
      <div class="group1">
          <textarea placeholder="" id="comment" name="comment" rows="5" required=""></textarea>
          <label class = "input3" for="comment">¿En que podemos ayudarte? (Deja un comentario)</label>
      </div>
          <button class = "submit">Enviar</button>
        </form>
      </div>
      
</body>

<script>
    document.getElementById('sobre-nosotros').addEventListener('click', function() {
        window.location.href = 'about.html';
    });
</script>

</html>