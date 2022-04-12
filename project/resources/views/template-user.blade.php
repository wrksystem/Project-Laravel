<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield("css")
</head>
<body>

    <div>

        <h1 id="title">Registro de Usuário</h1>
        <p id="subtitle">Complete suas informações</p>
        <br>

    </div>

    <form>

        <fieldset class="grupo">
            <div class="campo">
                <label for="nome"><strong>Nome</strong></label>
                <input type="text" nome="nome" id="nome" required>
            </div>

            <div class="campo">
                <label for="sobrenome"><strong>Sobrenome</strong></label>
                <input type="text" name="sobrenome" id="sobrenome" required>
            </div>

            <div class="campo">
                <label for="cpf"><strong>CPF</strong></label>
                <input type="text" name="cpf" id="cpf"
                        pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
                        title="Digite um cpf no formato: xxx.xxx.xxx-xx">
                <input type="submit" value="verificar">
            </div>

        </fieldset>

        <div class="campo">
            <label for="email"><strong>E-mail</strong></label>
            <input type="email" nome="email" id="email" required>
        </div><!--e-mail-->

        <div class="campo">
            <label for="email"><strong>Confirmação E-mail</strong></label>
            <input type="email" nome="email" id="email" required>
        </div><!--confirmação-e-mail-->

        <div class="campo">
            <label for="password"><strong>Senha</strong></label>
            <input type="password" nome="password" id="password" required>
        </div><!--senha-->

        <div class="campo">
            <label for="password"><strong>Confirmação de Senha</strong></label>
            <input type="password" nome="password" id="password" required>
        </div><!--confirmação-senha-->

        <div class="campo">
            <label><strong>Estado Civil</Strong></label>
            <label>
                <input type="radio" name="casado" id="casado" checked>Casado
            </label>
            <label>
                <input type="radio" name="solteiro" id="solteiro">Solteiro
            </label>
            <label>
                <input type="radio" value="outro" id="outro">Outro
            </label>
        </div><!--estado civil-->

        <button class="botao" type="submit">Concluido</button>

    </form>

</body>
</html>
