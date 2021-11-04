<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Fragman House</title>

	<?php include 'theme/src.php';?>

</head>
<body>


	<?php include 'theme/navbar.php'; ?>

	<?php include 'theme/slider.php'; ?>
	
	<div class="sliderarea1">
		
		<h2>Projeler/Fragmanlar</h2>
		<div class="owl-carousel owl1 owl-theme owlnavstyle">

			<?php foreach ($fragman as $item): ?>

				<a href="#">

					<div class="item">

						<div class="item-img">
							<img src="<?php echo 'assets/img/film/'.$item ?>" class="item-img-details">
						</div>

						<div class="item-details">

							<p>Alev Alev</p>
						</div>

					</div>
				</a>

			<?php endforeach ?>

		</div>

	</div>

	<div class="sliderarea1">
		
		<h2>Projeler/Filmler</h2>
		<div class="owl-carousel owl1 owl-theme owlnavstyle">

			<?php foreach ($filmler as $item): ?>

				<a href="#">

					<div class="item">

						<div class="item-img">
							<img src="<?php echo 'assets/img/film/'.$item ?>" class="item-img-details">
						</div>

						<div class="item-details">

							<p>Alev Alev</p>
						</div>

					</div>
				</a>

			<?php endforeach ?>

		</div>

	</div>

	<div class="sliderarea1">
		
		<h2>Bu Hafta</h2>
		<div class="owl-carousel owl1 owl-theme owlnavstyle">

			<?php foreach ($filmler as $item): ?>

				<a href="#">

					<div class="item">

						<div class="item-img">
							<img src="<?php echo 'assets/img/film/'.$item ?>" class="item-img-details">
						</div>

						<div class="item-details">

							<p>Alev Alev</p>
						</div>

					</div>
				</a>

			<?php endforeach ?>

		</div>

	</div>

	<div class="sliderarea2">

		<h2>Popüler</h2>
		<div class="owl-carousel owl2 owl-theme owlnavstyle">

			<?php foreach ($populer as $item): ?>

				<a href="#">

					<div class="item">

						<div class="item-img">
							<img src="<?php echo 'assets/img/afis/'.$item ?>" class="item-img-details">
						</div>

						<div class="item-details">

							<p>Alev Alev</p>
						</div>

					</div>
				</a>

			<?php endforeach ?>

		</div>

	</div>


	<div class="clearfix"></div>

	

	<div class="fg_house mt-5">

		<img src="assets/img/bg.jpg" class="img-fluid">

		<div class="main-content flex text-center">

			<h2>FRAGMAN HOUSE KİMDİR ?</h2>
			<button class="btn btnbilgi mx-auto"><i class="fas fa-info-circle"></i>Daha Fazla Bilgi</button>

		</div>


	</div>

	<?php include 'theme/footer.php'; ?>

















































	<?php include 'theme/js.php'; ?>

</body>
</html>