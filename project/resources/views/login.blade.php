@extends("template-padrao")
@section("css")
    <title>Login</title>
    <link rel="stylesheet" href="{{asset("css/login.css")}}">
@endsection
@section("conteudo")
    <br>
    <div class="title">

        <h1 id="title">Insira Usuário e Senha</h1>
        <p id="subtitle">Complete suas informações</p>
        <br>

    </div>

    <form>

        <div class="campo">
            <label for="email"><strong>E-mail</strong></label>
            <input type="email" nome="email" id="email" required>
        </div><!--e-mail-->

        <div class="campo">
            <label for="password"><strong>Senha</strong></label>
            <input type="password" nome="password" id="password" required>
        </div><!--senha-->

        <br>
        <br>

        <button class="botao" type="submit">Concluido</button>

    </form>
@endsection
