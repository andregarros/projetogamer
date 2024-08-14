<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro-login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
        
        <table>
            <?php
                require 'conexao.php';
                $sql = "SELECT * FROM usuario";
                $resultado = mysqli_query($connect,$sql);
                while($dados = mysqli_fetch_array($resultado)):
            ?>
            <tr>
                <td><?php echo $dados['login']; ?></td>
                <td><?php echo $dados['senha'];?></td>
            </tr>
            <?php endwhile;?>
        </table>
    
</body>
</html>