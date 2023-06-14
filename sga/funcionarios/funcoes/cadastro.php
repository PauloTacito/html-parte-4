<?php 
$conexao = new mysqli ('localhost','root','12345','sga');

 $sql = "INSERT INTO `funcionarios` (`nome`, `genero`, `dtNascimento`, `cpf`, `cns`, `celular`, `email`, `status`, `dtCadastro`, `numConselho`) VALUES ('{$_POST['nome']}' '{$_POST['genero']}' '{$_POST['dtNascimento']}' '{$_POST['cpf']}' '{$_POST['cns']}' '{$_POST['celular']}' '{$_POST['email']}' '{$_POST['status']}' '{$_POST['dtCadastro']}' '{$_POST['numConselho']}')";

$conexao -> query($sql);

 echo ("Cargo adicionado com sucesso!");

 $conexao -> close();

 header("Refresh:3;/sga/funcionarios/index.php");
?>