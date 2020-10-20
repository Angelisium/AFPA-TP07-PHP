<pre><?php

	spl_autoload_register(function ($name) {
		require $name . '.class.php';
	});

	$ville1 = new Ville("Niort", 79000);
	$ville2 = new Ville("Paris", 75001);
	$ville3 = new Ville("Bordeaux", 33000);

	echo $ville1->showText();
	echo $ville2->showText();
	echo $ville3->showText();

?></pre>