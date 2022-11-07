<?php
    require ('bd.php');

    $iduser = $_GET['id'];
    
    $sql = $pdo->prepare("SELECT * FROM cli WHERE id=$iduser");
    $sql->execute();
    $atdados = $sql->fetchAll();
    
    foreach($atdados as $chaves => $valor){
        $userat = $valor['nome_cli'];
        $emailat = $valor['email'];
    }

    if(isset($_POST['at'])){
    
        if(empty($_POST['atnome']) || empty($_POST['atemail'])){
            $erro = "Não permitimos que você envie campos vazios";
        }else{
            $user = $_POST['atnome'];
            $email = $_POST['atemail'];
            $sql = $pdo->prepare("UPDATE cli SET nome_cli=?, email=? WHERE id=?");
            $sql->execute(array($user,$email,$iduser));
            header('Location: main.php');
        } 
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Editar</title>
    </head>
    <body>
        <h1>Atualizar Dados</h1>
        <form method="post">
        <label>Atualizar Nome: </label>
        <input type="text" name="atnome" value="<?php echo $userat ?>">
        <label>Atualizar Email: </label>
        <input type="email" name="atemail" value="<?php echo $emailat ?>">
        <button name="at" type="submit">Atualizar</button> 
        <span><?php echo $erro ?></span>    
    </form>
    </body>
</html>

