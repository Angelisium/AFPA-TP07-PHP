<?php

	class Impot {
		const TAUX = [15, 20];
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
			$r = $this->revenu;
			return $r * self::TAUX[$r>15000] / 100;
		}
	}

?>