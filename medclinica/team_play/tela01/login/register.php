<?php
// Configuração do banco de dados
$db = [
    'host' => '127.0.0.1',
    'user' => 'root',
    'pass' => '', // Adicione sua senha aqui, se houver
    'name' => 'logins'
];

// Conexão com o banco de dados usando MySQLi
$conn = mysqli_connect($db['host'], $db['user'], $db['pass'], $db['name']);

// Verificação da conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
} else {
    echo "Conectado com sucesso";
}

// Processamento do envio do formulário
if (isset($_POST['send'])) {
    // Obter os dados do formulário e evitar SQL injection
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    
    // Preparar a declaração SQL
    $stmt = mysqli_prepare($conn, "INSERT INTO usuarios (nome, email, senha, phone) VALUES (?, ?, ?, ?)");

    // Verificar se a preparação da declaração foi bem-sucedida
    if ($stmt) {
        // Vincular parâmetros à declaração
        mysqli_stmt_bind_param($stmt, 'ssss', $name, $email, $pass, $phone); // 'ssss' significa que esperamos quatro strings como parâmetros

        // Executar a declaração
        if (mysqli_stmt_execute($stmt)) {
            header("Location: certo.php");
            exit(); // Terminar o script após redirecionamento
        } else {
            echo "Erro ao executar a declaração: " . mysqli_stmt_error($stmt);
        }

        // Fechar a declaração
        mysqli_stmt_close($stmt);
    } else {
        echo "Erro ao preparar a declaração: " . mysqli_error($conn);
    }
}

// Fechar conexão MySQL
mysqli_close($conn);
?>
