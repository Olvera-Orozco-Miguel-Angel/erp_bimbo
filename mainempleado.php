<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="./mainempleado.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,700;1,400&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/9eecf96b99.js" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body>
  <h1 class="container">Recursos Humanos / Ingresar Esclavo</h1>





  <form action="ingresarEmpleado.php" method="post" class="container contenedor_hijo">

    <picture>
      <img class='imagen3' src="assets/empleado.svg" alt="">
    </picture>
    <div class="contenedorFormulario">
      <!-- Este es el contenedor de todo el primer formulario-->

      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id Empleado</label>
        <div class="col-sm-10">
          <input type="text" name="id" class="form-control-plaintext" id="staticEmail" placeholder="Id Empleado">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
          <input type="text" name="nombre" class="form-control" id="inputPassword" placeholder="Nombre">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Apellido Paterno</label>
        <div class="col-sm-10">
          <input type="text" name="apellidoP" class="form-control" id="inputPassword" placeholder="Ingrese apellido Paterno">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Apellido Materno</label>
        <div class="col-sm-10">
          <input type="text" name="apellidoM" class="form-control" id="inputPassword" placeholder="ApellidoMaterno">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Curp</label>
        <div class="col-sm-10">
          <input type="text" name="curp" class="form-control" id="inputPassword" placeholder="Ingrese Curp">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Jefe Inmediato</label>
        <div class="col-sm-10">
          <input type="text" name="jefe" class="form-control" id="inputPassword" placeholder="Jefe_Inmediato">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Area de Trabajo</label>
        <div class="col-sm-10">
          <!--  <input type="text" name="areaTrabajo"class="form-control" id="inputPassword" placeholder="Seleccione Area de Trabajo"> -->
          <select name="areaTrabajo" class="desplegable">
            <option class="option" value="Recursos Humanos">Recursos Humanos</option>
            <option class="option" value="Contabilidad" >Contabilidad</option>
            <option class="option"  value="Produccion" >Produccion</option>
          </select>
        </div>

      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Puesto De Trabajo</label>
        <div class="col-sm-10">
         <!-- <input type="text" name="puesto" class="form-control" id="inputPassword" placeholder="Seleccione Puesto de Trabajo"> -->
         <select name="puesto" class="desplegable">
            <option class="option" value="Jefe" >Jefe</option>
            <option class="option" value="Sub-jefe" >Sub-jefe</option>
            <option class="option" value="Secretario" >Secretario</option>
            <option class="option" value="Obrero" >Obrero</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Fecha de Ingreso</label>
        <div class="col-sm-10">
          <input type="date" name="ingreso" class="form-control-plaintext" id="staticEmail" value="Fecha de Ingreso">
        </div>
      </div>

      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Fecha de Nacimiento</label>
        <div class="col-sm-10">
          <input type="date" name="nacimiento" class="form-control-plaintext" id="staticEmail" value="">
        </div>
      </div>
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Correo Personal</label>
        <div class="col-sm-10">
          <input type="text" name="correoPersonal" class="form-control-plaintext" id="staticEmail" placeholder="Ingrese Correo">
        </div>
      </div>

      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id Direccion</label>
        <div class="col-sm-10">
          <input type="text" name="idDireccion" class="form-control-plaintext" id="staticEmail" placeholder="Id Direccion">
        </div>
      </div>

      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Nombre usuario</label>
        <div class="col-sm-10">
          <input type="text" name="NombreUsuario" class="form-control-plaintext" id="staticEmail" placeholder="Ingrese su nombre de Usuario">
        </div>
      </div>


      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Contraseña</label>
        <div class="col-sm-10">
          <input type="password" name="contrasenaSistema" class="form-control-plaintext" id="staticEmail" placeholder="Ingrese su contraseña">
        </div>
      </div>



    </div><!-- contenedor de los formularios -->



    <div class="contenedorFormulario2">
      <!-- segundo fomulario -->

      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Estado</label>
        <div class="col-sm-10">
          <input type="text" name="Estado" class="form-control-plaintext" id="staticEmail" placeholder="Ingrese Estado">
        </div>
      </div>

      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Municipio</label>
        <div class="col-sm-10">
          <input type="text" name="Municipio" class="form-control-plaintext" id="staticEmail" placeholder="Ingrese el municipio">
        </div>
      </div>
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Colonia</label>
        <div class="col-sm-10">
          <input type="text" name="colonia" class="form-control-plaintext" id="staticEmail" placeholder="Ingrese la colonia">
        </div>
      </div>
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Calle</label>
        <div class="col-sm-10">
          <input type="text" name="calle" class="form-control-plaintext" id="staticEmail" placeholder="Ingrese la calle">
        </div>
      </div>


      <div class="form-group row">
        <br>
        <div>
          <input type="submit" name="Envio datos" class="submit" value="Ingresar Empleado">
        </div>
      </div>
    </div> <!-- fin segundo formulario -->

    <picture>
      <img class='imagen4' src="assets/address.svg" alt="">
    </picture>

  </form><!-- form es el contenedor padre -->

</body>

</html>