@extends("template-padrao")
@section("css")
    <title>Adoção de Animais</title>
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
@endsection
@section("conteudo")
            <div class="conteudo-principal">
                <h1 class="conteudo-principal-escrito">Veja seu melhor amigo aqui e o leve para sua família</h1>
                <button class="conteudo-principal-escrito-botao">ME ADOTE</button>
            </div>
            <img class="conteudo-principal-escrito-imagem" src="{{asset("img/Dogs.jpg")}}" alt="Imagem Carrossel">
@endsection
