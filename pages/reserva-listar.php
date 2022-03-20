<h1>Lista de Reservas</h1>
<?php
	$sql = "SELECT * FROM reserva AS a
			INNER JOIN aluno AS b ON b.id_aluno = a.aluno_id_aluno
			INNER JOIN livro AS c ON c.id_livro = a.livro_id_livro
			INNER JOIN atendente AS d ON d.id_atendente = a.atendente_id_atendente";

	$res = $conn->query($sql) or die($conn->error);

	$qtd = $res->num_rows; 

	print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

	if($qtd > 0){
		print "<table class='table table-striped table-hover table-bordered'>";
		print "<tr>";
		print "<th>Nome do Aluno</th>";
        print "<th>Nome do Livro</th>";
		print "<th>Nome do Atendente</th>";
        print "<th>Data do Emprestimo</th>";
        print "<th>Data da Devolução</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->nome_aluno."</td>";
			print "<td>".$row->titulo_livro."</td>";
            print "<td>".$row->nome_atendente."</td>";
			print "<td>".$row->data_emprestimo."</td>";
            print "<td>".$row->data_devolucao."</td>";
			print "<td>
					<button class='btn btn-primary' onclick=\"location.href='?page=reserva-editar&aluno_id_aluno=".$row->aluno_id_aluno."';\">Editar   <a class='bx bx-pencil'></a></button>

					<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=reserva-salvar&acao=excluir&aluno_id_aluno=".$row->aluno_id_aluno."';}else{false;}\">Excluir   <a class='bx bx-trash'></a></button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Não há resultados</div>";
	}
?>