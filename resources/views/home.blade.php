<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OVERCLK - Automações</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container-flex">
        <div class="row">
            <nav class="navbar me-auto bg-body-white shadow-sm">
                <div class="col-7">
                    <a class="navbar-brand" href="#">
                        <img src='{{ asset('storage/logo.png') }}' width="auto" height="60" />
                    </a>
                </div>
                <div class="col-5 d-none d-md-block">
                    <span class="navbar-text p-2">
                        PROJETOS
                    </span>
                    <span class="navbar-text p-2">
                        SOLUÇÕES
                    </span>
                    <span class="navbar-text p-2">
                        QUEM SOMOS
                    </span>
                </div>
            </nav>
        </div>
        <div class="row">
            <div id="carouselExample" class="carousel carousel-dark slide mt-5">
                <div class="carousel-inner">
                    <div class="carousel-item active text-center">
                        <img src='{{ asset('storage/pc-1.webp') }}' height="250" class="d-block w-50 mx-auto">
                        <button type="button" class="btn btn-primary mt-2">Saiba mais</button>
                    </div>
                    <div class="carousel-item text-center">
                        <img src='{{ asset('storage/pc-2.jpg') }}' height="250" class="d-block w-50 mx-auto">
                        <button type="button" class="btn btn-primary">Saiba mais</button>
                    </div>
                    <div class="carousel-item text-center">
                        <img src='{{ asset('storage/pc-3.jpg') }}' height="250" class="d-block w-50 mx-auto">
                        <button type="button" class="btn btn-primary">Saiba mais</button>
                    </div>
                    
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-5">
            <div class="card col-2 m-1">
                <div class="card-body">
                  This is some text within a card body.
                </div>
              </div>
              <div class="card col-2 m-1">
                <div class="card-body">
                  This is some text within a card body.
                </div>
              </div>
              <div class="card col-5 m-1">
                <div class="card-body">
                  This is some text within a card body.
                </div>
              </div>
        </div>
    </div>
</body>

</html>
