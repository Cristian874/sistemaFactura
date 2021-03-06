<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
    <title>SISTEMA FACTURAS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="../css/normalize.css" />
    
    <link rel="stylesheet" href="../css/app.css" />
  </head>
  <body>
    <header class="header">
      <div class="header-blanco">
      <div class="contenedor">
        <div class="header__menu">
          <div class="header__logo">
            <img src="../img/logo.png" alt="logotipo" />
          </div>
          <div class="header__title">
            <h2>Imprimir Factura</h2>
          </div>
          <div class="header__logo">
            <img class="logo__img" src="../img/logo.png" alt="logotipo" />
          </div>
        </div>
      </div>

      </div>

    </header><!--Cerramos el header-->

    <div class="buscador">
      <form class="proveedores contenedor">
        <div class=" buscador-boton">
          <div class="buscador-2 opcion">
            <label for="buscador">Ingrese el RFC a buscar</label>
            <input type="text" id="buscador"/>
          </div>
          <div class="boton-buscador">
            <input type="button" value="Buscar " class="boton pro-buscar" />
          </div>
        </div>
      </form>
    </div><!--Cerramos el buscador-->

    <table class="table contenedor">
      <thead>
        <tr>
          <th scope="col">Número Factura</th>
          <th scope="col">Información Factura</th>
          <th scope="col">Opciones</th>
         
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row"></th>
          <td></td>
          <td><input type="button" value="Imprimir" class="boton-e" /></td>
          
    
      </tbody>
    </table><!--Cerramos la Tabla-->


    <footer class="footer " >
      <p>© Derechos Reservados Ferretería la Vencedora</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js">
      
    </script>
  </body>
</html>
