<?php

try {
	
	$mbp = new PDO('mysql:host=localhost;dbname=prueba', "alvaroz", "ragnarok7");
	foreach ($mbp->query('SELECT * from FOO') as $fila) {
		print_r($fila);
	}
	$mbp = null;
} catch (PDOException $e) {
	print "Error: " . $e->getMessage() . "<br/>";
	die();
}
?>