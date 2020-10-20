<pre><?php

	spl_autoload_register(function ($name) {
		require $name . '.class.php';
	});

	$a = new Form();

	var_dump($a);
?></pre>