<?php

	class Ville {
		private $nom;
		private $code;

		public function __construct(string $a, string $b) {
			$this->nom = $a;
			$this->code = $b;
		}

		public function setNom(string $a): void {
			$this->nom = $a;
		}
		public function setCode(int $a): void {
			$this->code = $a;
		}
	}

?>