<?php
  // O header abaixo causará o redirecionamento do navegador para index.php. Não se pode enviar qualquer conteúdo antes de um header.
	header("location:index.php");

	include ('conexao.php');

 	 
     
     $pdo =  new PDO(host,usuario,senha);
     $cmp = $pdo->prepare('delete from aluno where id = :prx');
     $cmp->execute([':prx' => $_GET['id']]);
    
        
?>