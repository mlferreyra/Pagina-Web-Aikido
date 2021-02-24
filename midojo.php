<!DOCTYPE html>
<html lang="es">
    <?php include("libreria.php"); ?>
<body>
    <?php include("header.php"); ?>
    <section>
        <div class="container marketing">
            <div id="contenedor" class="row featurette">
                <div class="col-md-7 col-sm-7">
                    <img class="featurette-image img-responsive center-block" src="imagenes/david.jpg" alt="Generic placeholder image">
                </div>
                <div class="col-md-5 col-sm-5" id="aikido">
                    <h2><a name="instructor">INSTRUCTOR</a></h2>
                    <h4>David Bracamonte.</h4>
                        <p> 1º DAN </p>
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Detalle</button>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">LOGROS</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>David Bracamonte</p>
                                            <ul>
                                                <li>Graduación: 1º Dan.</li>
                                                <li>Instructor de Jiu Jitsu</li>
                                                <li>Experiencia: más de 20 años de práctica.</li>
                                            </ul>
                                            <p>Otros</p>
                                            <ul>
                                                <li>Instructor del Curso de perfeccionamiento en Defensa Personal (Policia Federal).</li>
                                                <li>Instructor de Tiro y Defensa personal de la Policia Provincial.</li>
                                            </ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class=" col-lg-4 col-md-4 col-sm-12">
                    <h2><a name="horarios">HORARIOS</a></h2>
                    <table class="table table-striped" style="width: 90%;">
                        <tr>
                            <th scope="row">Lunes - Martes</th>
                            <th>9:00 a 10:30 hs</th>
                        </tr>
                        <tr>
                            <th>Miercoles - Jueves - Viernes</th>
                            <td>8:00 a 9:30 hs</td>
                        </tr>
                        <tr>
                            <th>Martes - Jueves</th>
                            <td>14:30 a 16:00 hs</td>
                        </tr>
                        <tr>
                            <th>Sábado</th>
                            <td>9:00 a 11:30 hs </td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12" id="myCarousel">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" id="myCarousel1">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox" id="myCarousel2">
                            <div class="item active">
                                <img src="imagenes/horarios.jpg" alt="morihei">
                            </div>
                            <div class="item">
                                <img src="imagenes/horarios1.jpg" alt="kenzo">
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
            <div class="col-lg-5 col-md-5">
                <h3 class="text-right">UBICACION</h3>
                <h4 class="text-right">KENZO MIYAZAWA DOJO</h4>
                <p class="text-right">Av. Alberdi 1352 - Resistencia (Provincia del Chaco).</p>
            </div>
            <div class="dojo col-lg-7 col-md-7">
                <iframe class="iframe-mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.232202370568!2d-59.000753385727336!3d-27.462029482894156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94450c904bcc92bf%3A0x4df9fb8ed7bab096!2sAv.+Alberdi+1352%2C+Resistencia%2C+Chaco!5e0!3m2!1ses!2sar!4v1526278702081"  allowfullscreen></iframe>
            </div>
        </div>
        
    </section>
    <footer class="pie">
        <?php include("footer.php"); ?>   
    </footer>

    <?php include("script.php"); ?>  

  </body>
</html>