<?php
require 'config.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>Controle de Usuários</title>
	<link rel="stylesheet" type="text/css" href="assets/css/indexstyle.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	
</head>


<body>


<div class="break"><p>Controle de Pedidos</p></div>
<div style="overflow-x:auto;">
	<div class="table-box">
	<table cellpadding="10">
		<tr>
			<th>Nome</th>
			<th>Pedido</th>
			<th>Imagem</th>
			<th>Ações</th>
		</tr>

		<?php
			$sql = "SELECT * FROM usuarios";
			$sql = $pdo->query($sql);
			if($sql->rowCount() > 0) {
				foreach($sql->fetchAll() as $usuario){
					echo '<tr>';
					echo '<td>'.$usuario['nome'].'</td>';
					echo '<td>'.$usuario['email'].'</td>';

					echo '<td><img src="assets/images/'.$usuario['senha'].'" width="150" height="150"></td>';

					echo '<td><a href="editar.php?id='.$usuario['id'].'">Editar</a><br><br><a href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';
					echo '</tr>';
				}

			}
		?>

	</table>
</div></div>

</body>
<div class="break"><a class="add" href="adicionar.php">Adicionar novo Pedido</a></div>

</html>