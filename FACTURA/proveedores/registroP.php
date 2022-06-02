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
      <div class="contenedor">
        <div class="header__menu">

          <div class="header__logo">
            <img src="../img/logo.png" alt="logotipo" />
          </div>

          <div class="header__title">
            <h2>Registro de Proveedores</h2>
          </div>

          <div class="header__logo">
            <img class="logo__img" src="../img/logo.png" alt="logotipo" />
          </div>

        </div><!--cerramos el header__menu-->
      </div><!--cerramos el contenedor-->
    </header>

    <div class="botones-crud contenedor">
      <div class="boton2">
        <input
          type="button"
          onclick="location.href='buscarP.html';"
          value="Buscar Proveedores "
          class="boton pro-buscar"
        />
      </div>
      <div class="boton1">
        <input
          type="button"
          onclick="location.href='actualizarP.html';"
          value="Actualizar"
          class="boton pro-buscar"
        />
      </div>
      <div class="boton2">
        <input type="button"  onclick="location.href='eliminarP.html';" value="Eliminar " class="boton pro-buscar" />
      </div>
    </div><!--Cerramos el div botones-crud -->

    <section class="proveedores contenedor">
      <form action="GET" class="formulario">
        <div class="opcion">
          <label for="rfc">RFC :</label>
          <input type="text" id="rfc" placeholder="Ingresa el RFC" />
        </div><!--ceramos en div de opcion-->

        <div class="opcion">
          <label for="nombre">Nombre: </label>
          <input type="text" id="nombre" placeholder="Ingresa el Nombre" />
        </div><!--ceramos en div de opcion-->

        <div class="opcion">
          <label for="banco">banco</label>
          <input
            type="text"
            id="banco"
            placeholder="Ingrese el nombre del banco"
          />
        </div><!--ceramos en div de opcion-->

        <div class="opcion">
          <label for="cuenta">Cuenta Clave</label>
          <input
            type="text"
            id="cuenta"
            placeholder="Ingrese la cuenta clave"
          />
        </div><!--ceramos en div de opcion-->

        <div class="opcion">
          <label for="tel">Télefono</label>
          <input
            type="tel"
            id="tel"
            placeholder="Ingrese el número de Télefono"
          />
        </div><!--ceramos en div de opcion-->

        <div class="opcion">
          <label for="email">Email</label>
          <input type="email" id="email" placeholder="Ingrese el Email" />
        </div><!--ceramos en div de opcion-->

      </form><!--Cerramos en form-->

    </section><!--Cerramos la section de proveedores-->

    <section class="botones contenedor">
      <input type="button" value="registrar" class="boton" />
    </section>

    <footer class="footer">
      <p>© Derechos Reservados Ferretería la Vencedora</p>
    </footer>
  </body>
</html>


<? php


