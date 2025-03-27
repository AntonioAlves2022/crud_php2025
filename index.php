<?php
  ini_set("display_errors", 1);
  ini_set("display_startup_errors", 1);
  error_reporting(E_ALL);
  include "templates/header.php";
  include "includes/config.php";
  ?>
  <main>
    <h2>Lista de Contatos</h2>
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Nome</th>
          <th>Telefone</th>
          <th>E-mail</th>
          <th>Ações</th>
</tr>
</thead>
<tbody>
  <?php

  $q = "SELECT * FROM contatos";
  $result = mysqli_query($conn, $q);
  while($row = mysqli_fetch_assoc($result)){
    echo "<tr>"; // Cria a linha no html da página
    echo "<td>{$row['id']}</td>";
    echo "<td>{$row['nome']}</td>";
    echo "<td>{$row['telefone']}</td>";
    echo "<td>{$row['email']}</td>";
    echo "<td><a href='editar.php?id={$row['id']}'>Editar</a> | <a href='excluir.php?id={$row['id']}'>Excluir</a></td>";
    echo "</tr>";
  }
  
  ?>
</tbody>
</table>
  </main>
<?php
  include "templates/footer.php";
?>
