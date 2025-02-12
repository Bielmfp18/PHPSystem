<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro de Pessoas</title>
	<link rel="stylesheet" href="style.css">

</head>
<body>
<section id="esquerda">
	<form>
		<h2>Cadastrar Pessoas</h2>
		<label for ="nome">Nome</label>
		<input type="text" name="nome" id="nome">
		<label for ="telefone">Telefone</label>
		<input type="text" name="telefone" id="telefone">
		<label for ="email">Email</label>
		<input type="text" name="email" id="email">
		<input type="submit" value="Cadastrar"> 

	</form>

</section>
<section id = "direita">
	<table>
		<tr id="titulo">

			<td>Nome</td>
			<td>Telefone</td>
			<td colspan="2">Email</td>
		<tr>	
            <td></td>
            <td></td>
            <td></td>
            <td><a href="">Editar</a><a href="">Excluir</a></td>
		</tr>

	</table>

</section>
</body>
</html>