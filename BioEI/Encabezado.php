
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/BioEI/Encabezado.css">
  <link rel="stylesheet" type="text/css" href="/BioEI/footer.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<nav class="navbar navbar-expand-lg" style="background: rgba(61, 136, 175, 1);">
  
  <a class="navbar-brand text-dark font-weight-medium"
     href="/BioEI/Principal/Principal.php">
    Biomedicina y equipos industriales
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse"
          data-target="#navbarNav" aria-controls="navbarNav"
          aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav align-items-lg-center">

      <li class="nav-item">
        <a class="nav-link text-dark" href="/BioEI/Areas/Areas.php">Áreas</a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-dark" href="/BioEI/Servicio/Servicio.php">Servicio</a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-dark" href="/BioEI/Catalogo/Catalogo.php">Catálogo</a>
      </li>

      <li class="nav-item ml-lg-3 mt-2 mt-lg-0">
        <a class="btn btn-dark px-4"
           href="/BioEI/Contacto/Contacto.php">
          Contacto
        </a>
      </li>

    </ul>
  </div>
</nav>

</html>
<script>
  function toggleMenu() {
    document.getElementById("navMenu").classList.toggle("show");
  }
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
