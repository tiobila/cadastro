<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form values
    $nome = $_POST["nome"];
    $dataNascimento = $_POST["dataNascimento"];
    $curso = $_POST["curso"];
    $turma = $_POST["turma"];
    $email = $_POST["email"];
    $endereco = $_POST["endereco"];
    $senha = $_POST["senha"];
    $telefoneResponsavel = $_POST["telefoneResponsavel"];
    $genero = $_POST["genero"];

    // You can perform database operations or other processing here

    // For now, just send a success response
    echo json_encode(["success" => true]);
} else {
    // If it's not a POST request, handle accordingly
    echo json_encode(["success" => false, "message" => "Invalid request method"]);
}
?>