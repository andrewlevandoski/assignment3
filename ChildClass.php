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

		public function getOldMake() {
			return parent::getMake();
		}

		public function getOldModel() {
			return parent::getModel();
		}

		public function getOldYear() {
			return parent::getYear();
		}

		public function getOldColor() {
			return parent::getColor();
		}

		public function getOldHorsepower() {
			return parent::getHorsepower();
		}

		public function setMake($newMake) {
			 echo "<!-- Setting Make to " . $newMake . "-->";
			 $this->make = $newMake;
		}

		public function setModel($newModel) {
			 echo "<!-- Setting Model to " . $newModel . "-->";
			 $this->model = $newModel;
		}

		public function setYear($newYear) {
			 echo "<!-- Setting Year to " . $newYear . "-->";
			 $this->year = $newYear;
		}

		public function setColor($newColor) {
			 echo "<!-- Setting Color to " . $newColor . "-->";
			 $this->color = $newColor;
		}

		public function setHorsepower($newHorsepower) {
			 echo "<!-- Setting Horsepower to " . $newHorsepower . "-->";
			 $this->horsepower = $newHorsepower;
		}
	}
