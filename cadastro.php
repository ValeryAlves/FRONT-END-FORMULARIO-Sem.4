<?php
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $dataNascimento = $_POST["dataNascimento"];
    $sexo = $_POST["sexo"];
    $telefone = $_POST["telefone"];

   
    echo "<div style='margin: 20px auto; max-width: 600px; text-align: center;'>";
    echo "<h2>Dados Enviados</h2>";
    echo "<p><b>Nome:</b> $nome</p>";
    echo "<p><b>Email:</b> $email</p>";
    echo "<p><b>CPF:</b> $cpf</p>";
    echo "<p><b>Data de Nascimento:</b> $dataNascimento</p>";
    echo "<p><b>Sexo:</b> $sexo</p>";
    echo "<p><b>Telefone:</b> $telefone</p>";
    echo "</div>";
}
?>
