<?php
	header('Content-type: application/json');

	spl_autoload_register(function ($name) {
		require $name . '.class.php';
	});

	$a = new Form(array(
		'action' => $_SERVER['PHP_SELF'],
		'titre' => "Mon super formulaire",
		'method' => "PUT",
	));

	echo $a->getForm();
?>