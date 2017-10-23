<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script>      
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/Ajax.js"></script>
        <script type="text/javascript">
            function enviar() {
                var peticion = null;
                peticion = ConstructorXMLHttpRequest();
                if (peticion) {
                    peticion.open('get', "contenido/datos.php", false);
                    peticion.send(null);
                    document.getElementById('resp').innerHTML = peticion.responseText;
                }
            }
        </script>
    </head>
    <body>

    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Numero 1</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="n1" name="name" placeholder="First & Last Name" value="">
        </div>
    </div>
    
       
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Numero 2</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="n2" name="name" placeholder="First & Last Name" value="">
        </div>
    </div>

    <input type="button" onclick="enviar()" value="Tabla de multiplicar">
 
        <br><br>
 
        <div id="resp"></div>
       
    </body>
</html>
 