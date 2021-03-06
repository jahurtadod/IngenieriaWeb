<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>TALLER 3</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/4feb140172.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
</head>

<body>
    <header class="topBar" id="home">
        <!-- insetar logotipo -->
        <div class="logo">
            <p class="initials">
                IW
            </p>
            <h1>Ingeniería Web</h1>
        </div>
        <!-- segunda parte del header -->
        <div class="actionsBar">
            <nav class="actions">
                <a href="public/register.php">REGISTRATE</a>
                <a href="">INGRESAR</a>
            </nav>
            <aside class="search">
                <!-- insertar la barra de busqueda -->
                <!-- <input type="text" placeholder="Buscar"> -->
                <button>
                    <i class="fas fa-search"></i>
                </button>
            </aside>
        </div>
    </header>
    <nav class="menu">
        <a href="#home">INICIO</a>
        <a href="public/services.php">SERVICIOS</a>
        <a href="public/briefcase.php">PORTAFOLIO</a>
        <a href="resources/customers.php">CLIENTES</a>
        <a href="public/contacts.php">CONTACTOS</a>
    </nav>
    <section class="sliderGaleria">
        <h2>SLIDER GALERIA</h2>
        <div class="buttons">
            <button>
                <i class="fas fa-angle-left"></i>
            </button>
            <button>
                <i class="fas fa-angle-right"></i>
            </button>
        </div>
    </section>
    <main class="news">
        <section class="new">
            <div class="img-new">
                <img src="https://images.unsplash.com/photo-1586320902477-24c19029bd4a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="">
            </div>
            <div class="content">
                <h3>Noticia 1</h3>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum quaerat aspernatur eligendi quo? Fuga fugiat voluptatem molestias aut, facilis quis eveniet minima expedita officia? Possimus consequuntur magni quis quas voluptatem?
                </p>
                <a href="">Leer más</a>
            </div>
        </section>
        <section class="new">

            <div class="img-new">
                <img src="https://images.unsplash.com/photo-1585943969403-5921d3aeb695?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="">
            </div>
            <div class="content">
                <h3>Noticia 2</h3>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum quaerat aspernatur eligendi quo? Fuga fugiat voluptatem molestias aut, facilis quis eveniet minima expedita officia? Possimus consequuntur magni quis quas voluptatem?
                </p>
                <a href="">Leer más</a>
            </div>
        </section>
    </main>
    <aside class="sponsors">
        <h3>
            SPONSORS
        </h3>
        <!-- insertar las imagenes de los logotipos de los sponsors -->
        <div class="sponsor-list">
            <div class="sponsor">
                <h4>Facebook</h4>
            </div>
            <div class="sponsor">
                <h4>Dribbble</h4>
            </div>
            <div class="sponsor">
                <h4>Bēhance</h4>
            </div>
            <div class="sponsor">
                <h4>UI SHOP</h4>
            </div>
            <section class="sponsor">
                <h4>Muzli</h4>
        </div>
        </div>
    </aside>
    <?php include 'components/footer.php'; ?>
</body>

</html>