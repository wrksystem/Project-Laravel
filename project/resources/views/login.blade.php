@extends("template-padrao")
@section("css")
    <link rel="stylesheet" href="{{asset("css/login.css")}}">

    <title>Login</title>
</head>
<body>

    <div>

        <h1 id="title">Insira Usuário e Senha</h1>
        <p id="subtitle">Complete suas informações</p>
        <br>

    </div>

    <form>

        </fieldset>

        <div class="campo">
            <label for="email"><strong>E-mail</strong></label>
            <input type="email" nome="email" id="email" required>
        </div><!--e-mail-->

        <div class="campo">
            <label for="password"><strong>Senha</strong></label>
            <input type="password" nome="password" id="password" required>
        </div><!--senha-->

        <button class="botao" type="submit">Concluido</button>

    </form>

</body>
</html>
