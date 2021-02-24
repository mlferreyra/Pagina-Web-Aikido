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

    <footer class="pie">
        <?php include("footer.php"); ?>   
    </footer>

    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.min.js"></script>
    <script src="js/jquery.blueberry.js"></script>

    <script>
         $(window).load(function() {
            $('.blueberry').blueberry();
        });
    </script>
    

  </body>
</html>