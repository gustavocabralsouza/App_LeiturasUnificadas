<html>
<head>

	<title>
		Menu
	</title>
	
	<meta charset = "UTF-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	
	<link rel = "stylesheet" type = "text/css" href = "Pag.css">
	<link rel = "stylesheet" type = "text/css" href = "Form.css">
	<link rel = "stylesheet" type = "text/css" href = "Index.css">
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
	include 'config.php';
	include 'mysqlexecuta.php';
	$con = conectar();
	mysql_select_db('BD_CLUBE');
	$sql = "SELECT * FROM emprestimo order by cod_amigo";
	$res = mysqlexecuta($con,$sql);
?>
<br>
<br>
<br>
<br>
<br>
<br>
<table align="center">
	<tr> 
		<td  class="imgtabela" align="center" height="250px">
			<img src="tabela.png">	
		</td> 
	</tr>
	<tr>
		<td bgcolor=#FFFFff>
			<p align="center"> <b class="tbl_title">Revistas </b></p>
		</td>
	</tr>
</table>

	<br>
	
<table p align ="center" >
	<tr> 
		<td width="25%">
			<b>Código do Amigo</b>
		</td>
		<td width="25%">
			<b>Código da Revista</b>
		</td>
		<td width="25%">
			<b>Data do Empréstimo</b>
		</td>
		<td width="25%">
			<b>Data da Devolução</b>
		</td>
	</tr>
<?php
	while ($row = mysql_fetch_array($res)) {
?>
	<tr>
		<td>
			<?php echo $row['cod_amigo'];?>
		</td>
		<td>
			<?php echo $row['cod_revista'];?>
		</td>
		<td>
			<?php echo $row['dta_emp'];?>
		</td>
		<td>
			<?php echo $row['dta_dev'];?>
		</td>
	</tr>
<?php 
	}
?>
</table>
<br><br> <br> <br> <br> <br> <br>  
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