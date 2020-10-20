<?php

	spl_autoload_register(function ($name) {
		require $name . '.class.php';
	});

	$ville1 = new Ville();
	$ville1->setNom("Niort");
	var_dump($ville1);

?>