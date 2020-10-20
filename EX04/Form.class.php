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

		public function getForm(): string {
			return $this->form . "\t</fieldset>\n</form>";
		}
	}

?>