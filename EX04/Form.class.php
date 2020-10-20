<?php

	class Form {
		private $form = "";

		public function __construct(array $param) {
			if(!isset($param['action'])) {
				throw new Exception('Missing action target');
			}

			$this->form .= '<form action="' . $param['action'] . '" ';
			$this->form .= 'method="' . (isset($param['method']) ? $param['method'] : 'GET') . '">' . "\n";
			$this->form .= "\t<fieldset>\n";
			if(isset($param['titre'])) {
				$this->form .= "\t\t<legend>" . $param['titre'] . "</legend>\n";
			}
		}

		public function setText(string $name, string $label): void {
			$this->form .= "\t\t<label for=" . '"'. $name .'">' . $label . "\n";
			$this->form .= "\t\t\t<input type=" . '"text"';
				$this->form .= " name=" . '"' . $name . '"';
				$this->form .= " id=" . '"' . $name . '">' . "\n";
			$this->form .= "\t\t</label>\n";
		}

		public function setSubmit(string $text): void {
			$this->form .= "\t\t" . '<button>' . $text . '</button>' . "\n";
		}

		public function getForm(): string {
			return $this->form . "\t</fieldset>\n</form>";
		}
	}

?>