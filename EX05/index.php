<?php
	spl_autoload_register(function ($name) {
		require $name . '.class.php';
	});

	if($_SERVER['REQUEST_METHOD'] === 'POST'
		&& isset($_POST['nom'])
		&& isset($_POST['revenu'])) {
			$résultat = new Impot($_POST['nom'], $_POST['revenu']);
	}

?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Calcul impôt</title>
	</head>
	<body>
		<form method="POST">
			<input type="text" name="nom" placeholder="Votre nom"><br>
			<input type="number" name="revenu" placeholder="Votre revenu"><br>
			<button>OK</button>
		</form>
		<!--<?php if($résultat) { ?>-->
			<p><?=$résultat->AfficherImpot()?></p>
		<!--<?php } ?>-->
	</body>
</html>