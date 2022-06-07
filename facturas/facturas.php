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
            <h2>Registro de Factura</h2>
          </div>
          <div class="header__logo">
            <img class="logo__img" src="../img/logo.png" alt="logotipo" />
          </div>
        </div>
      </div>

      </div>
     
    </header><!--Cerramos el header-->

    <section class="proveedores contenedor">
      <div class="botones-crud contenedor">
        <div class="boton1">
          <input
            type="button"
            onclick="location.href='buscarF.php';"
            value="Buscar Factura"
            class="boton pro-buscar"
          />
        </div>
  
      
  
        <div class="boton2">
          <input
            type="button"
            onclick="location.href='imprimirF.php';"
            value="Imprimir Factura "
            class="boton pro-buscar"
          />
        </div>
        <div class="boton1">
          <input
            type="button"
            onclick="location.href='actualizar.php';"
            value="Actualizar"
            class="boton pro-buscar"
          />
        </div>
      
        <div class="boton2">
          <input
            type="button"
            onclick="location.href='eliminarF.php';"
            value="Eliminar "
            class="boton pro-buscar"
          />
        </div>
      </div>
      <form method="POST" action="insertar.php"  class="formulario">
        <div class="opcion">
          <label for="rfc">RFC :</label>
          <input type="text" id="rfc" placeholder="Ingresa el RFC" required name="rfc"/>
        </div>

        <div class="opcion">
          <label for="iva">Proveedor</label>
          <select id="iva" name="proveedor">
            <option selected="true" disabled="disabled"  >
              -- Selecciona --
            </option>
            <option value="Juan">Juan 1</option>
            <option value="Juan">Juan 2</option>
            <option value="Otro">Otro</option>
          </select>
        </div>

        <div class="opcion">
          <label for="factura">Folio Factura: </label>
          <input
            type="text"
            id="factura"
            placeholder="Ingresa el folio de la factura"
            required name="folio"
          />
        </div>
        <div class="opcion">
          <label for="fecha">Fecha de la Factura</label>
          <input
            type="date"
            id="fecha"
            placeholder="Ingrese la fecha de la factura"
            required name="fecha"
          />
        </div>
        <div class="opcion">
          <label for="plazo">Condición</label>
          <input
            type="text"
            id="plazo"
            placeholder="Ingrese la condición de la factura"
            required name="condicion"
          />
        </div>
      
        <div class="opcion">
          <label for="vencimiento">Fecha de vencimiento</label>
          <input
            type="date"
            id="vencimiento"
            placeholder="Ingrese la fecha de vencimiento"
            required name="fechav"
          />
        </div>

        <div class="opcion">
          <label for="subtotal">Importe tasa 16%</label>
          <input type="text" id="subtotal" required name="importeuno" />
        </div>
        <div class="opcion">
          <label for="subtotal">Importe tasa 0</label>
          <input type="text" id="subtotal" required name="importedos"/>
        </div>

        <div class="opcion">
          <label for="iva">Porcentaje Iva</label>
          <select id="iva" name="porcentajeiva">
            <option selected="true" disabled="disabled">
              -- Selecciona --
            </option>
            <option value="16%">16%</option>
            <option value="16%">0%</option>
          </select>
        </div>

        <div class="opcion">
          <label for="importe">Importe Factura</label>
          <input type="text" id="importe" required name="importef"/>
        </div>
        <div class="opcion">
          <label for="nota">Nota de Crédito</label>
          <input
            type="text"
            id="nota"
            placeholder="Escribe el tipo de nota de crédito"
            required name="notac"
          />
        </div>
        <div class="opcion">
          <label for="importe">Importe</label>
          <input type="text" id="importe" required name="importe" />
        </div>

        <div class="opcion">
          <label for="porcentaje" require>Descuento %</label>
          <input
            type="text"
            id="porcentaje"
            placeholder="Ingrese el porcentaje de descuento"
            required name="descuentouno"
          />
        </div>
        <div class="opcion">
          <label for="descuento">Descuento Cantidad</label>
          <input
            type="text"
            id="descuento"
            placeholder="Ingrese el descuento por cantidad"
            required name="descuentodos"
          />
        </div>
        <div class="opcion">
          <label for="iva">Iva del Total</label>
          <input type="text" id="iva" required name="ivat"/>
        </div>
        <div class="opcion">
          <label for="subtotal">Importe a Pagar</label>
          <input type="text" id="subtotal" required name="importep"/>
        </div>
        <input type="hidden" name="oculto" value="1">
      <section class="botones contenedor">
      <input type="submit" value="registrar" class="boton" />
      </form>
   
    </section>
    </section><!--Cerrramos la section de proveedores-->


 
  </body>
</html>

