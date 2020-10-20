<?php

	class Impot {
		const TAUX = [20, 15];
		private $nom;
		private $revenu;

		public function __construct(string $a, int $b) {
			$this->nom = $a;
			$this->revenu = $b;
		}

		public function AfficherImpot(): string {
			return "Mr/Mme " . $this->nom . " votre impot est de " . $this->CalculImpot() . " euros.";
		}

		public function CalculImpot(): int {
			return $this->revenu * TAUX[0] / 100;
		}
	}

?>