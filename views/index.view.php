<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Customer Survey :)</title>
        <meta name="description" content="Esta es mi primer pagina web"/>
        <meta name="author" content="Mike"/>
        <meta name="keywords" content="Mi primer Blog, Cocina, Disenio, Desarrollo Web"/>
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="fontawesome/css/all.css">
    </head>
    <!-- Encuesta Canteiro Weddings -->
    <body>
        <!-- Div principal - contiene toda la estructura de la pagina -->
        <div class="agrupar">

            <!-- Header con logo -->     
            <header class="cabecera">
                <img class="logo" src="img/logo.jpg" alt="" >
            </header>

            <!-- Menu de navegación, solo muestra la linea gris. -->
            <nav class="menu">
                <ul>
                </ul>
            </nav>
            
            <!-- Inicia sección de Formulario completo -->
            <section class="seccion">
                <article> <!-- Articulo de bienvenida -->
                    <hgroup>
                        <h1>CUSTOMER SATISFACTION SURVEY</h1>
                    </hgroup>
                            <p>Thank you very much for your preference and for taking the time to complete this questionnaire.</p>
                            <br>
                            <p>Your opinion is very important for us and we appreciate your feedback!</p>
                </article>
                    <div class="formulario"> <!-- Este Div contiene todas las preguntas -->
                        <!-- Nombre de contacto -->
                        <label for="name">Contact name:</label>
                        <input type="text" id="name" name="fname" placeholder="Your name...">

                        <!-- Nombre de evento -->
                        <label for="event">Event name:</label>
                        <input type="text" id="event" name="event" placeholder="">

                        <!-- Fecha del evento -->
                        <label for="date">Date of the event:</label>
                        <input type="date" id="date" name="date" placeholder="">

                        <!-- Lugar del evento -->
                        <label for="place">Place of the event:</label>
                        <input type="text" id="place" name="place" placeholder="">

                        <!-- Numero de invitados-->
                        <label for="guests">Number of guests:</label>
                        <input type="text" id="guests" name="guests" placeholder="">

                          <!-- Pregunta 1 -->
                          <p>1. Overall experience with Canteiro Weddings sales specialist:</p>
                            <div class="checkbox">
                                <!-- Excelent -->
                                <input type="radio" id="p1excel" name="p1" value="excellent">
                                <label for="p1excel">Excellent</label><br>
                                
                                <!-- Good -->
                                <input type="radio" id="p1good" name="p1" value="good">
                                <label for="p1good">Good</label><br>
                                
                                <!-- Average -->
                                <input type="radio" id="p1average" name="p1" value="average">
                                <label for="p1average">Average</label><br>

                                 <!-- Poor -->
                                 <input type="radio" id="p1poor" name="p1" value="poor">
                                 <label for="p1poor">Poor</label><br>
                            </div>

                          <!-- Pregunta 2 -->
                          <p>2. How do you rate the quality of the furniture & décor items?</p>
                            <div class="checkbox">
                                <!-- Excelent -->
                                <input type="radio" id="p2excel" name="p2" value="excellent">
                                <label for="p2excel">Excellent</label><br>
                                
                                <!-- Good -->
                                <input type="radio" id="p2good" name="p2" value="good">
                                <label for="p2good">Good</label><br>
                                
                                <!-- Average -->
                                <input type="radio" id="p2average" name="p2" value="average">
                                <label for="p2average">Average</label><br>

                                <!-- Poor -->
                                <input type="radio" id="p2poor" name="p2" value="poor">
                                <label for="p2poor">Poor</label><br>
                            </div>

                          <!-- Pregunta 3 -->
                          <p>3. How do you rate the quality of the flower design?</p>
                          <div class="checkbox">
                              <!-- Excelent -->
                              <input type="radio" id="p3excel" name="p3" value="excellent">
                              <label for="p3excel">Excellent</label><br>
                              
                              <!-- Good -->
                              <input type="radio" id="p3good" name="p3" value="good">
                              <label for="p3good">Good</label><br>
                              
                              <!-- Average -->
                              <input type="radio" id="p3average" name="p3" value="average">
                              <label for="p3average">Average</label><br>

                              <!-- Poor -->
                              <input type="radio" id="p3poor" name="p3" value="poor">
                              <label for="p3poor">Poor</label><br>
                          </div>

                          <!-- Pregunta 4 -->
                          <p>4. Overall experience with the staff during set up</p>
                          <div class="checkbox">
                              <!-- Excelent -->
                              <input type="radio" id="p4excel" name="p4" value="excellent">
                              <label for="p4excel">Excellent</label><br>
                              
                              <!-- Good -->
                              <input type="radio" id="p4good" name="p4" value="good">
                              <label for="p4good">Good</label><br>
                              
                              <!-- Average -->
                              <input type="radio" id="p4average" name="43" value="average">
                              <label for="p4average">Average</label><br>

                              <!-- Poor -->
                              <input type="radio" id="p4poor" name="p4" value="poor">
                              <label for="p4poor">Poor</label><br>
                          </div>

                          <!-- Pregunta 5 -->
                          <p>5. How likely are you to recommend Canteiro Weddings to others or for future events? / Additional comments:</p>
                          <textarea name="p5" id="p5" cols="30" rows="10"></textarea>   

                          <!-- Boton Guardar -->
                          <input class="boton" type="button" value="Send Survey">
                    </div>
            </section>

            <!-- Pie de pagina del sitio -->
            <footer class="pie">
                Derechos Reservados 2020 - Canteiro Weddings
            </footer>

        </div>
    </body>
</html>

 

