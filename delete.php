<?php
    require ('bd.php');

    $iddelete = $_GET['id'];   
    
    $sql = $pdo->prepare("SELECT * FROM cli WHERE id=$iddelete");
    $sql->execute();
    $listdel = $sql->fetchAll();

    foreach($listdel as $chave => $valor){
        $userdel = $valor['nome_cli'];
        $emaildel = $valor['email'];
    }    

    if (isset($_POST['confirm']) || isset($_POST['cancelar'])){
    
        if(isset($_POST['confirm'])){
            $sql = $pdo->prepare("DELETE FROM cli WHERE id=$iddelete");
            $sql->execute();
            header("Location: main.php");
        }else{
            header("Location: main.php");
        }
    }
?>

<!DOCTYPE hmtl>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Excluir</title>
    </head>
    <body>
        <h1>Deleta dados</h1>
        <form method="post">
            <label>Tem certeza que deseja exluir<br>O usuário: <?php echo $userdel ?><br>com o email: <?php echo $emaildel ?></label>
            <br>
            <button type="submit" name="confirm">Confirmar</button><button type="submit" name="cancelar">Cancelar</button>
        </form>
    </body>
</html>
 
