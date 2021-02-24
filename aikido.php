<!DOCTYPE html>
<html lang="es">
    <?php include("libreria.php"); ?>
<body>
    <?php include("header.php"); ?>
    <section>
        <div class="container marketing">
            <div id="contenedor" class="row featurette">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12" id="aikido">
                    <h2><a name="aikido">¿QUE ES EL AIKIDO?</a></h2>
                    <p class="text-justify">El Aikido es un arte marcial japonesa. Permite defenderse sin armas 
                            contra uno o varios adversarios armados o desarmados. La diferencia fundamental con otras artes 
                            marciales estriba en que busca disuadir al adversario y neutralizar su intención agresiva, más que 
                            derrotarle.</p>

                        <p class="text-justify">El practicante de Aikido utiliza técnicas de proyección y de inmovilización para desequilibrar o 
                            dominar a su adversario; puede también acompañar sus movimientos de una serie de "atemis", es 
                            decir golpes en puntos vitales del cuerpo. Su ejercicio incluye la práctica con diversas armas. 
                            A diferencia de otras artes marciales, el Aikido excluye tajantemente toda idea de competición. 
                            A primera vista el Aikido, con sus bellos movimientos circulares podría parecer, en ocasiones, 
                            poco efectivo, sin embargo es un arte vigoroso y dinámico, con técnicas de probada eficacia.</p>  
                        </p>
                        <p class="text-justify">Moral, por respeto al espíritu de no-violencia (que caracteriza al Aikido) y al Bushido 
                            (código de honor tradicional), el practicante adquiere y potencia valores como la amabilidad, 
                            la educación, la bondad, el coraje, la modestia y el autodominio.
                        </p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <img id="japones" class="featurette-image img-responsive center-block" src="imagenes/logo1.jpg" alt="Generic placeholder image">
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette" >
                <div class="col-md-7 col-md-push-5 col-sm-6 col-xs-12">
                    <h2><a name="maestros">MAESTROS DEL AIKIDO</a></h2>
                    <h3>Morihei Ueshiba</h3>
                    <p class="text-justify">El Aikido fue creado por el maestro Morihei Ueshiba (1883-1969) quien superó la desigualdad 
                        entre el fuerte y el débil y abrió el camino del desarrollo de la personalidad por el pulimento 
                        cotidiano y constante del cuerpo y del espíritu. De su síntesis 
                        extrajo los principios del budo que a partir de 1942 se denominó Aikido.</p>
                    <h3>Kenzo Miyazawa</h3>
                    <p class="text-justify">Kenzo Miyazawa (1937—2003) fue un artista marcial japonés, llegó a 7° Dan de Aikido. 
                        También el fundador de la Aikikai Argentina en el año 1980, primera​ afiliada a la Aikikai Internacional.</p>
                    <p>En <strong>"HONOR" a Kenzo Miyazawa</strong> lleva su nombre nuestro <strong>"DOJO"</strong>.</p> 
                </div>
                <div class="col-md-5 col-md-pull-7 col-sm-6 col-xs-12" id="myCarousel">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" id="myCarousel1">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox" id="myCarousel2">
                            <div class="item active">
                                <img src="imagenes/morihei.jpg" alt="morihei">
                                <div class="carousel-caption">
                                    <h3>Morihei Ueshiba</h3>
                                </div>
                            </div>
                            <div class="item">
                                <img src="imagenes/kenzo.jpg" alt="kenzo">
                                <div class="carousel-caption">
                                    <h3>Kenzo Miyazawa</h3>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>    
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <h2><a name="graduaciones">GRADUACIONES</a></h2>
                    <h3>Sistema de grados del AIKIDO</h3>
                        <ul>
                            <li>5º Kyu - Cinto amarillo</li>
                            <li>4º Kyu - Cinto Naranja</li>
                            <li>3º Kyu - Cinto Verde</li>
                            <li>2º Kyu - Cinto Azul</li>
                            <li>1º Kyu - Cinto Marrón</li>
                            <li>Dan - Cinto Negro</li>
                        </ul>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <img class="featurette-image img-responsive center-block" src="imagenes/cinturones.jpg" alt="cinturones">
                </div>
            </div>
        </div>
        
    </section>
    <footer class="pie">
        <?php include("footer.php"); ?>   
    </footer>

    <?php include("script.php"); ?>  
  </body>
</html>