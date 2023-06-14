<?php
$conexao = new mysqli ('localhost','root','12345',);

$sql = "UPDATE `funcionarios` SET `nome` = '{$_POST['nome']}', `genero` = '{$_POST['genero']}',`dtNascimento` = '{$_POST['dtNascimento']}', `cpf` = '{$_POST['cpf']}', `cns` = '{$_POST['cns']}', `celular` = '{$_POST['celular']}', `email` = '{$_POST['email']}', `status` = '{$_POST['status']}', `dtCadastro` = '{$_POST['dtCadastro']}', `numConselho` = '{$_POST['numConselho']}', `cargos_id` = '{$_POST['cargos_id']}'            WHERE `id` = '{$_POST['id']}'";

$conexao->query($sql);

  echo("Cargo atualizado com sucesso!");

$conexao -> close();

header("Refresh:3;/sga/cargos/index.php");
?>