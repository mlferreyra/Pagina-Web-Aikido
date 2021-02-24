<!DOCTYPE html>
<html lang="es">
    <?php include("libreria.php"); ?>
<body>
    <?php include("header.php"); ?>
    <section class="row">
        <div class="container marketing">
            <div id="contenedor" class="row featurette">
                <div class="col-md-6 col-sm-6" id="aikido">
                    <h2 class="text-center"><a name="adultos">AIKIDO PARA ADULTOS</a></h2>
                    <p class="text-justify">Cualquier persona con ganas y voluntad de hacerlo, puede practicar Aikido, tanto hombres como mujeres.
                        Las personas mayores o con algún tema específico de salud, pueden practicar perfectamente a
                        través de ejercicios y técnicas adaptadas, con la correspondiente supervisión médica 
                        especializada.</p>
                    <p>Los beneficios son multiples, por ejemplo:</p>
                        <ul class="text-left">
                            <li>Se mantendrá activo.</li>
                            <li>Mejorará el equilibrio, la fuerza y la ​​flexibilidad.</li>
                            <li>Aprenderá defensa personal.</li>
                            <li>Mantendrá una actitud positiva.</li>
                        </ul>
                    
                </div>
                <div class="col-md-6 col-sm-6">
                    <img class="featurette-image img-responsive center-block" src="imagenes/adultos.jpg" alt="Generic placeholder image">
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette" >
                <div class="col-md-6 col-sm-6">
                    <h2 class="text-center"><a name="ninios">AIKIDO PARA NIÑOS</a></h2>
                    <p class="text-justify">La práctica del Aikido en niños desarrolla su capacidad física, de flexibilidad, concentración, 
                        equilibrio y contribuye a que se sientan mejor con su cuerpo dándoles mayor confianza en sí 
                        mismos y mejor comunicación con los adultos.</p>
                    <p class="text-justify">Los niños aprenden a través de juegos, técnicas de defensa personal, formas, posturas y diversos ejercicios en un 
                        clima divertido y dinámico. </p>
                    <p class="text-justify">Aikido es una disciplina no violenta. Los niños aprenden a solucionar los conflictos. 
                        Debido a que Aikido se basa en el principio de la no-resistencia, los niños 
                        aprenden a no ser agresivos, resolviendo los conflictos con calma y buscando neutralizarlo sin 
                        causarle daño. Si los niños necesitan permanecer sentados en la escuela, concentrarse en 
                        la tarea o enfocarse durante la practica de algún deporte, Aikido les muestra como hacerlo de 
                        forma correcta.</p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <img class="featurette-image img-responsive center-block" src="imagenes/ninios.jpg" alt="Generic placeholder image">
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette" >
                <div class="col-md-4 col-sm-4">
                    <h2 class="text-center"><a name="armas">PRACTICA DE ARMAS</a></h2>
                    <p class="text-justify">El Aikido posee numerosas técnicas de desarme heredadas del kenjutsu y el kobudo que 
                        fueron practicadas por O-Sensei e incluidas dentro de las técnicas.</p>
                    <p>Las armas utilizadas para esta práctica son:</p>
                        <ul class="text-left">
                            <li>El “Jo” o lanza - bastón medio de 1,10 - 1,30 m de largo.</li>
                            <li>El “Bokken” o sable de madera de aproximadamente 80 - 90 cm de largo.</li>
                            <li>El “Tanto” o cuchillo de madera.</li>
                        </ul>
                    
                </div>
                <div class="col-md-8 col-sm-8" id="myCarousel">


                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" id="myCarousel1">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox" id="myCarousel2">
                        <div class="item active">
                                <img class="first-slide" src="imagenes/armass.jpg" alt="armas">
                            </div>
                            <div class="item">
                                <img class="second-slide" src="imagenes/tanto.jpg" alt="armas">
                            </div>
                            <div class="item">
                                <img class="third-slide" src="imagenes/armas1.jpg" alt="armas">
                            </div>
                            <div class="item">
                                <img class="third-slide" src="imagenes/armas2.jpg" alt="armas">
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
           
        </div>
    </section> 
    <footer class="pie">
        <?php include("footer.php"); ?>   
    </footer>

    <?php include("script.php"); ?>  
       
</body>
</html>