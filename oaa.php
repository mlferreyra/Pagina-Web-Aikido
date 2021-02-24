<!DOCTYPE html>
<html lang="es">
    <?php include("libreria.php"); ?>
<body>
    <?php include("header.php"); ?>
    <section>
        <div class="container marketing">
            <div id="contenedor" class="row featurette">
                <div class="col-md-9" id="aikido">
                    <h2 class="text-center"><a name="organizacion">ORGANIZACION ARGENTINA DE AIKIDO</a></h2>
                        <p class="text-justify"> La <strong>Organización Argentina de Aikido (OAA)</strong> fue fundada en el año 2003 por su actual 
                            Director, Sensei Roberto Daniel Palma, tras el fallecimiento de quien fuera su mentor y
                            maestro Kenzo Miyazawa-Shihan, introductor del Aikido en Argentina.</p>
                        <p class="text-justify">Con el correr de los años, la estructura de la OAA se fortaleció, maduró y creció 
                            exponencialmente bajo el incansable empuje y trabajo de su fundador. Cabe destacar 
                            que este crecimiento a nivel territorial y humano de la OAA adquirió el tamaño y 
                            espíritu necesarios para que la <strong>FUNDACIÓN AIKIKAI</strong>  
                            le otorgará el certificado de reconocimiento directo.</p>
                </div>
                <div class="oaa col-md-3">
                    <img id="oaa" class="featurette-image img-responsive center-block" src="imagenes/logo.png" alt="Generic placeholder image">
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette" >
                <div class="col-md-5">
                    <h2 class="text-center"><a name="sensei">SENSEI ROBERTO DANIEL PALMA</a></h2>
                    <p class="text-justify">Roberto Daniel Palma – Sensei es el fundador y director técnico de la Organización Argentina 
                        de Aikido (OAA). Fue alumno directo de Kenzo Miyazawa Shihan, introductor del Aikido en la 
                        Argentina, e instructor del Dojo de Sensei Kenzo Miyazawa.</p>
                    <p class="text-justify">Nacido el 9 de Agosto de 1958, en La Consulta, distrito de San Carlos, provincia de Mendoza. 
                        En el año 2003 sufrió una gran pérdida al fallecer su maestro Kenzo Miyazawa Shihan, con quien 
                        tenía una estrecha relación y vínculo. Fue a partir de entonces que decidió continuar con el legado 
                        de su maestro sembrando y difundiendo el arte del AIKIDO en toda la Republica Argentina.</p>
                    <p class="text-justify">Promueve la incorporación del Aikido como materia extracurricular en colegios primarios, secundarios 
                        y de enseñanza especial.</p>
                </div>
                <div class="col-md-7" id="myCarousel">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" id="myCarousel1">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox" id="myCarousel2">
                            <div class="item active">
                                <img src="imagenes/palma3.jpg" alt="morihei">
                            </div>
                            <div class="item">
                                <img src="imagenes/palma1.jpg" alt="kenzo">
                            </div>
                            <div class="item">
                                <img src="imagenes/palma2.jpg" alt="kenzo">
                            </div>
                            <div class="item">
                                <img src="imagenes/palma.jpg" alt="kenzo">
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
                <div class="col-md-7">
                    <h3>UBICACION</h3>
                    <h4>DOJO CENTRAL</h4>
                    <p class="text-justify">Hipólito Yrigoyen 1251 - Martinez, Buenos Aires - Argentina.</p>
                </div>
                <div class="dojo col-md-5">
                    <iframe class="iframe-mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3288.2575020443196!2d-58.5174210847732!3d-34.49635558048747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb0f8a6430dbd%3A0xf7c18a00e7388363!2sHip%C3%B3lito+Yrigoyen+1251%2C+B1640HEY+Mart%C3%ADnez%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1526603968185"  frameborder="0" allowfullscreen></iframe>
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