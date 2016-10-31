<?php
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {
		var $make;
		var $model;
		var $year;
		var $color;
		var $horsepower;

		public function __construct($make, $model, $color, $horsepower) {
			$this->make       = $make;
			$this->model      = $model;
			$this->year       = $year;
			$this->color      = $color;
			$this->horsepower = $horsepower;
		}

	}
