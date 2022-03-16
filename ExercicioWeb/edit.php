<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar</title>
</head>
<body>
   <?php
      // Inclui constantes para conexão ao BD
      include('conexao.php');
      // Buscar no BD o aluno conforme parâmetro ID
      $pdo = new PDO(host,usuario,senha);
      $cmp = $pdo->prepare('select id, nome, endereco from aluno where id=:id');
      $cmp->execute([':id'=>$_GET['id']]);
      $aluno = $cmp->fetch(PDO::FETCH_ASSOC);
   ?>
   <form action="update.php" method="post">
      <div>
        <input type="hidden" name="txtid" value="<?= $aluno['id'] ?>"/>
      </div>
      <div>
        <label>Nome<input type="text" name="txtnm" maxlength="100" pattern="[A-Za-z ]+" value="<?= $aluno['nome'] ?>"/></label>
      </div>
      <div>
        <label>Endereço<input type="text" name="txted" maxlength="100" pattern="[A-Za-z ]+" value="<?= $aluno['endereco'] ?>"/></label>
      </div>
      <div>
        <input type="submit" value="Enviar"/>
        <input type="reset" value="Limpar"/>
        <a href="index.php">Voltar</a>
      </div>
   </form>
</body>
</html>