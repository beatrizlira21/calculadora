<!DOCTYPE html>
<html>
	<head>
		<title>Calculadora</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet>
	</head>
	<body>
	<div class="container" style="margin-top: 50px">

	<?php
                // verifica se o botão foi clicado
		if(isset($_POST['enviar']))
		{
		// verifica os valores
		if(is_numeric($_POST['valor1']) && is_numeric($_POST['valor2']))
		{
		// Calcula o total
		if($_POST['operacao'] == '+')
		{
		$total = $_POST['valor1'] + $_POST['valor2'];	
		}
		if($_POST['operacao'] == '-')
		{
		$total = $_POST['valor1'] - $_POST['valor2'];	
		}
		if($_POST['operacao'] == '*')
		{
		$total = $_POST['valor1'] * $_POST['valor2'];	
		}
		if($_POST['operacao'] == '/')
		{
		$total = $_POST['valor1'] / $_POST['valor2'];	
		}

                // Exibe o total em tela
		echo "<h1>{$_POST['valor1']} {$_POST['operacao']} {$_POST['valor2']} = {$total}</h1>";
		} else {
		echo 'Você precisa inserir um número';
			}
				}

	?>
		<form method="post" action="calculadora2.php">
		    <input name="valor1" type="text" class="form-control" style="width: 150px; display: inline" />
		    <select name="operacao">
		      	<option value="+">Somar</option>
		        <option value="-">Subtrair</option>
		        <option value="*">Multiplicar</option>
		        <option value="/">Dividir por</option>
		    </select>
		      <input name="valor2" type="text" class="form-control" style="width: 150px; display: inline" />
		      <input name="enviar" type="submit" value="Calcular" class="btn btn-primary"/>
		    </form>

		</div>

	</body>
</html>