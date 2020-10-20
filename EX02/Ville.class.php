<?php

	class Ville {
		private $nom;
		private $code;

		public function __construct(string $a, int $b) {
			$this->nom = $a;
			$this->code = $b;
		}

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