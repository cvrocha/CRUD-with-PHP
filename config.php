<?php
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASS', '');
	define('BASE', 'biblioteca2122');

	$conn = new MySQLi(HOST,USER,PASS,BASE);

	//função para converter data em pt Brasil
	function ExibeData($data){
		return  date("d/m/Y", strtotime($data));
	}
	