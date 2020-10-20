<pre><?php

	spl_autoload_register(function ($name) {
		require $name . '.class.php';
	});

	$ville1 = new Ville();
	$ville1->setNom("Niort");
	$ville1->setCode(79000);

	$ville2 = new Ville();
	$ville2->setNom("Paris");
	$ville2->setCode(75001);

	$ville3 = new Ville();
	$ville3->setNom("Bordeaux");
	$ville3->setCode(33000);

	echo $ville1->showText();
	echo $ville2->showText();
	echo $ville3->showText();

?></pre>