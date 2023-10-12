<?php
include_once("config.php");

// Validação e autenticação do usuário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["loginscol"];
    $senha = $_POST["senha"];

    // Consulta para verificar se o usuário existe com base no email (loginscol) e senha
    $sql = "SELECT idlogins FROM logins WHERE loginscol = '$email' AND senha = '$senha'";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // Usuário autenticado com sucesso
        header("Location: telacliente.php");
        exit; // Certifique-se de encerrar o script após o redirecionamento
    } else {
        // Login falhou
        echo "Login falhou. Por favor, verifique suas credenciais.";
    }
}
?>
