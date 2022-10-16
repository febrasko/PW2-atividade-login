<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">  
</head>
<body class="margin_auto">
    <?php
    session_start();
    if (isset($_SESSION['user']) == false || $_POST == []){
        echo "<p>Só é possível acessar essa página realizando um login e inserindo os dados na página anterior</p>";
    } else {
        $titulo = $_POST['titulo'];
        $conteudo = $_POST['conteudo'];
        $autor = $_POST['autor'];
        if ($titulo == '' || $conteudo == '' || $autor == '') {
            echo "<p>Preencha todos os campos!</p>";
        } else {
    ?>
    <div class="areatitulo">
        <img src="img/chainsawbanner.jpg" width="100%">
        <h1 class="titulo"> <?= $titulo ?> </h1>
    </div>
    <section>
        <p> <?= $conteudo ?> </p>
        <p class="direita"> <?= $autor ?> </p>
    </section>
    <?php
        }
    }
    ?>
</body>
</html>
