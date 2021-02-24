<!DOCTYPE html>
<html lang="es">
    <?php include("libreria.php"); ?>
<body>
    <?php include("header.php"); ?>
    <section>   
        <div class="container marketing">
            <div class="form-center">
                <form name="contacto_form" id="contacto" method="post" action="#" class="form-horizontal">
                    <h1 class="text-center">CONTACTO</h1>
                    <p class="formulario text-center">Completa el siguiente formulario para realizar su consulta.</p> 
                    <div class="form-group">
                        <label>Nombre: <span class="campo">(*)</span></label>
                        <input type="text"  name="Nombre" id="Nombre" class="form-control" required placeholder="Nombre completo" autofocus>
                    </div>    
                    <div class="form-group">             
                        <label>Teléfono: <span class="campo">(*)</span></label>
                        <input type="tel"  name="telefono" id="telefono" class="form-control" placeholder="Ingrese su nº telefónico" required>
                    </div>
                    <div class="form-group">
                        <label>Email: <span class="campo">(*)</span></label>
                        <input type="email"  name="email" id="email" class="form-control" placeholder="nombre@dominio.info" required>
                    </div>
                    <div class="form-group">
                        <label>Consulta: <span class="campo">(*)</span></label>
                        <textarea id="mensaje" name="mensaje"  class="form-control" rows="6" placeholder="Ingrese su consulta..." required></textarea>
                        <span class="campo">(*) Campo obligatorio</span>
                    </div>
                    <div id="enviar">
                        <button type="submil" class="btn btn-default">
                        <span class="glyphicon glyphicon-send" aria-hidden="true"> </span> Enviar</button>
                    </div> 
                </form>
            </div>
        </div>
        
    </section>
    <footer class="pie">
        <?php include("footer.php"); ?>   
    </footer>

    <?php include("script.php"); ?>  
  </body>
</html>