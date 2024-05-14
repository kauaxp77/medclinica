<?php 

session_start ();

?>


<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#000">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="icon" href="imagens/farmacia.png" type="image/x-icon">
    <title>MED CLIN</title>
</head>

<body>
    <header class="header">
        <div class="container header__container">
            <div class="header__logo">

            </div>
            <div class="header__menu">
                <nav id="navbar" class="header__nav collapse" style="display: flex; justify-content: space-around; align-items: center;">
                <img href ="index.html" class="site__img" src="imagens/remove.bg-removebg-preview.png" alt="Ilustração de agenda" style="width: 20%; margin: 0; ">
                <a href="index.php"></a>
                    <ul class="header__elenco">
                        <li class="header__el"><a href="#" class="header__link">Início</a></li>
                        <li class="header__el"><a href="#" class="header__link">Contate-nos</a></li>
                        <li class="header__el header__el--blue">
                            <a href="login.php" method="post" class="btn btn--white">Entrar →</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="sect sect--padding-top" style="  background-color: #3a9fff;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site">
                        <h1 class="site__title">Med Clin</h1>
                        <h2 color= "#fff" class="site__subtitle">Ajudando você a agendar sua consulta com praticidade e qualidade.</h2>
                        <img class="site__img" src="imagens/remove.bg-removebg-preview.png" alt="Ilustração de agenda" style="margin-bottom: 20px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

<div>
<img class="site__img" src="imagens/medico.jpg" alt="hospital" style="margin-bottom: 30px;">
<img src="imagens/hospital.jpg" alt="hos" style="margin-bottom: 30px; width: 20%; margin: 0;">
</div>
    <footer class="footer">
        <div class="container footer__container">
            <div class="footer__brand">
                <h1 class="footer__title">  </h1>
            </div>
            <div class="footer__links">
                <ul class="footer__list">
                    <li class="footer__el"><a href="index.php" class="footer__link">Home</a></li>
                    <li class="footer__el"><a href="#" class="footer__link">Contate-nos</a></li>
                </ul>
            </div>
            <div class="footer__social">
                <ul class="footer__list">
                    <li class="footer__el"><a href="#" class="footer__link">Facebook</a></li>
                    <li class="footer__el"><a href="#" class="footer__link">Twitter</a></li>
                    <li class="footer__el"><a href="#" class="footer__link">Instagram</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</body>

</html>
