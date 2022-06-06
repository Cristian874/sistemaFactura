<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
    <title>SISTEMA FACTURAS</title>
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
    <h2>Actualizar Proveedores</h2>
  </div>

  <div class="header__logo">
    <img class="logo__img" src="../img/logo.png" alt="logotipo" />
  </div>

</div><!--Cerramos el header__menu-->

</div><!--Cerramos el contenedor-->

      </div>
    
    </header><!---Cerramos el header -->

    <div class="buscador">
      <form class="proveedores contenedor">
        <div class="buscador-boton">
          <div class="buscador-2 opcion">
            <label for="buscador">Ingrese el RFC a buscar</label>
            <input type="text" id="buscador" />
          </div>
          <div class="boton-buscador">
            <input type="button" value="Buscar " class="boton pro-buscar" />
          </div>
        </div>
      </form>
    </div><!--Cerramos el Buscador-->

    <section class="proveedores contenedor">
      <form action="GET" class="formulario">

        <div class="opcion">
          <label for="rfc">RFC :</label>
          <input type="text" id="rfc" placeholder="Ingresa el RFC" />
        </div><!--cerrramos el opcion-->

        <div class="opcion">
          <label for="nombre">Nombre: </label>
          <input type="text" id="nombre" placeholder="Ingresa el Nombre" />
        </div><!--cerrramos el opcion-->
        <div class="opcion">
          <label for="banco">banco</label>
          <input
            type="text"
            id="banco"
            placeholder="Ingrese el nombre del banco"
          />
        </div><!--cerrramos el opcion-->
        <div class="opcion">
          <label for="cuenta">Cuenta Clave</label>
          <input
            type="text"
            id="cuenta"
            placeholder="Ingrese la cuenta clave"
          />
        </div><!--cerrramos el opcion-->
        <div class="opcion">
          <label for="tel">Télefono</label>
          <input
            type="tel"
            id="tel"
            placeholder="Ingrese el número de Télefono"
          />
        </div><!--cerrramos el opcion-->
        <div class="opcion">
          <label for="email">Email</label>
          <input type="email" id="email" placeholder="Ingrese el Email" />
        </div><!--cerrramos el opcion-->
      </form><!--Cerramos el form-->
    </section><!--Cerramos la section de proveedores-->


    <!--Section de los botones-->
    <section class="botones contenedor">
      <input type="button" value="Actualizar" class="boton" />
    </section>

    <footer class="footer">
      <p>© Derechos Reservados Ferretería la Vencedora</p>
    </footer>
  </body>
</html>
