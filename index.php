<!DOCTYPE html>

<?php
    include_once 'lib/Galeria.php';
?>
<html lang="es" data-ng-app="secciones" itemscope itemtype="http://schema.org/Organization">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <!-- Mis estilos -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilos/galeria.css">
        <link rel="stylesheet" href="css/magnific-popup.css">


        <!-- Mis scripts -->
        <script src="scripts/jquery-2.2.3.min.js"></script>
        <script src="scripts/bootstrap.min.js"></script>
        <script src="scripts/jquery.magnific-popup.min.js"></script>
        <script src="scripts/scripts/galeria.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <h2>Presentación</h2>
                    <p>Esta galería HTML5 y responsive está hecha usando el framework <a href="http://dimsemenov.com/plugins/magnific-popup/" target="_blank">Magnific Popup</a> combinando con Bootstrap y jQuery, y la carga la realizo dinámicamente con PHP mostrando todas las imágenes de una carpeta determinada (assets). Es un ejemplo básico pero que resulta muy útil para desarrollar una galería responsive en muy poco tiempo.
                    Para más tutoriales y articulos visitad <a href="http://programandoapasitos.blogspot.com" target="_blank" alt="Programando a pasitos" title="Programando a pasitos">Programando a pasitos</a>.</p>
                </div>

                <div class="col-xs-12 col-sm-8 col-md-9">
                    <div class="popup-gallery">

                        <?php
                            $galeria = new Galeria();
                            $arrayImagenes = $galeria->cargarImagenes("assets");

                            foreach($arrayImagenes as $path){
                                echo '<a href="' . $path . '" title="Reformas de interior"><img src="' . $path . '"/></a>';
                            }
                        ?>
                    </div>
                </div>
            </div> <!-- Fin row -->
        </div>
    </body>
</html>
