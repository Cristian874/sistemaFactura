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
            <h2>Actualizar Facturas</h2>
          </div>
          <div class="header__logo">
            <img class="logo__img" src="../img/logo.png" alt="logotipo" />
          </div>
        </div>
      </div><!--Cerramos el div contenedor-->

      </div>
    
    </header><!--cerramos el header-->

    <div class="buscador">
      <form class="proveedores contenedor">
        <div class=" buscador-boton">
          <div class="buscador-2 opcion">
            <label for="buscador">Ingrese el RFC a buscar</label>
            <input type="text" id="buscador" />
          </div>
          <div class="boton-buscador">
            <input type="button" value="Buscar " class="boton pro-buscar" />
          </div>
        </div>
      </form>
    </div><!--cerramos el buscador-->

  
    <section class="proveedores contenedor">
      <form action="GET" class="formulario">
        <div class="opcion ">
          <label for="folio">Folio Factura :</label>
          <input type="text" id="folio" placeholder="Folio Factura" />
        </div>

        <div class="opcion">
          <label for="fecha">Fecha Actual de la Factura: </label>
          <input type="text" id="fecha" placeholder="Fecha Actual de la Factura" />
        </div>
        <div class="opcion">
            <label for="condicion">Condición Factura</label>
            <select name="" id="condicion">
                <option selected="true" disabled="disabled">-- Selecciona --</option>
                <option value="1">Pagada</option>
                <option value="2">No - Pagada</option>
            </select>
        </div>
        <div class="opcion">
          <label for="vencimiento">Fecha vencimiento</label>
          <input required
            type="text"
            id="vencimiento"
            placeholder="Fecha de vencimiento"
          />
        </div>
        <div class="opcion">
          <label for="importe">Importe</label>
          <input
            type="text"
            id="importe"
            placeholder="Importe Total"
          />
        </div>
        <div class="opcion">
          <label for="porcentaje">porcentaje</label>
          <input
            type="tel"
            id="porcentaje"
            placeholder="Porcentaje"
          />
        </div>
        <div class="opcion">
          <label for="descuento">Descuento</label>
          <input type="email" id="descuento" placeholder="descuento" />
        </div>
        <div class="opcion">
          <label for="importe">Importe a Pagar</label>
          <input type="email" id="importe" placeholder="Importe a pagar" />
        </div>
        <div class="opcion">
          <label for="iva">Iva</label>
          <input type="email" id="iva" placeholder="Iva" />
        </div>

        <div class="opcion">
          <label for="condicion">Estatus</label>
          <select name="" id="condicion">
              <option selected="true" disabled="disabled">-- Selecciona --</option>
              <option value="1">Pagada</option>
              <option value="2">No - Pagada</option>
          </select>
      </div>

      <div class="opcion">
        <label for="saldo">Saldo</label>
        <input type="email" id="saldo" placeholder="Saldo" />
      </div>

      <div class="opcion">
        <label for="monto">Monto a Pagar</label>
        <input type="email" id="monto" placeholder="Monto a Pagar" />
      </div>


      </form>
    </section><!--cerramos la section de proveedores-->

    <section class="botones contenedor">
      <input type="button" value="Actualizar " class="boton" />
    </section><!--cerramos la section de botones-->

    <footer class="footer " >
      <p>© Derechos Reservados Ferretería la Vencedora</p>
    </footer>
  </body>
</html>
