<?php

	spl_autoload_register(function ($name) {
		require $name . '.class.php';
	});

	$p1 = new Personne("Radchaïs", "Alexis", "Niort");
	$p2 = new Personne("Lamalice", "Toto", "Paris");
	$p3 = new Personne("O'Lantern", "Jack", "Graveyard"); // Happy Halloween :3

	echo $p1->getPersonne();
	echo $p2->getPersonne();
	echo $p3->getPersonne();

	echo "\n";

	$p1->setAdresse("Bordeaux");
	$p2->setAdresse("Niort");
	$p3->setAdresse("at your home");

	echo $p1->getPersonne();
	echo $p2->getPersonne();
	echo $p3->getPersonne();

?>