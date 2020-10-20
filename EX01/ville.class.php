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

		public function getNom(): string {
			return $this->nom;
		}
		public function getCode(): int {
			return $this->code;
		}
	}

?>