<pre><?php

	spl_autoload_register(function ($name) {
		require $name . '.class.php';
	});

	$p1 = new Personne("Alexis", "Radchaïs", "Niort");

?></pre>