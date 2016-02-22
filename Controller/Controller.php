<?php
	class Controller {
		private $model;
		
		public function __construct($model, $action) {
			$this->model = $model;
		}
	}
?>