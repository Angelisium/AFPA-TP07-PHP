<pre><?php

	spl_autoload_register(function ($name) {
		require $name . '.class.php';
	});

	$p1 = new Personne("Alexis", "Radchaïs", "Niort");
	$p2 = new Personne("Toto", "Lamalice", "Paris");
	$p3 = new Personne("Jack", "O'Lantern", "Graveyard"); // Happy Halloween :3

?></pre>