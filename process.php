<?php
include "includes/config.php";

if(isset($_POST['acao'])){
    $acao = $_POST['acao'];
    $nome = mysqli_real_escape_string($conn, $_POST["nome"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $telefone  = mysqli_real_escape_string($conn, $_POST["telefone"]);

    if($acao === 'add'){
        $sql = "INSERT INTO contatos(nome, email, telefone) ";
        $sql.="VALUES ('$nome', '$email', '$telefone')";
        mysqli_query($conn, $sql);
        header("Location:index.php "); // redireciona
    }elseif($acao === 'edit'){
        $id = (int)$_POST['id']; // converter o id p/int
        $sql = "UPDATE contatos SET ";
        $sql.="nome = '$nome', ";
        $sql.="telefone = '$telefone', ";
        $sql.="email = '$email' ";
        $sql.="WHERE id = $id";

        mysqli_query($conn, $sql);
        header("Location:index.php");

    }
}
?>