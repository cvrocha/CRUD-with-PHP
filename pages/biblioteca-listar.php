<h1>Lista de Bibliotecas</h1>
<?php
	$sql = "SELECT * FROM biblioteca";

	$res = $conn->query($sql) or die($conn->error);

	$qtd = $res->num_rows;
	print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

	if($qtd > 0){
		print "<table class='table table-striped table-hover table-bordered'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome da Biblioteca</th>";
		print "<th>Endereço</th>";	
		print "<th>Ações</th>";	
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_biblioteca."</td>";
			print "<td>".$row->nome_biblioteca."</td>";
			print "<td>".$row->end_biblioteca."</td>";	
			print "<td>
						<button class='btn btn-primary' onclick=\"location.href='?page=biblioteca-editar&id_biblioteca=".$row->id_biblioteca."';\">Editar   <a class='bx bx-pencil'></a></button>

						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=biblioteca-salvar&acao=excluir&id_biblioteca=".$row->id_biblioteca."';}else{false;}\">Excluir   <a class='bx bx-trash'></a></button>
				   </td>";	
			print "</tr>";
		}
		print "</table>";	
	}else{
		print "<div class='alert alert-danger'>Não encontrou resultados.</div>";
	}

	
?>