<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield("css")
</head>
<body>
    <header class="cabecalho">
        <nav class="cabecalho-menu">
           <ul>
                <a class="cabecalho-menu-item" href="{{route("home")}}">Home</a>
                <a class="cabecalho-menu-item" href="{{route("galery")}}">Galeria</a>
                <a class="cabecalho-menu-item" href="{{route("adocao")}}">Adoção</a>
                <a class="cabecalho-menu-item" href="{{route("about")}}">Sobre nós</a>
                <a class="cabecalho-menu-item" href="{{route("login")}}">LOGIN</a>
                <a class="cabecalho-menu-item" href="{{route("cadastro")}}">Registro</a>
            </ul>
        </nav>
    </header>

    <main>
        <section class="conteudo">

            @yield("conteudo")

        </section>
    </main>

    <footer class="rodape">
        <nav class="rodape-menu">
        <a class="rodape-menu-item" href="{{route("about")}}">Sobré Nós</a>
        <a class="rodape-menu-item" href="{{route("saibamais")}}">Saiba Mais</a>
        <a class="rodape-menu-item" href="{{route("participe")}}">Participe</a>
        </nav>
    </footer>

</body>
</html>
