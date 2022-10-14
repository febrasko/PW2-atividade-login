<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">  
</head>
<body>
    <?php 
        session_start();
        if (isset($_SESSION['user']) == false && $_POST == []){
                echo "<p>Só é possível acessar essa página realizando um login</p>";
        } elseif (isset($_SESSION['user']) == false) {
            $user = $_POST['user'];
            $senha = $_POST['senha'];
            if ($user == '' || $senha == '') {
                echo "<p>Preencha todos os campos!</p>";
            } elseif ($user != 'etec' || $senha != 'etec') {
                echo "<p>Usuário ou senha estão incorretos!</p>";
            } else {
                $_SESSION['user'] = $user;
                require_once "inserir-dados.html"; 
            }
        } else {
            require_once "inserir-dados.html"; 
        }
    ?>
</body>
</html>