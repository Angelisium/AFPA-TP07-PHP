<?php

	class Form {
		private $form = "";

		public function __construct(array $param) {
			$this->form .= '<form method="' . ($param['method'] ? $param['method'] : 'GET') . '">';
			$this->form .= '<fieldset>';
		}

	}

?>