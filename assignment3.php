<?php
  require_once 'ChildClass.php';

  $myCar = new ChildClass("Kia", "Optima", "2002", "Silver", "250");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Assignment 3</title>

    <link rel="stylesheet" href="assignment3.css">
		<link href="https://fonts.googleapis.com/css?family=Anton|Pacifico" rel="stylesheet">

  </head>
  <body>
		<div class="title-div">
			<h1>OOP PHP...with Cars!</h1>
		</div>

    <section>
      <div>
        <h3>My first car was a: </h3>
        <p><?= $myCar; ?></p>

        <h3>
					Then my mom needed a bigger car. So I got to drive her old one!! <br>
					Then my car was an:
 				</h3>
        <?= $myCar->setMake("Audi"); ?>
				<?= $myCar->setModel("A4"); ?>
				<?= $myCar->setYear("2001"); ?>
				<?= $myCar->setColor("Ice Blue"); ?>
				<?= $myCar->setHorsepower("400"); ?>
				<p><?= $myCar; ?></p>

				<h3>
					Being a sophomore in high school, I needed to make it faster. So I went TURBO. <br>
					Then my car was an:
				</h3>
				<?= $myCar->setHorsepower("600"); ?>
				<p><?= $myCar; ?></p>

				<h3>
					Once upon a time, my sister was driving my car and it broke down and I was sad. <br>
					BUT my grandpa's old car was just sitting in our garage!!
					Then my car was a:
				</h3>
				<?= $myCar->setMake("BMW"); ?>
				<?= $myCar->setModel("740il"); ?>
				<?= $myCar->setYear("2001"); ?>
				<?= $myCar->setColor("Black"); ?>
				<?= $myCar->setHorsepower("650"); ?>
				<p><?= $myCar; ?></p>

				<h3>
					Being an older vehicle, it needed a new paint job. <br>
					Then my car was a:
				</h3>
				<?= $myCar->setColor("JET Black"); ?>
				<p><?= $myCar; ?></p>
				<? $myBMW = clone $myCar; ?>

				<h3>
					Sadly, that car got old and stopped working. <br>
					Now, my car is a:
				</h3>
				<?= $myCar->setMake("Subaru"); ?>
				<?= $myCar->setModel("Outback"); ?>
				<?= $myCar->setYear("2013"); ?>
				<?= $myCar->setColor("Sky Blue"); ?>
				<?= $myCar->setHorsepower("300"); ?>
				<p><?= $myCar; ?></p>

				<h3>
					When I'm older, I hope to rebuild my grandpa's old BMW (with some extra oomph, of course) <br>
					so that in the future, my car will be a:
				</h3>
				<?= $myCar->setHorsepower("850"); ?>
				<p><?= $myBMW; ?></p>
      </div>
    </section>
  </body>
</html>
