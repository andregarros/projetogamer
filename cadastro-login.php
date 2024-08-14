<?php
require_once "conexao.php";


if(isset($_POST['btn-entrar'])) {
    // Conectar ao banco de dados (certifique-se de que $connect esteja definido corretamente)
    $login = mysqli_real_escape_string($connect, $_POST['email']);
    $senha = mysqli_real_escape_string($connect, $_POST['senha']);
    
    // Verificar se o e-mail já está cadastrado
    $sql = "SELECT * FROM usuario WHERE login = '$login'";
    $result = mysqli_query($connect, $sql);
    if($login === 'admin@gmail.com' && $senha === '123'){
        header('Location: amin.php');
    }
    if (mysqli_num_rows($result) > 0) {
        // E-mail já está cadastrado
        $_SESSION['mensagem'] = '<p class="cor">email já esta sendo usado por outro usuario</p>';
    } else {
        // E-mail não encontrado, pode cadastrar o novo usuário
        // Em uma aplicação real, você deve usar hashing de senha (exemplo: password_hash())
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
        
        // Corrigido: Remover aspas simples ao redor dos nomes de tabela e coluna
        $sql = "INSERT INTO usuario (login, senha) VALUES ('$login', '$senha_hash')";

        if (mysqli_query($connect,$sql)) {
            header('Location:index.php');
            $_SESSION['mensagem'] = 'cadastrado com sucesso';
            
        } else {
            header('Location:index.php');
            $_SESSION['mensagem'] = 'erro ao cadastrar';
    
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro-login</title>
    <link rel="stylesheet" href="cadastro-login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
        
        <div id="login">
            <form action="" autocomplete="off" method = post>
                    <img src="imagens/ghost.png" alt="" id="ghost-icone">
                    <h1>LOGIN</h1>
                    <div class="box-login">
                        <input type="email" name="email" id="email" placeholder=" EMAIL" required>
                        <i class='bx bxs-user'></i>
                    </div>

                    <div class="box-login">
                        <input type="password" name="senha" id="senha" placeholder="SENHA" required>
                        <i class='bx bxs-lock-alt'  id="icone-senha"></i id>
                    </div>

                <button type="submit" name='btn-entrar'>LOGIN</button>
            </form>
        </div>
    
</body>
</html>