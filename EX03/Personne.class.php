<?php

	class Personne {
		private $nom;
		private $prenom;
		private $adresse;

		public function __construct(string $a, string $b, string $c) {
			$this->nom = $a;
			$this->prenom = $b;
			$this->adresse = $c;
		}

		public function __destruct() {
			echo 'Destroying: ', $this->nom, PHP_EOL;
		}

		public function setAdresse(string $a): void {
			$this->adresse = $a;
		}

		public function getPersonne(): string {
			return $this->prenom . " " . $this->nom . " habite à " . $this->adresse . ".\n";
		}
	}

?>