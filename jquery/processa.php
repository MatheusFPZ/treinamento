<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nome"]) && isset($_POST["email"])) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];

        echo "<h2>Dados recebidos</h2>";
        echo "<p>Nome: " . $nome . "</p>";
        echo "<p>Email: " . $email . "</p>";
    } else {
        echo "Erro: Preencha todos os campos";
    }
} else {
    echo "Erro: Método de requisição inválido";
}
?>