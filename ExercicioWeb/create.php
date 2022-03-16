<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Criar</title>
</head>
<body>
   <form action="store.php" method="post">
     <div>
     	<label>ID<input type="number" name="txtid" min="1"/></label>
     </div>	
     <div>
     	<label>Nome<input type="text" name="txtnm" maxlength="100" pattern="[A-Za-z ]+"/></label>
     </div>
     <div>
     	<label>Endereço<input type="text" name="txted" maxlength="100" pattern="[A-Za-z ]+"/></label>
     </div>
     <div>
     	<input type="submit" value="Enviar"/>
     	<input type="reset" value="Limpar"/>
     	<a href="index.php">Voltar</a>
     </div>
   </form>
</body>
</html>