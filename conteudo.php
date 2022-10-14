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
            require_once "conteudo.html";
        }
    }
    ?>
</body>
</html>