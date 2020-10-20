<pre><?php

	spl_autoload_register(function ($name) {
		require $name . '.class.php';
	});

	$ville1 = new Ville("Niort", 79000);

	/*$ville2 = new Ville();
	$ville2->setNom("Paris");
	$ville2->setCode(75001);

	$ville3 = new Ville();
	$ville3->setNom("Bordeaux");
	$ville3->setCode(33000);*/

	var_dump($ville1);
	var_dump($ville2);
	var_dump($ville3);

?></pre>