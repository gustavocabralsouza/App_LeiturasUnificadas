<html>
<head>
	
	<title>
		Cadastro
	</title>
	
	<meta charset = "UTF-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	
	<link rel = "stylesheet" type = "text/css" href = "Pag.css">
	<link rel = "stylesheet" type = "text/css" href = "Form.css">
	<link rel = "stylesheet" type = "text/css" href = "cons.css">
	<link rel = "stylesheet" type = "text/css" href = "tabela.css">
	<link rel = "stylesheet" type = "text/css" href = "cons.css">
	
</head>
<body background="biblioteca2.jpeg">
<div id = "Menu">

		<a href = "index.html" title = "Página Inicial">	
			<p id = "TituloMenu">Clube de Leitura</p>
		</a>
	
<ul id = "NavMenu">
			<li class = "dropdown">
				<a class = "dropTexto"> Listar Registros</a>
				<div class = "dropdown-Cont">
					<a href = "listamig.php"> Amigos </a>
					<a href = "listcaix.php"> Caixas </a>
					<a href = "listrev.php"> Revistas </a>
					<a href = "listempr.php"> Empréstimos </a>
				</div>
			</li>
			<li class = "dropdown">
				<a class = "dropTexto"> Pesquisar Registro</a>
				<div class = "dropdown-Cont">
					<a href = "pesqamig.html"> Amigos </a>
					<a href = "pesqcaix.html"> Caixas </a>
					<a href = "pesqrev.html"> Revistas </a>
					<a href = "pesqempr.html"> Empréstimos </a>
				</div>
			</li>
			<li class = "dropdown">
				<a class = "dropTexto"> Deletar Registro</a>
				<div class = "dropdown-Cont">
					<a href = "delamig.html"> Amigos </a>
					<a href = "delcaix.html"> Caixas </a>
					<a href = "delrev.html"> Revistas </a>
					<a href = "delempr.html"> Empréstimos </a>
				</div>
			</li>
			<li class = "dropdown">
				<a class = "dropTexto">Cadastrar</a>
				<div class = "dropdown-Cont">
					<a href = "cadamig.html"> Amigos </a>
					<a href = "cadcaix.html"> Caixas </a>
					<a href = "cadrev.html"> Revistas </a>
					<a href = "cadempr.html"> Empréstimos </a>
				</div>
			</li>
			<li class = "dropdown">
				<a class = "dropTexto">Alterar Registro</a>
				<div class = "dropdown-Cont">
					<a href = "altamig.html"> Amigos </a>
					<a href = "altcaix.html"> Caixas </a>
					<a href = "altrev.html"> Revistas </a>
					<a href = "altempr.html"> Empréstimos </a>
				</div>
			</li>
			<li class = "dropdown">
				<a href="consulta.html" class = "dropTexto">Consultas</a>
			</li>
		</ul>
	
	</div>
	<div id = "Conteudo">
<?php

	$codigo = $_POST["cod"];
	$nome = $_POST["nome"];
	$mae = $_POST["mae"];
	$fone = $_POST["fone"];
	$tipo = $_POST["tipo"];
	$loc = $_POST["loc"];
	
	include 'config.php';			
	include 'mysqlexecuta.php';		
	
	$con = conectar();  
	
	mysql_select_db('bd_clube'); 
	
	$sql= "INSERT INTO revista (cod_revista,colecao,nome,ano,edicao,localizacao) Values ($codigo,'$nome','$mae','$fone','$tipo',$loc);";
	
	$res = mysqlexecuta($con,$sql); //
?>
<br><br><br><br><br><br>
		<div class = "Box2" id = "bpesquisa">				
				<div class = "P1">
					<img src ="dead.jpg">
				</div>
				<div class = "P2">	
					<p class = "TituloBox2"> Cadastro Efetuado com Sucesso </p>
				</div>
		</div>
		<br><br> <br> <br> <br> <br> <br>  <br><br> <br> <br> <br> <br> <br>  
</div>	
<div id = "Rodape">	
		
		<div id = "RodL">
			<p class = "TextoRod">
				Lucas Garcia Pereira
			</p>		
			<p class = "TextoRod">
				Gustavo Cabral
			</p>
		</div>
		<div id = "RodR">
			<p class = "TextoRod">	
				Profª Vilma
			</p>
			<p class = "TextoRod SobreRod">
				Analise de Sistemas
			</p>
		</div>

</div>
</body>
</html>	