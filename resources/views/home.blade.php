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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
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
                    <div class="carousel-item active text-center"> {{--  w-100 w-sm-50  --}}
                        <img src='{{ asset('storage/energia_eolica_renovavel.webp') }}' height="250"
                            class="d-block w-100 w-md-50 mx-auto carrousel-img">
                        <div class="carousel-caption d-block">
                            <h3>Soluções para energia eólica</h3>
                            <p>Soluções com o Elipse E3</p>
                            <button type="button" class="btn btn-primary">Saiba mais &nbsp<i
                                    class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>
                    <div class="carousel-item text-center">
                        <img src='{{ asset('storage/usina_eletrica_por_do_sol.webp') }}' height="250"
                            class="d-block w-100 w-md-50  mx-auto carrousel-img">
                        <div class="carousel-caption d-block">
                            <h5>Soluções para energia elétrica</h5>
                            <p>Descubra mais com as ferramentas D25 e D400.</p>
                            <button type="button" class="btn btn-primary">Saiba mais &nbsp<i
                                    class="bi bi-arrow-right"></i></button>

                        </div>
                    </div>
                    <div class="carousel-item text-center">
                        <img src='{{ asset('storage/pc-3.jpg') }}' height="250"
                            class="d-block w-100 w-md-50 mx-auto carrousel-img">
                        <div class="carousel-caption d-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                            <button type="button" class="btn btn-primary">Saiba mais &nbsp<i
                                    class="bi bi-arrow-right"></i></button>
                        </div>
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
    </div>
    <div class="row d-flex justify-content-center text-center mt-5">
        <div class="card col-10 col-md-5 m-1">
            <div class="card-body">
                <h3 id= "titulo" style="color: blue">NASCIDA PARA INOVAÇÃO</h3>
                <p id="texto">A empresa foi criada a partir da preocupação do fundador em fugir do comodismo que
                    outros
                    programadores haviam desenvolvido, assim, se especializando no ramo da automação.</p>
            </div>
        </div>
        <div class="card col-10 col-md-5 m-1">
            <div class="card-body">
                <h3 style="color: blue">CONHECIMENTOS E SERVIÇOS</h3>
                <p><img src="{{asset('storage/sage-sistema-aberto-de-gerenciamento-de-energia.webp')}}" width="50" height="50"> &nbsp; SAGE (Sistema Aberto de Gerenciamento de Energia)</p>
                <p><img src="{{asset('storage/logo_elipse.webp')}}" width="100" height="50"> &nbsp;ELIPSE E3 - POWER</p>
                <p><img src="{{asset('storage/logo_arteche.webp')}}" width="100" height="50"> &nbsp;SATECH BCU - SCU</p>
            </div>
        </div>
    </div>
    </div>
</body>

</html>


<script>
    
    let texto1 = "A empresa foi criada a partir da preocupação do fundador em fugir do comodismo que" +
                    "outros programadores haviam desenvolvido, assim, se especializando no ramo da automação.";
    
    let texto2 = "A OVER CLK, guiada por valores fundamentais, busca oferecer aos clientes o que há de melhor" +
                    "no mercado de programação, desenvolvendo sistemas personalizados de alta qualidade.";
    
    let texto3 = "Ciente de sua expertise, a empresa assume uma abordagem ativa e positiva ao se deparar com"+
                    "obstáculos, enxergando-os como chances de alcançar os melhores resultados e expandir seu domínio técnico.";
    
    const textos = [
        texto1,
        texto2,
        texto3
    ];

    let titulo1 = "NASCIDA PARA INOVAÇÃO";
    let titulo2 = "FOCO EM EXCELÊNCIA E DOMÍNIO TÉCNICO";
    let titulo3 = "TRANSFORMANDO DESAFIOS EM OPORTUNIDADES";
   
    const titulos = [
        titulo1,
        titulo2,
        titulo3
    ];

    let contador = 0;
    const intervalo = 5000;


    function mudarTexto() {

        document.getElementById('texto').innerText = textos[contador];
        document.getElementById('titulo').innerText = titulos[contador];

        contador++;

        if (contador >= textos.length && contador >= titulos.length) {
            contador = 0;
        }
    }

    setInterval(mudarTexto, intervalo);
</script>
