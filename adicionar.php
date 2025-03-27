<?php include "templates/header.php";
?>
<main>
    <h2>Adicionar novo contato</h2>
    <hr/>
    <form action="process.php" method="post" >
    <input type="hidden" name="acao" value="add"/>

    <label for="nome">Nome do contato:</label>
    <input type="text" name="nome" required/><br/>
    <br/>

    <label for="email">E-mail do contato:</label>
    <input type="email" name="email" required/><br/>
    <br/>

    <label for="telefone">Telefone do contato:</label>
    <input type="text" name="telefone" required/><br/>
    <br/>

    <button type="submit">Salvar</button>
</form>
</main>
<?php
include "templates/footer.php";
?>