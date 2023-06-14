<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Deseja realmente exluir esse aluno?</h3>  

<form action="funcoes/deletar.php" method="post">
  <input type="hidden" name="id">
  <a href="index.php">Não</a>
  <input type="submit" value="Sim">
</form>
</body>
</html>