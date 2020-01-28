<?php 
require 'config.php';

	

	

	if(isset($_POST['nome']) && empty($_POST['nome']) == false)
	{

		
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);

		$arquivo = $_FILES['arquivo'];
		$nomedoarquivo = md5(time().rand(0,99)).'.png';
		move_uploaded_file($arquivo['tmp_name'], 'assets/images/'.$nomedoarquivo);

		$senha = $nomedoarquivo;

	$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";

	$pdo->query($sql);

	
	header("Location: index.php");

	}
?>

<html>

<head>
	
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1,
minimum-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">


<title>Adicionar um pedido</title>



</head>


<body>
	
<div class="boxlogin">
	<img src="user.png" class="user">
	<h2>Adicionar um Pedido</h2>

	<form method="POST" enctype="multipart/form-data">
		<p>Nome</p>
			<input type="text" name="nome" placeholder="Digite o nome">
		<p>Pedido</p>
			<input type="text" name="email" placeholder="Digite o Pedido">
		<p>Imagem do Pedido</p><br>
			<input type="file" name="arquivo" accept="image/*">	
		
			<input type="submit" name="" value="Cadastrar">
		
	</form>

</div>


</body>
	






</html>