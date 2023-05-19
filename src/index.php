<?php require_once __DIR__ . '/gerador_senha.php';?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <title>Gerador De Senhas</title>
</head>
<body>
    <div class="centralizado">
        <h1>Bem-vindo ao gerador de Senhas!</h1>
        <form action="" method="post">
            <div class="caracteres">
                <label for="quantidade">Quantidade de Caracteres</label>
                <br>
                <input type="number" name="quantidade" id="quantidade" value="<?= @$_POST['quantidade'] ?>">
            </div>
            <div class="opcoes_caracteres">
                <ul>
                    <li>
                        <input type="checkbox" value="Maiusculas" name="maiusculas" id="chk-maiusculas">
                        <label class="checkbox-label" for="chk-maiusculas"><span>Maiúsculas</span></label>
                    </li>
                    <li>
                        <input type="checkbox" value="Minusculas" name="minusculas" id="chk-minusculas">
                        <label class="checkbox-label" for="chk-minusculas"><span>Minúsculas</span></label>
                    </li>
                    <li>
                        <input type="checkbox" value="Numeros" name="numeros" id="chk-numeros">
                        <label class="checkbox-label" for="chk-numeros"><span>Números</span></label>
                    </li>
                    <li>
                        <input type="checkbox" value="Caracteres" name="caracteres" id="chk-caracteres">
                        <label class="checkbox-label" for="chk-caracteres"><span>Caracteres</span></label>
                    </li>
                </ul>
            </div>
            <div class="botao">
                <button type="submit" name="gerar">Gerar Senha</button>
            </div>
        </form>

        <p class="border">
            <input type="text" id="senhaGerada" value="<?= senha_gerada(@$quantidade,@$maiusculas,@$minusculas,@$caracteres,@$numeros) ?>">
            <button onclick="copiarSenha()">Copiar</button>
        </p>
    </div>

    <script>
        function copiarSenha() {
            var senhaInput = document.getElementById("senhaGerada");
            senhaInput.select();
            senhaInput.setSelectionRange(0, 99999);
            document.execCommand("copy");
            alert("Senha copiada para a área de transferência!");
        }
</script>

</body>
</html>