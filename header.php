<!DOCTYPE html>
<html>

<head>
    <title>Área restrita</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/font/fontawesome.css">
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="stylesheet" type="text/css" href="css/all.css">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<meta charset="utf-8">
<body>
    <!-- MENU -->
        <nav class=" navbar navbar-expand-lg navbar-light" style="background:rgba(1,1,1,0.2);">
            <span class="navbar-brand">
                <img id="logo" src="img/WG.svg">    
            </span>
            <!--LINKS -->
            <div id="menudaarearestrita" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-md-auto" style="padding-right: 50px;">
                    <li class="nav-item active">
                    <?php 
                    session_start();
                    if (isset($_SESSION['login'])) { ?>
                    <a href="logout.php" class="btn btn-danger">
                        <?php echo $_SESSION['usuario']; ?>
                         <i style="font-size: 20px;" class="fas fa-sign-out-alt"></i>
                    </a>
                    <?php } ?>
                </li>
                </ul>
                
            </div>
            <!-- Fim dos links -->
        </nav>
    <!-- Fim do menu -->