<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- <script type='text/javascript' src='scripts/bootstrap.js'></script> -->
    <link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
  </head>
  <body>
    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <a href="bootstrap.php" class="navbar-brand" style="color:white;">Página Principal</a>
            <a href="funcionarios.php" class="navbar-brand" style="color:white;">Funcionários</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagens/carro.png" class="d-block" width="100%" height="400px" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="color:red;">Honda Civic 1</h5>
                    <p>Venda de Honda Civic Branco por X.</p>
                </div>
            </div>
            <div class="carousel-item">
            <img src="imagens/carro.png" class="d-block" width="100%" height="400px" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 style="color:red;">Honda Civic 2</h5>
                <p>Venda de Honda Civic Branco por X.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="imagens/carro.png" class="d-block" width="100%" height="400px" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 style="color:red;" >Honda Civic 3</h5>
                <p>Venda de Honda Civic Branco por X.</p>
            </div>
            </div>

            <div class="carousel-item">
                <img src="imagens/carro.png" class="d-block" width="100%" height="400px" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="color:red;" >Honda Civic 4</h5>
                    <p>Venda de Honda Civic Branco por X.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <h1>Hello, world!</h1>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> -->
  </body>
</html>