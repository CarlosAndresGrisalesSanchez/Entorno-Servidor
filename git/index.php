<!DOCTYPE HTML>
<html>
<title>PHP-Algorisme 3n+1(Conjetura Collatz)</title>
<meta charset="UTF-8">
</head>
<body>
<form action="index.php" method="POST">
<input type="text" name="numero"/>
<input type="submit" value="Enviar"/>
</form>

<p>
<?php

$numero=intval($_POST['numero']);
echo "la seqüència del ".$numero." és {";
$nMaximo=0;
$i;
for($i=0;$i<100000;$i++){
	if($numero==1){break;};
	if($numero%2==0){
		$numero=$numero/2;
		if($numero!=1){echo $numero.",";};
	
	}else{
		$numero=((3*$numero)+1);
		if($numero!=1){echo $numero.",";};
	};
	if($numero>$nMaximo){$nMaximo=$numero;};
}
echo $numero."}, després de ".$i." iteracions i arribant a un màxim de ".$nMaximo.".";
?>
</p>
</body>
</html>
