<?php
require 'config.php';

$id = 0;
if(isset($_GET['id']) && empty($_GET['id']) == false) {

	$id = addslashes($_GET['id']);

if(isset($_POST['nome']) && empty($_POST['nome']) == false){

	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);

	$sql = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = '$id'";
	$pdo->query($sql);
	header("Location: index.php");
}



	$sql = "SELECT * FROM usuarios WHERE id = '$id'";
	$sql = $pdo->query($sql);
	if ($sql->rowCount() > 0) {
		$dado = $sql->fetch();
	} else {
		header("Location:index.php");
	}

} 
?>

<html>

<head>
	
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1,
minimum-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">


<title>Editar um Pedido</title>



</head>


<body>
	
<div class="boxlogin">
	<img src="user.png" class="user">
	<h2>Editar os dados do pedido</h2>

	<form method="POST">
		<p>Nome</p>
			<input type="text" name="nome" value="<?php echo $dado['nome']; ?>">
		<p>Pedido</p>
			<input type="text" name="email" value="<?php echo $dado['email']; ?>">
		
			<input type="submit" name="" value="Atualizar">
		
	</form>

</div>


</body>
	






</html>