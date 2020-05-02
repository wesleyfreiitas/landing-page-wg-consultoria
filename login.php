<!DOCTYPE html>
<html>

<head>
    <title>Área restrita</title>
</head>
<link rel="stylesheet" type="text/css" href="css/font/fontawesome.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<link rel="stylesheet" type="text/css" href="css/all.css">
<link rel="shortcut icon" href="img/favicon.ico">
<meta charset="utf-8">

<body>
    <div align="center" class="container" id="elemento">
        <div class="text-center">
            <img id="login-recuperasenha" src="img/WG.svg">
        </div>
        <form action="validalogin.php" method="POST" class="content">
            <div class="form-group">
                <input type="text" class="form-control" name="usuario" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="senha" placeholder="Digite sua senha">
            </div>
            <div class="form-group">
                <button type="submit" value="" class="btn btn-danger form-control">Entrar</button>
                <i class="fas fa-unlock-alt"></i>
                <a href="recuperarSenha.html" target="blank">Recuperar minha senha</a>
            </div>
        </form>
      
                <?php if(isset($_GET['erro'])){ ?>

                    <div class="alert alert-danger" role="alert">
                        Usuário e/ou senha inválidos.
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>
    <script src="js/fontawesome.js"></script>
    <script src="js/all.js"></script>
    <script src="bootstrap\jquery.js"></script>
    <script src="bootstrap\js\bootstrap.bundle.min.css"></script>
</body>

</html>