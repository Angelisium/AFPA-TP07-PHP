<pre><?php

	spl_autoload_register(function ($name) {
		require $name . '.class.php';
	});

	$a = new Form(array(
		'action' => $_SERVER['PHP_SELF'],
	));

	var_dump($a);
?></pre>