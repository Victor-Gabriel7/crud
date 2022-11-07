<?php
    require ('bd.php');
    if(isset($_POST['enviar'])){
        $user_name = limpando($_POST['user_name']);
        $email_user = limpando($_POST['user_email']); 
        
        $sql = $pdo->prepare("INSERT INTO cli VALUE(NULL,?,?)");
        $sql->execute(array($user_name,$email_user));
    } 

    //Função para limpar os caracteres
    function limpando($var){
        $var = trim($var);
        $var = stripslashes($var);
        $var = htmlspecialchars($var);
        return $var;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro User</title>
        <link href="css/style.css" rel="stylesheet"> 
    </head>

    <body>
    <div class="container-p">
        <h1>Cadastre Pessoas</h1>
        <form method="post">
            <label>Insira seu nome aqui: </label>
            <input type="text" name="user_name">
            <label>Insira seu email: </label>
            <input type="email" name="user_email">
            <button type="submit" name="enviar">Enviar</button>
        </form>

        <h2>Listando os usuários cadastrados</h2>
        <?php
            $sql = $pdo->prepare("SELECT * FROM cli");
            $sql->execute();
            $lista = $sql->fetchall();

            if (count($lista) > 0){
                echo "
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Atualizar || Excluir</th>
                        </tr>
                    ";
                foreach($lista as $chave => $valor){
                    echo "
                        <tr>
                            <th>".$valor['id']."</th>
                            <th>".$valor['nome_cli']."</th>
                            <th>".$valor['email']."</th>
                            <th><a class='button-blue button' href='edit.php?id=".$valor['id']."'>Atualizar</a> || <a class='button-red button' href='delete.php?id=".$valor['id']."'>Ecluir</a></th>
                        </tr>     
                    ";
                } 
            }else{
                echo "Nenhum dado foi encontrado";
            }
            echo "</table>";
        ?>
    </div>
    </body>
</html>
