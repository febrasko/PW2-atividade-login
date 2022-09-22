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
    if ($_POST == []) {
            echo "<p>Só é possível acessar essa página realizando um login</p>";
    } else {
        $user = $_POST['user'];
        $senha = $_POST['senha'];
        if ($user == '' || $senha == '') {
            echo "<p>Preencha todos os campos!</p>";
        } elseif ($user != 'dibilowas' || $senha != 'awibilay') {
            echo "<p>Usuário ou senha estão incorretos!</p>";
        } else {
    ?>

    <h1>Escreva as informações</h1>
    <form action="pagina2.php" method="post">
        <p>Titulo: <input type="text" name="titulo"></p>
        <p>Conteúdo: </p>
        <textarea name="conteudo" id="conteudo" cols="60" rows="20"></textarea>
        <p>Autor: <input type="text" name="autor"></p>
        <p><input type="submit" value="Enviar"></p>
    </form>

    <?php
    }}
    ?>
</body>
</html>