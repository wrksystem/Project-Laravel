@extends("template-padrao")
@section("css")
    <title>Adoção de Animais</title>
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto&display=swap" rel="stylesheet">
    <script href="{{asset("js/script.js")}}" ></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection
@section("conteudo")
            <div class="conteudo-principal">
                <h1 class="conteudo-principal-escrito">Veja seu melhor amigo aqui e o leve para sua família</h1>
                <button class="conteudo-principal-escrito-botao">ME ADOTE</button>
            </div>

            <div class="carousel-slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                  <div class="carousel-item active">
                    <img src="{{asset("img/slide1.jpg")}}" class="d-block w-100" alt="...">
                  </div>

                  <div class="carousel-item">
                    <img src="{{asset("img/slide2.jpg")}}" class="d-block w-100" alt="...">
                  </div>

                  <div class="carousel-item">
                    <img src="{{asset("img/slide3.jpg")}}" class="d-block w-100" alt="...">
                  </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>

              </div>

            <!--<div class="conteudo-principal-carousel">
                <div class="conteudo-principal-carousel-container" id="img">
                    <img src="{{asset("img/Dogs.jpg")}}" alt="Imagem Carrossel">
                    <img src="{{asset("img/pets3.jpg")}}" alt="Imagem Carrossel">
                </div>
            </div>-->

@endsection
