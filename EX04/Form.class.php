<?php

	class Form {
		private $form = "";

		public function __construct(array $param) {
			$this->form .= '<form method="' . ($param['method'] ? $param['method'] : 'GET') . '">';
			$this->form .= '<fieldset>';
			if(isset($param['titre'])) {
				$this->form .= "<legend>" . $param['titre'] . "</legend>";
			}
		}

	}

?>