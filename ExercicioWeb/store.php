<?php
  // O header abaixo causará o redirecionamento do navegador para index.php. Não se pode enviar qualquer conteúdo antes de um header.
	header("location:index.php");

  // INCLUIR AQUI O CÓDIGO PARA INSERIR UM NOVO ALUNO DO BD CONFORME PARÂMETROS DA REQUISIÇÃO ($_POST)

	include ('conexao.php');
    
     $pdo =  new PDO(host,usuario,senha);
     $cmp = $pdo->prepare('insert into aluno values (:id,:nome,:end)');
     $cmp->execute([':id' => $_POST['txtid'], ':nome' => $_POST['txtnm'],':end' => $_POST['txted'] ]);

?>