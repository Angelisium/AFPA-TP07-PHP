<?php

	class Impot {
		private $nom;
		private $revenu;

		public function __construct(string $a, int $b) {
			$this->nom = $a;
			$this->revenu = $b;
		}
	}

?>