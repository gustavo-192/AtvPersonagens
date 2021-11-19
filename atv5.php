<!DOCTYPE html>
<html>
<head>
	<title>pag5</title>
	<meta charset="utf-8">
</head>
<body>
<style>

div{
	padding: 10px;
}

</style>

<form action="" method="POST">

<h1>Personagens fictícios</h1>
<label><b>Preencha as caixas de texto abaixo com nomes de personagens fictícios (filmes, animes, quadrinhos, etc).</b></label>

<?php

for($i=1 ; $i <= 4 ; $i++)
	{
		echo"<p>";
		echo"<label>Personagem " . $i .":</label>";
		#pedindo para o usuário digitar os nomes
		echo"<input type='text' name='nome$i'>";
		echo"</p>";	
	}

	echo "<label> Escolha uma cor:<label>";
	echo "<input type='radio' name='cor' value='Tomato' checked >Vermelho";
	echo "<input type='radio' name='cor' value='LightGreen'> verde";
	echo "<input type='radio' name='cor' value='LightSkyBlue'> Azul";
	echo "<input type='radio' name='cor' value='Gold'> Amarelo";
	echo "<br><br>";
	echo "<input type='submit' value='Enviar' name='Enviar'>";
	echo "<hr>";
	echo "<br>";


if (isset($_POST["Enviar"]))

{
	#armazenando valor escolhido pelo Usuário na variável $COR 
	$cor = $_POST["cor"];

	#criando vetor vazio 
	$personagem = array();

	
	for($i=1 ; $i <= 4 ; $i++)
	{
		#Armazenando as informações no vetor 
		$personagem[] = $_POST["nome$i"];
	}
		
		#Avaliando o tamanho do vetor 
		$tamanho = count($personagem);

		#exibindo cor escolhida pelo usuário na DIV
		echo "<div style = 'background-color: $cor'>";

	for ($i=0; $i < $tamanho ; $i++) 
	{ 	#exibindo valores do vetor
		echo"<p>";
		echo $personagem[$i];
		echo"</p>";
	}

}
?>

</form>

<label><b>Gustavo Trajano Costa TI-95</b></label>
</body>
</html>