<!DOCTYPE html>
<html>
    <head>
        <title>Diploma</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img style="heigh: 50px; width: 150px; margin-left: -10px; margin-top: -10px;" alt="Laureate" 
                             src="../images/logo-laureate.png">
                    </a>
                </div>
                <p class="navbar-text navbar-right navbar-invert navbar-collapse" 
                   style="padding-right: 10px;">Mario Rodriguez</p>
            </div>
        </nav>
        
        <!--<form method="post" action="diploma2.php">-->
        <!--Menu-->
        <div class="container col-md-3">
            
            <div class="form-group">
                <label class="control-label col-md-3" for="universidad">Universidad:</label>
                <input type="text" class="form-control col-sm-3" id="universidad" 
                       placeholder="Nombre de la Institución" required>
                <br><br><br><br>
                <label class="control-label col-md-12" for="nombre">Nombre del Estudiante:</label>
                <input type="text" class="form-control col-sm-3" id="nombre" 
                       placeholder="Nombre del estudiante" required>
                <br><br><br><br>
                <label class="control-label col-md-3" for="titulo">Diploma:</label>
                <input type="text" class="form-control col-sm-3" id="titulo" name="pdfDiploma"
                       placeholder="Diploma obtenido" required>
                <br><br>
                <input class="btn btn-default" id="btnInicio" type="submit" value="Generar PDF" ></input>
            </div>
            
        </div>
        
        <!--Muestra-->
        <div id="divDiploma" class="col-md-3">
            <div class="diploma">
                <h1 id="lblUniversidad" class="Universidad">_%%universidad%%_</h1>
                <p>Certify to all that</p>
                <h2 id="lblNombre">_%%nombre%%_</h2>
                <p>has been nominated</p>
                <h1 id="lblTitulo" class="Titulo">_%%titulo%%_</h1>
                <br>
                <p id="fecha"></p>
            </div>
        </div>
        <!--</form>-->
        
        <script type="text/javascript">
            var fecha = new Date();
            document.getElementById("fecha").innerHTML = fecha.getFullYear();
        </script>
        <script type="text/javascript" src="../js/jquery-3.0.0.js"></script>
        <script type="text/javascript" src="../js/bootstrap.js"></script>
        <script type="text/javascript" src="../js/scripts.js"></script>
    </body>
</html>