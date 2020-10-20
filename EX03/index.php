<pre><?php

	spl_autoload_register(function ($name) {
		require $name . '.class.php';
	});

	$p1 = new Personne("Alexis", "Radchaïs", "Niort");
	$p2 = new Personne("Toto", "Lamalice", "Paris");

?></pre>