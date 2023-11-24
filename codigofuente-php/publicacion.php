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
    <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="jsPDF/dist/jspdf.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

                

    <title>Viaje Corrientes-Chaco</title>
</head>
<body>
    <div class="background">
    </div>
    <header>
        <div class="logo">
            <a href="index.html" class="logo">
                <img src="img/logo.png" width="150px" alt = "">
            </a>
        </div>
        

        <div class="botones">
            <b id="sobre-nosotros">Sobre Nosotros</b>
            <a class="button1" href="contacto.html">Contacto</a>
        </div>

    </header>

    <div class="contenedor"> 
        <div class="brand">
        </div>
        <div class="contenedor-filtros">
            <div class="filtros1">
                <h2 class="title21">Viaje de Corrientes (Capital) a Chaco (Resistencia)
                </h2>
                <div class="tipofiltros">
                    <h3 class="tit">Viaja comadamente con nuestro servicio de transporte ViajaPlus</h3>
                    <a class="ar">Duración del viaje: 50-60 minutos<br>
                        Punto de Salida: Terminal de Corrientes (Capital) <br>
                        Punto de Arribo: Terminal Chaco (Resistencia) <br>
                        Horario de Salida: 19hs <br>
                        Horario de Arribo: 20hs <br> 
                        Valor del Pasaje: $9.000 ARS <br> </a>
                    <a id="solicitarPasajeBtn" class="submit">Solicitar Pasaje</a>  
                </div>      
            </div>

            <div id="ventanaEmergente" class="ventana-emergente">
                <form class="formvent">
                    <!-- Contenido del formulario aquí -->
                    <input type="text" id="nombre" class="input" placeholder="Nombre">
                    <input type="text" id="apellido" class="input" placeholder="Apellido">
                    <input type="text" id="dni" class="input" placeholder="DNI">
                    <select id="clase" class="input">
                        <option value="">Selecciona una Clase</option>
                        <option value="Ejecutiva">Ejecutiva</option>
                        <option value="Común">Común</option>
                    </select>
                    <select id="categoria" class="input">
                        <option value="">Seleccione una Categoria</option>
                        <option value="Cama">Cama</option>
                        <option value="Semi-cama">Semi-cama</option>
                        <option value="Común">Común</option>
                    </select>
                    <select id="numeroButaca" class="input">
                        <option value="">Selecciona un Número de Butaca</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                    </select>
                    <button id="botonConfirmar" type="button" class="submit">Confirmar Pasaje</button>
                </form>
            </div>

            <div id="ventanaConfirmacion" class="ventana-emergente">
                <p>Tu pasaje se ha reservado con éxito. Ahora solamente debes pasar por Tesorería con el pdf que te hemos brindado y abonar el valor correspondiente el mismo día del viaje en tu terminal correspondiente.</p>
                <button id="botonCerrarConfirmacion" type="button" class="submit">Cerrar</button>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var botonSolicitarPasaje = document.getElementById('solicitarPasajeBtn');
                    var ventanaEmergente = document.getElementById('ventanaEmergente');
                    var ventanaConfirmacion = document.getElementById('ventanaConfirmacion');

                    botonSolicitarPasaje.addEventListener('click', function () {
                        // Muestra la primera ventana emergente
                        ventanaEmergente.style.display = 'block';
                    });

                    var botonConfirmar = document.getElementById('botonConfirmar');
                    botonConfirmar.addEventListener('click', async function () {
                        // Obtén los valores del formulario
                        var nombre = document.getElementById('nombre').value;
                        var apellido = document.getElementById('apellido').value;
                        var dni = document.getElementById('dni').value;
                        var numeroButaca = document.getElementById('numeroButaca').value;
                        var clase = document.getElementById('clase').value;
                        var categoria = document.getElementById('categoria').value;

                        // Crear un nuevo documento PDF
                        var pdf = new jsPDF();

                        // Agregar contenido al PDF
                        pdf.text(`--- Documento de Pasaje en Ómnibus ---`, 10, 10);
                        pdf.text(`Nombre y Apellido: ${nombre} ${apellido}`, 10, 20);
                        pdf.text(`DNI: ${dni}`, 10, 30);
                        pdf.text(`Número de Butaca: ${numeroButaca}`, 10, 40);
                        pdf.text(`Clase: ${clase}`, 10, 50);
                        pdf.text(`Categoría: ${categoria}`, 10, 60);
                        pdf.text(`Valor del Pasaje: $9.000 ARS`, 10, 70);
                        pdf.text(`--- Detalles del Viaje ---`, 10, 80);
                        pdf.text(`Fecha de Viaje: 12 de Diciembre (09/12)`, 10, 90);
                        pdf.text(`Hora de Salida: 19:00hs`, 10, 100);
                        pdf.text(`Hora de Arribo: 20:00hs`, 10, 110);
                        pdf.text(`Destino: Resistencia, Chaco`, 10, 120);
                        pdf.text(`Origen: Corrientes (Capital)`, 10, 130);
                        pdf.text(`--- Instrucciones y Notas ---`, 10, 140);

                        // Modifica estas líneas
                        var instruccion1 = `1. Antes de abordar, por favor, pase por Tesorería y abone el monto correspondiente al valor de su pasaje.`;
                        var instruccion2 = `2. Presente este documento junto con su identificación al abordar el ómnibus.`;
                        var instruccion3 = `3. La butaca asignada es ${numeroButaca}. Asegúrese de ocupar la butaca correspondiente.`;
                        var instruccion4 = `4. La clase del ómnibus es ${clase}, y la categoría del pasaje es ${categoria}.`;
                        var instruccion5 = `5. Recuerde verificar la fecha, hora, destino y origen del viaje.`;
                        var instruccion6 = `6. En caso de cualquier inconveniente, comuníquese con el personal de la terminal.`;

                        // Usa splitTextToSize para dividir el texto en líneas
                        var instruccion1Lines = pdf.splitTextToSize(instruccion1, 190); // Ajusta según sea necesario
                        var instruccion2Lines = pdf.splitTextToSize(instruccion2, 190); // Ajusta según sea necesario
                        var instruccion3Lines = pdf.splitTextToSize(instruccion3, 190); // Ajusta según sea necesario
                        var instruccion4Lines = pdf.splitTextToSize(instruccion4, 190); // Ajusta según sea necesario
                        var instruccion5Lines = pdf.splitTextToSize(instruccion5, 190); // Ajusta según sea necesario
                        var instruccion6Lines = pdf.splitTextToSize(instruccion6, 190); // Ajusta según sea necesario

                        pdf.text(instruccion1Lines, 10, 150);
                        pdf.text(instruccion2Lines, 10, 170);
                        pdf.text(instruccion3Lines, 10, 190);
                        pdf.text(instruccion4Lines, 10, 210);
                        pdf.text(instruccion5Lines, 10, 230);
                        pdf.text(instruccion6Lines, 10, 250);

                        // Guardar el PDF
                        pdf.save('pasaje_omnibus.pdf');

                        // Cierra la primera ventana emergente
                        ventanaEmergente.style.display = 'none';
                        // Muestra la segunda ventana emergente
                        ventanaConfirmacion.style.display = 'block';
                    });

                    var botonCerrarConfirmacion = document.getElementById('botonCerrarConfirmacion');
                    botonCerrarConfirmacion.addEventListener('click', function () {
                        // Cierra la segunda ventana emergente
                        ventanaConfirmacion.style.display = 'none';
                    });
                });
            </script>

        </div>
    </div>
            
</body>

<script>
    document.getElementById('sobre-nosotros').addEventListener('click', function() {
        window.location.href = 'about.html';
    });
</script>


</html>

