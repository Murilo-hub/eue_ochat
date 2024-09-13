<?php
// Verifica se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Coleta e sanitiza os dados diretamente
    $user = htmlspecialchars(trim($_POST['user']));
    $email = htmlspecialchars(trim($_POST['email']));
    $senha = htmlspecialchars(trim($_POST['senha']));
    $curso = htmlspecialchars(trim($_POST['curso']));
    $periodo = htmlspecialchars(trim($_POST['periodo']));
    
    // Exibe os dados recebidos
    echo "<!DOCTYPE html>
    <html lang='pt-BR'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Dados Recebidos</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f0f2f5;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .container {
                background-color: #ffffff;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                max-width: 400px;
                width: 100%;
                padding: 20px;
                box-sizing: border-box;
            }
            h1 {
                text-align: center;
                color: #333;
            }
            p {
                margin: 10px 0;
                color: #555;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h1>Dados Recebidos</h1>
            <p><strong>Nome:</strong> " . $user . "</p>
            <p><strong>Email:</strong> " . $email . "</p>
            <p><strong>Senha:</strong> " . $senha . "</p>
            <p><strong>Curso:</strong> " . $curso . "</p>
            <p><strong>Período:</strong> " . $periodo . "</p>
        </div>
    </body>
    </html>";
} else {
    echo "<p>Por favor, envie o formulário.</p>";
}
?>
