<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar e limpar os dados do formulário
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];

    if (!$email) {
        header('Location: login.php?message=E-mail inválido');
        exit();
    }

    // Conectar ao banco de dados
    $dsn = 'mysql:host=127.0.0.1;dbname=logins;charset=utf8;';
    $username = 'root';
    $db_password = '';

    try {
        $conn = new PDO($dsn, $username, $db_password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    } catch (PDOException $e) {
        // Lidar com erros de conexão com o banco de dados
        echo "Erro de conexão: " . $e->getMessage();
        exit();
    }

    // Consultar o banco de dados para o usuário
    $query = 'SELECT * FROM usuarios WHERE email = :email AND senha = :senha';
    $stmt = $conn->prepare($query);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->bindValue(':senha', $password, PDO::PARAM_STR);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$usuario || $password != $usuario['senha']) {
      echo "<script> 
                alert('Email ou senha incorretos! tente novamente');
                window.location.href = 'login.php';
            </script>";
      exit();
  }
  

    // Autenticação bem-sucedida, iniciar a sessão e redirecionar para a página principal
    $_SESSION['usuario'] = [
        'nome' => $usuario['nome'],
        'senha' => $usuario['senha']
    ];

    echo("<script> alert('logado com sucesso');</script>");


    header('Location: team.php');
    exit();
}
?>



<!doctype html>
<html lang="pt-BR">
<head>
  <title>MEDCLIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="imagens/farmacia.png" type="image/x-icon">
</head>
<body>
  <div class="section">
    <div class="container">
      <div class="row full-height justify-content-center">
        <div class="col-12 text-center align-self-center py-5">
          <div class="section pb-5 pt-5 pt-sm-2 text-center">
            <h6 class="mb-0 pb-3"><span>Entrar </span><span>Cadastrar</span></h6>
            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
            <label for="reg-log"></label>
            <div class="card-3d-wrap mx-auto">
              <div class="card-3d-wrapper">
                <div class="card-front">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <a><img src="imagens/remove.bg-removebg-preview.png" alt="farmacia" style="margin-bottom: 30px; width: 70%; margin: 0;" > </a>
                      <h4 class="mb-4 pb-3">Entrar
                      </h4>
                      <form action="login.php" method="post"> <!-- Definindo o método POST -->
                        <div class="form-group">
                          <input type="email" class="form-style" placeholder="E-mail" name="email" required> <!-- Adicionando o atributo name -->
                          <i class="input-icon uil uil-at"></i>
                        </div>
                        <div class="form-group mt-2">
                          <input type="password" class="form-style" placeholder="Senha" name="password" required> <!-- Adicionando o atributo name -->
                          <i class="input-icon uil uil-lock-alt"></i>
                        </div>
                        <button type="submit" class="btn mt-4">Entrar</button>
                      </form>
                      <p class="mb-0 mt-4 text-center"><a href="index.html" class="link">Esqueceu sua
                          senha?</a></p>
                    </div>
                  </div>
                </div>
                <div class="card-back">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <form action="register.php" method="post">
                        <h4 class="mb-3 pb-3">Cadastrar</h4>
                        <div class="form-group">
                          <input type="text" class="form-style" placeholder="Nome completo" name="name" required>
                          <i class="input-icon uil uil-user"></i>
                        </div>
                        <div class="form-group mt-2">
                          <input type="text" class="form-style" placeholder="CPF" name="cpf" required>
                          <i class="input-icon uil uil-phone"></i>
                        </div>
                        <div class="form-group mt-2">
                          <input type="text" class="form-style" placeholder="Número de telefone" name="phone" required>
                          <i class="input-icon uil uil-phone"></i>
                        </div>
                        <div class="form-group mt-2">
                          <input type="email" class="form-style" placeholder="E-mail" name="email" required>
                          <i class="input-icon uil uil-at"></i>
                        </div>
                        <div class="form-group mt-2">
                          <input type="password" class="form-style" placeholder="Senha" name="pass" required> 
                          <i class="input-icon uil uil-lock-alt"></i>
                        </div>
                        <div class="form-group mt-2">
                          <input type="date" class="form-style" placeholder="Data de Nascimento" name="nasc" viewbox="false" required>
                          <i class="input-icon uil uil-phone"></i>

                        </div>
                        <button type="submit" class="btn mt-4" name="send">Cadastrar</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
