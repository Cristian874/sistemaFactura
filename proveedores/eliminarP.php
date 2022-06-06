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
    <h2>Eliminar Proveedores</h2>
  </div>

  <div class="header__logo">
    <img class="logo__img" src="../img/logo.png" alt="logotipo" />
  </div>

</div><!---Cerramos el header__menu-->
</div><!--Cerramnos el contenedor-->

      </div>

   
    </header><!--Cerramos el header-->

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
    </div><!--Cerramos el buscador-->

    <section class="proveedores contenedor">
      <form action="GET" class="formulario">
        <div class="opcion">
          <label for="rfc">RFC :</label>
          <input type="text" id="rfc" placeholder=" RFC del Proveedor" />
        </div>

        <div class="opcion">
          <label for="nombre">Nombre: </label>
          <input type="text" id="nombre" placeholder="Nombre Proveedor" />
        </div>
        <div class="opcion">
          <label for="banco">banco</label>
          <input type="text" id="banco" placeholder="Banco del Proveedor" />
        </div>
        <div class="opcion">
          <label for="cuenta">Cuenta Clave</label>
          <input
            type="text"
            id="cuenta"
            placeholder="cuenta clave del Proveedor"
          />
        </div>
        <div class="opcion">
          <label for="tel">Télefono</label>
          <input type="tel" id="tel" placeholder="Télefono del Proveedor" />
        </div>
        <div class="opcion">
          <label for="email">Email</label>
          <input type="email" id="email" placeholder=" Email Proveedor" />
        </div>
      </form><!--Cerramos form-->
    </section><!--Cerramos la section de proveedores-->


    <section class="botones contenedor">
        <input type="button" value="Eliminar" class="boton" />
      </section>

    <footer class="footer">
      <p>© Derechos Reservados Ferretería la Vencedora</p>
    </footer>
  </body>
</html>
