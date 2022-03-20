<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$nome 	   = $_POST["nome_aluno"];
			$email 	   = $_POST["email_aluno"];
			$fone 	   = $_POST["fone_aluno"];
			$rgm 	   = $_POST["rgm_aluno"];
			$data_nasc = $_POST["data_nasc_aluno"];
			$genero    = $_POST["genero_aluno"];
			$end 	   = $_POST["end_aluno"];

			$sql = "INSERT INTO aluno (
						nome_aluno, 
						email_aluno, 
						fone_aluno, 
						rgm_aluno, 
						data_nasc_aluno, 
						genero_aluno, 
						end_aluno
					) VALUES (
						'{$nome}', 
						'{$email}', 
						'{$fone}', 
						'{$rgm}', 
						'{$data_nasc}', 
						'{$genero}', 
						'{$end}'
					)"; 

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=usuario-listar';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=usuario-listar';</script>";
			}
			break;
		
		case 'editar':
			$nome 	   = $_POST["nome_aluno"];
			$email 	   = $_POST["email_aluno"];
			$fone 	   = $_POST["fone_aluno"];
			$rgm 	   = $_POST["rgm_aluno"];
			$data_nasc = $_POST["data_nasc_aluno"];
			$genero    = $_POST["genero_aluno"];
			$end 	   = $_POST["end_aluno"];

			$sql = "UPDATE aluno SET
						nome_aluno='{$nome}', 
						email_aluno='{$email}', 
						fone_aluno='{$fone}', 
						rgm_aluno='{$rgm}', 
						data_nasc_aluno='{$data_nasc}', 
						genero_aluno='{$genero}', 
						end_aluno='{$end}'
					WHERE
						id_aluno=".$_POST["id_aluno"]; 

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=usuario-listar';</script>";
			}else{
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=usuario-listar';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM aluno
			 WHERE id_aluno=".$_REQUEST["id_aluno"];


			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=usuario-listar';</script>";
			}else{
				print "<script>alert('Não foi possível excluir');</script>";
				print "<script>location.href='?page=usuario-listar';</script>";
			}
			break;
	}