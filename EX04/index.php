<?php
	header('Content-type: application/json');

	spl_autoload_register(function ($name) {
		require $name . '.class.php';
	});

	$a = new Form(array(
		'action' => $_SERVER['PHP_SELF'],
		'titre' => "Mon super formulaire",
		'method' => "POST",
	));

	$a->setText("name", "Nom :");
	$a->setText("pseudo", "Pseudo :");

	$a->setSubmit("Go!");

	echo $a->getForm();
?>