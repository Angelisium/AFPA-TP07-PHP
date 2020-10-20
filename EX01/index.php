<?php

	spl_autoload_register(function ($name) {
		require $name . '.class.php';
	});

	$ville1 = new Ville();
	$ville1->setNom("Niort");
	$ville1->setCode(79000);
	var_dump($ville1);

?>