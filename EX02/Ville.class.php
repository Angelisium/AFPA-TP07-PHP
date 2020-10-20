<?php

	class Ville {
		private $nom;
		private $code;

		public function setNom(string $a): void {
			$this->nom = $a;
		}
		public function setCode(int $a): void {
			$this->code = $a;
		}
	}

?>