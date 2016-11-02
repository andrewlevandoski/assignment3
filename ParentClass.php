<?php
	// This is the file for the parent class

	class ParentClass {
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

		public function getMake() {
			return $this->make;
		}

		public function getModel() {
			return $this->model;
		}

		public function getYear() {
			return $this->year;
		}

		public function getColor() {
			return $this->color;
		}

		public function getHorsepower() {
			return $this->horsepower;
		}

		public function __toString() {
			$myMake = $this->getMake();
			$myModel = $this->getModel();
			$myYear = $this->getYear();
			$myColor = $this->getColor();
			$myHorsepower = $this->getHorsepower();

			$myString = $myColor . " " . $myYear . " " . $myMake . " " . $myModel . " with " . $myHorsepower . " horsepower.";

			return $myString;
		}
	}
?>
