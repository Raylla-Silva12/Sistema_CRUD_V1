<?php

$mysqli = new mysqli("localhost", "root", "usbw", "db_banquinho");

if ($mysqli -> connect_errno){
	echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	exit();
}

$sql = "select * from tb_produto";
$result = $mysqli -> query($sql);
while ($row = $result->fetch_object()) {
	echo "<b>Codigo:</b> $row->cd_produto 
	<br> <b>Nome:</b> $row->nm_produto 
	<br> <b>Valor:</b> $row->vl_produto <br><br>";
}

$mysqli -> close();
?>