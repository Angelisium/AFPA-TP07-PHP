<pre><?php

	spl_autoload_register(function ($name) {
		require $name . '.class.php';
	});

	$a = new Form(array(
		
	));

	var_dump($a);
?></pre>