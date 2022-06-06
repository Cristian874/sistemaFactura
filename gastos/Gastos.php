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
            <h2>Gastos</h2>
          </div>

          <div class="header__logo">
            <img class="logo__img" src="../img/logo.png" alt="logotipo" />
          </div>

        </div><!--cerramos el header__menu-->
      </div><!--cerramos el contenedor-->

      </div>

    </header>

    <div class="botones-crud contenedor">
      <div class="boton2">
        <input
          type="button"
          onclick="location.href='reportegastos.php';"
          value=" Registros de Gastos"
          class="boton pro-buscar"
        />
      </div>
   
    </div><!--Cerramos el div botones-crud -->

    <section class="proveedores contenedor">
      <form  method="POST" action="insertar.php" class="formulario">
        <div class="opcion">
          <label for="rfc">Concepto</label>
          <input type="text" id="rfc" placeholder="Concepto de la Operación" name="concepto" />
        </div><!--ceramos en div de opcion-->

        <div class="opcion">
          <label for="nombre">Importe: </label>
          <input type="text" id="nombre" placeholder="Importe" name="importe"/>
        </div><!--ceramos en div de opcion-->

        <div class="opcion">
          <label for="banco">IVA:</label>
          <input
            type="text"
            id="banco"
            placeholder="Iva de la Operación" name="iva"
          />
        </div><!--ceramos en div de opcion-->

        <div class="opcion">
          <label for="cuenta">Poliza</label>
          <input
            type="text"
            id="cuenta"
            placeholder="Ingrese la Poliza" name="poliza"
          />
        </div><!--ceramos en div de opcion-->

        <div class="opcion">
          <label for="cuenta">RFC</label>
          <input
            type="text"
            id="cuenta"
            placeholder="Ingrese la Poliza" name="rfc"
          />
        </div><!--ceramos en div de opcion-->
        <div class="opcion">
          <label for="cuenta">Razón Social</label>
          <input
            type="text"
            id="cuenta"
            placeholder="Ingrese la Poliza" name="rsocial"
          />
        </div><!--ceramos en div de opcion-->

        <div class="opcion">
          <label for="tel">Fecha del Pago o Transferencia</label>
          <input
            type="date"
            id="tel"
            placeholder="Ingrese el número de Télefono" name="fecha"
          />
        </div><!--ceramos en div de opcion-->

        <div class="opcion">
            <label for="condicion">Cuenta de Pago</label>
            <select name="pago" id="condicion" name="pago">
                <option selected="true" disabled="disabled">-- Selecciona --</option>
                <option value="BBVA BANCOMER/ 0187579403">BBVA BANCOMER/ 0187579403</option>
           
                <option value="BBVA BANCOMER/ 0187579043">BBVA BANCOMER/ 0187579043</option>
                <option value="HSBC/ 4053619946">HSBC/ 4053619946</option>
          
            </select>
        </div>

        <div class="opcion">
            <label for="condicion">Metodo de Pago</label>
            <select name="metodo" id="condicion" name="metodo">
                <option selected="true" disabled="disabled">-- Selecciona --</option>
                <option value="Efectivo">Efectivo</option>
           
                <option value="Transferencia">Transferencia</option>
                <option value="Cheque">Cheque</option>
          
            </select>
        </div>
        <input type="hidden" name="oculto" value="1">
        <section class="botones contenedor">
      <input type="submit" value="registrar" class="boton" />
    </section>

      </form><!--Cerramos en form-->

    </section><!--Cerramos la section de proveedores-->

   

    <footer class="footer">
      <p>© Derechos Reservados Ferretería la Vencedora</p>
    </footer>
  </body>
</html>
