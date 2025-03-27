<?php include "templates/header.php";
include "includes/config.php";

//Filtrar a tabela para mostrar apenas o contato
// que tem o id igual ao parametro da url
$id = (int)$_GET['id'];

$sql = "SELECT * FROM contatos WHERE id = $id";
$result = mysqli_query($conn, $sql);
$contato = mysqli_fetch_assoc($result);


?>
<main>
    <h2>Editar contato</h2>
    <hr/>
    <form action="process.php" method="post" >
    <input type="hidden" name="acao" value="edit"/>
    <input type="hidden" name="id" value="<?php echo $contato['id']?>"/>

    <label for="nome">Nome do contato:</label>
    <input type="text" name="nome" value="<?php echo $contato['nome']?>" required/><br/>
    <br/>

    <label for="email">E-mail do contato:</label>
    <input type="email" name="email"  value="<?php echo $contato['email']?>"required/><br/>
    <br/>

    <label for="telefone">Telefone do contato:</label>
    <input type="text" name="telefone"  value="<?php echo $contato['telefone']?>"required/><br/>
    <br/>

    <button type="submit">Salvar</button>
</form>
</main>
<?php
include "templates/footer.php";
?>