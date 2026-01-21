<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Áreas que manejamos</title>
    <link rel="stylesheet" href="AreasqM.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

<section class="contenedor">
    <h1>Áreas que manejamos</h1>

    <!-- =============== CARRUSEL =============== -->
    <div class="carousel">

        <!-- Botón izquierda -->
            <button class="nav-btn left" onclick="mover(-1)" aria-label="Anterior">
            <!-- Inline SVG: flecha izquierda -->
            <svg width="44" height="44" viewBox="0 0 24 24" role="img" aria-hidden="true" focusable="false">
                <title>Anterior</title>
                <g fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 12H5"></path>
                <path d="M11 18L4 12L11 6"></path>
                </g>
            </svg>
            </button>
        <!-- Contenedor de elementos -->
        <div class="carousel-items">

            <!-- LAVANDERÍA -->
            <div class="item">
                <h3>Lavandería</h3>
                <img src="../Images/lavanderia.jpg" alt="Lavandería">
                <ul>
                    <li>Secadoras</li>
                    <li>Lavadoras</li>
                    <li>Mantenimiento preventivo</li>
                    <li>Reparación de fallas</li>
                </ul>
            </div>

            <!-- PLC -->
            <div class="item img">
                <h3>Automatizaciones (PLC)</h3>
                <img src="../Images/PLC.jpg" alt="PLC">
                <ul>
                    <li>Soluciones industriales</li>
                    <li>Tableros eléctricos</li>
                    <li>Control y potencia</li>
                </ul>
            </div>

            <!-- COCINA -->
            <div class="item">
                <h3>Cocina</h3>
                <img src="../Images/Cocins.jpg" alt="Cocina">
                <ul>
                    <li>Refrigeradores</li>
                    <li>Lavavajillas</li>
                    <li>Estufas industriales</li>
                </ul>
            </div>

        </div>

        <!-- Botón derecha -->
            <button class="nav-btn right" onclick="mover(1)" aria-label="Siguiente">
            <!-- Inline SVG: flecha derecha -->
            <svg width="44" height="44" viewBox="0 0 24 24" role="img" aria-hidden="true" focusable="false">
                <title>Siguiente</title>
                <g fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 12H19"></path>
                <path d="M13 18L20 12L13 6"></path>
                </g>
            </svg>
            </button>
    </div>

    <!-- =============== CUARTO DE MÁQUINAS (NUEVO) =============== -->
    <section class="cuarto-maquinas">
        <h3>Cuarto de máquinas</h3>

        <div class="grid-cards">
            <figure class="card">
                <!-- ejemplo usando la imagen que subiste -->
                <img src="../Images/Calderas.jpg" alt="Calderas y calentadores">
                <figcaption>
                    <strong>Calderas y calentadores</strong>
                    <p>Calderas y calentadores de gas / diesel</p>
                </figcaption>
            </figure>

            <figure class="card">
                <img src="../Images/PlantasdeEm.jpg" alt="Planta de emergencia">
                <figcaption>
                    <strong>Planta de emergencia</strong>
                    <p>Motores, alternadores y tableros</p>
                </figcaption>
            </figure>

            <figure class="card">
                <img src="../Images/Hidroneumaticos.jpg" alt="Hidroneumáticos">
                <figcaption>
                    <strong>Hidroneumáticos</strong>
                    <p>Sistemas de presión y arranque</p>
                </figcaption>
            </figure>
        </div>
    </section>

</section>

<script>
    // Simple carousel (no dependencias)
    let index = 0;
    const itemsContainer = document.querySelector(".carousel-items");
    const items = document.querySelectorAll(".item");

    function mover(direccion) {
        index = (index + direccion + items.length) % items.length;
        itemsContainer.style.transform = `translateX(${-index * 100}%)`;
    }

    // Touch support (swipe) y teclado básico
    let startX = 0;
    itemsContainer.addEventListener('touchstart', e => startX = e.touches[0].clientX);
    itemsContainer.addEventListener('touchend', e => {
        const endX = e.changedTouches[0].clientX;
        if (endX - startX > 30) mover(-1);
        else if (startX - endX > 30) mover(1);
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') mover(-1);
        if (e.key === 'ArrowRight') mover(1);
    });
    <script>
  function toggleMenu() {
    document.getElementById("navMenu").classList.toggle("show");
  }
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</script>

</body>
</html>