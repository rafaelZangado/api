
<!DOCTYPE html>
<html>
	<head>
		<title>Page Title</title>

		<?php
		//$teste=null;
	$teste=$_GET['cep'];
	$amor=$teste;
function endereco($cep){
    //formatar o cep
    $cep= preg_replace("/[^0-9]/", "",$cep);
    $url="http://viacep.com.br/ws/{$cep}/xml/";
    $a=simplexml_load_file($url);
    return $a;
}
	$endereco = endereco($amor);
	
	//echo $teste;
	//var_dump($endereco);
	?>
	</head>
<body>
<center>
	<h4>FAVOR DIGITE O SEU CEP.</h4>
		<form method="get" action="#" >
		<input type="name" name="cep"><br>
		<input type="submit" value="buscar endereço">
		</form>
</center>

	
		<p>
			<b>CEP:</b>
			<?php 	echo $endereco->cep;?>
		
		<b>Rua:</b>
		<?php 	echo $endereco->logradouro;?><br>
		
		<b>Complemento:</b>
		<?php 	echo $endereco->complemento;?><br>
		
		<label>Bairro:</label>
		<?php 	echo $endereco->bairro;?><br>	
		
		<b>local:</b>
		<?php 	echo $endereco->localidade;?><br>
		
		<b>Uf:</b>
		<?php 	echo $endereco->uf;?><br>

		<b>unidade:</b>
		<?php	echo $endereco->unidade; ?>	<br>
		
		</p>


	
	
</body>
</html>