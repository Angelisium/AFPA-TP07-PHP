<?php

	spl_autoload_register(function ($name) {
		require $name . '.class.php';
	});

	$ville1 = new Ville();
	$ville1->setNom("Niort");
	$ville1->setCode(79000);

	$ville2 = new Ville();
	$ville2->setNom("Paris");
	$ville2->setCode(75001);

	var_dump($ville1);

?>