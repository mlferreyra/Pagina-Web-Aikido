<!DOCTYPE html>
<html lang="es">
    <?php include("libreria.php"); ?>
<body>
<?php include("header.php"); ?>
    <div class="container">
        <h2 class="text-center">::. Galeria de Imagenes .::</h2>
        <div class="blueberry">
            <ul class="slides">
                <li><img src="imagenes/aikido.jpg" /></li>
                <li><img src="imagenes/aikido1.jpg" /></li>
                <li><img src="imagenes/aikido2.jpg" /></li>
                <li><img src="imagenes/aikido3.jpg" /></li>
                <li><img src="imagenes/aikido4.jpg" /></li>
                <li><img src="imagenes/aikido5.jpg" /></li>
            </ul>
            
            <ul class="pager">
                <li><a href="#"><span></span></a></li>
                <li><a href="#"><span></span></a></li>
                <li><a href="#"><span></span></a></li>
                <li><a href="#"><span><span></a></li>
                <li><a href="#"><span></span></a></li>
                <li><a href="#"><span></span></a></li>
            </ul>
        </div>
    </div>
    <p><a href="index.php" role="button" class="btn btn-default">
        <span class="glyphicon glyphicon-home" aria-hidden="true"> </span> Inicio</a>
    </p>

    <footer class="pie">
        <?php include("footer.php"); ?>   
    </footer>

    <?php include("script.php"); ?>  

    <script>
         $(window).load(function() {
            $('.blueberry').blueberry();
        });
    </script>
    

  </body>
</html>