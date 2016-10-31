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
			return $this->getColor() . " " . $this->getYear() . " " . $this.getMake() . " " . $this->getModel() . " with " . $this->horsepower . " horsepower.";
		}
	}
