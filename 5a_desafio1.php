<?php

if (isset($_POST["nome"]) && isset($_POST["ano_nascimento"])) {

    $nome = $_POST["nome"];
    $anoNascimento = $_POST["ano_nascimento"];

    $anoAtual = date("Y");
    $idade = $anoAtual - $anoNascimento;

    if ($idade >= 18) {

        echo "<h2>Acesso permitido, " . $nome . "!</h2>";
        echo "Você tem " . $idade . " anos.";

        $dados = $nome . " - " . $anoNascimento . " - " . $idade . " anos" . PHP_EOL;

        file_put_contents("log_acessos.txt", $dados, FILE_APPEND);

    } else {

        echo "<h2>Acesso negado, " . $nome . "!</h2>";
        echo "Você tem " . $idade . " anos.";
    }
}

?>

<h2>Verificação de Acesso</h2>

<form method="POST">

Nome:
<input type="text" name="nome">

<br><br>

Ano de Nascimento:
<input type="number" name="ano_nascimento">

<br><br>

<input type="submit" value="Verificar">

</form>



