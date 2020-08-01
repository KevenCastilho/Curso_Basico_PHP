<html>
	<head>
		<title>Curso de PHP com MySQL</title>
		
	</head>
	<body>
<?

//	Recebe os dados do formulario com a variavel $_POST
$nome=$_POST["nome"];
$senha=$_POST["senha"];
$sexo=$_POST["sexo"];
$turno=$_POST["turno"];
$cidade=$_POST["cidade"];

//	Exibe os dados na página de resposta: RespForm1.Php
echo "Os dados recebido do formulário são:<p>";
echo "<table width='400' border='1' cellspacing='0'>
		<tr>
			<td width='100'>Nome:</td>
			<td width='300'>".$nome."</td>
		</tr>
		<tr>
			<td width='100'>Senha:</td>
			<td width='300'>".$senha."</td>
		</tr>
		<tr>
			<td width='100'>Sexo:</td>
			<td width='300'>".$sexo."</td>
		</tr>
		<tr>
			<td width='100'>Turno:</td>
			<td width='300'>".$turno."</td>
		</tr>
		<tr>
			<td width='100'>Cidade:</td>
			<td width='300'>".$cidade."</td>
		</tr>
	</table>";
?>
		<p>
			<font face="Arial,Helvetica,sans-serif" size="4">
				<a href="form1.html">Clique Aqui para voltar ao Formulario.</a>
			</font>
		</p>
	</body>
</html>