<head>
	
	<title>
		Exclusão
	</title>
	
	<meta charset = "UTF-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	
	<link rel = "stylesheet" type = "text/css" href = "Pag.css">
	<link rel = "stylesheet" type = "text/css" href = "Form.css">
	<link rel = "stylesheet" type = "text/css" href = "cons.css">
	
	<script language="Javascript">
	
		function valida(){
			vazio=false;
			if(document.f1.pesquisa.value==""){
				alert("A Pesquisa ...... tem que ser preenchida");
				vazio=true
			}
			if(vazio==false) document.f1.submit();
		}
	</script>
		
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
	<br><br><br><br><br><br>
	<?php
		include 'config.php';
		include 'mysqlexecuta.php';
		$con = conectar();
		mysql_select_db('bd_clube');
		$pesquisa = $_POST["pesquisa"];
		$sql = "SELECT * FROM revista where cod_revista = $pesquisa";
		$res = mysqlexecuta($con,$sql);
		$quant= mysql_num_rows($res);
		if($quant==0){
	?>
		<div class = "Box2" id = "bpesquisa">				
				<div class = "P1">
					<img src ="excluir.jpg">
				</div>
				<div class = "P2">	
					<p class = "TituloBox2"> Registro Não Encontrado </p>
				</div>
		</div>
	<?php
		}
		else{
			$sql="delete from revista where cod_revista = $pesquisa";
			$res = mysqlexecuta($con,$sql);
	?>
		<div class = "Box2" id = "bpesquisa">				
				<div class = "P1">
					<img src ="excluir.jpg">
				</div>
				<div class = "P2">	
					<p class = "TituloBox2"> Registro Excluido com Sucesso </p>
				</div>
		</div>
	<?php
		}
	?>
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