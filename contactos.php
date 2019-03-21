<!doctype html>
<html lang="es">
  <head><!-- cabecera de la pagina  -->
    <!-- Required meta tags -->
     <!--/ inicio del head -->
   <?php include 'includes/head.php';?>
 <!--/ fin del head -->
    <title>Contactos - Cursos & Capacitaciones IT!</title>
  </head>
  
  <body><!-- cuerpo de la pagina -->
    <!--/ inicio del header -->
    <?php include 'includes/header.php';?>
    <!--/ fin del header -->

     <main>

<section> 
  <div class="container">
   <div class="col-md-12">
    <img src="images/callcenter.jpg" class="img-fluid">
    <div class="row">
      <div class="col-md-12 titulo-seccion">
    <h2>Contactenos</h2>
    <hr> 
    </div>
    </div> 
     
     <div class="row"><!-- fila -->
      <div class="col-md-3"><!-- columna -->
        <h2>Informaciones</h2>
 <!-- subtitulo -->
        <div class="media">
  <i class="material-icons">email</i>
  <div class="media-body">
    <h5 class="mt-0">Email</h5>
    info@capacit.com.py
  </div>
</div>
<hr>
    <div class="media">
  <i class="material-icons">perm_phone_msg</i>
  <div class="media-body">
    <h5 class="mt-0">Telefono</h5>
    0973431332
  </div>
</div>
<hr>    
<div class="media">
  <i class="material-icons">add_location</i>
  <div class="media-body">
    <h5 class="mt-0">Direccion</h5>
    Av. San Blas, 290 - Centro - Ciudad del Este
</div>
   </div>
 </div>
        <div class="col-md-9"><!-- columna -->
        <h2>formulario</h2>
        <form method="Get" action="">
          <label>Nombre</label>
          <input type="text" name="nombre" class="form-control" required>
        </form>
        <form>
          <label>Email</label>
          <input type="email" name="email" class="form-control">
        </form>
        <form>
          <label>Telefono</label>
          <input type="text" name="Telefono" class="form-control"required>
        </form>
        <form>
          <label>Asunto</label>
          <input type="text" name="Asunto" class="form-control"required>
        </form>
        <form>
          <label>Mensaje</label>
         <textarea class="form-control" cols="30" rows="10" name="mensaje"required></textarea>
        <input type="submit" name="enviar" value="Enviar" class="btn btn-success">
        </form>
    </div> 
    </div>
   </div>
   </div>
    </div>
</section>

<section>
  <div class="contaienr-fluid">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14403.479553783354!2d-54.6295968!3d-25.5093855!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb12fbfc9747b41e3!2sCapacit!5e0!3m2!1ses-419!2spy!4v1552603380365" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</section>

         </main>
  <!--/ inicio del footer -->
    <?php include 'includes/footer.php';?>
    <!--/ fin del footers -->


<!--/ inicio del script -->
    <?php include 'includes/script.php';?>
    <!--/ fin del script -->


   
  
  </body>
</html>

   

   