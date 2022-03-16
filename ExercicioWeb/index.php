<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Listar</title>
</head>
<body>
  	<?php
  	    //Para executar este aplicativo, criar no Mysql banco de dados "escola" e a tabela "aluno" por meio do comando: create table aluno (id int not null primary key, nome varchar(100) not null, endereco varchar(100) not null)

        // Inclui constantes para conexão ao BD
        include('conexao.php');
        // Buscar no BD todas os alunos cadastrados
        $pdo = new PDO(host,usuario,senha);
        $cmp = $pdo->prepare('select id, nome, endereco from aluno');
        $cmp->execute();

  		  echo "<a href='create.php'>Criar</a><br/><br/>";
  		  // Cada iteração do loop abaixo obtém uma linha da tabela resultante do Select e envia seus dados ao navegador. $lin é uma vetor com índices correspondendo ao nome das colunas (id, nome, endereco) e contéudo com seus respectivos dados.
        $lin = $cmp->fetch(PDO::FETCH_NUM);
  		  while ($lin != null) {
  		  	echo $lin[1]." - ".$lin[2]." <a href='edit.php?id=".$lin[0]."'>Editar</a> <a href='delete.php?id=".$lin['id']."'>Excluir</a><br/>";
          $lin = $cmp->fetch(PDO::FETCH_NUM);
  		  }
	?>
</body>
</html>