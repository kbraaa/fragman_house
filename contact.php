<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>İletişim</title>

	<?php include 'theme/src.php'; ?>
	
	<style>

		body {
			background: none!important;
		}
		header {
			position: relative!important;
			background: #141414!important;
		}

		footer{
			background: #141414!important;
		}
	
	</style>

</head>
<body>

	<?php include 'theme/navbar.php'; ?>


	<div class="main-bg" style="background: url('assets/img/banner.png') no-repeat;">

		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-md-12 text-center">
					
					<h2>İLETİŞİM</h2>

				</div>

			</div>

		</div>

	</div>

	<div class="clearfix"></div>


	<div class="contact mb-5">
		
		<div class="container contactsec">
			<div class="map">	
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24084.009218396484!2d28.936111888032542!3d41.01429055698378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab989e5fae399%3A0x34f0847eed8b22e0!2zRmF0aWgvxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1620491397117!5m2!1str!2str" allowfullscreen="" loading="lazy" class="map-frame"></iframe>

			</div>	

			<div class="contactinfo">
				<h3>BİZE ULAŞIN</h3>
				<p>+90 5125 2 13 21  </p>
				<h3>Adres</h3>
				<p>Lorem ıpsum dolor sit amet dolor lorem  ıpsum 
				No:5 B.2  Şişli/İstanbul</p>
				<h3>Adres2</h3>
				<p>Lorem ıpsum dolor sit amet dolor lorem  ıpsum 
				No:5 B.2  Şişli/İstanbul</p>
				
			</div>


			<div class="form">
				<h2>İLETİŞİM FORMU</h2>
			</div>
			<form>
				<div class="row mt-5">

					<div class="col-md-4 formblock formblockleft">
						<input required type="name" placeholder="İsim Soyisim">
						<input required type="email" placeholder="Mail Adresiniz">
						<input required type="tel" placeholder="Telefon Numaranız">
					</div>
					<div class="col-md-8 formblock formblockright">
						<textarea required name="" placeholder="Mesajınız" id="" rows="3"></textarea>
					</div>
					<div class="col-md-12">
						<button class="formsubmitbtn" type="submit">FORMU GÖNDER</button>
					</div>

				</div>
			</form>

		</div>

	</div>	



		<div class="clearfix"></div>


		<?php 	include 'theme/footer.php'; ?>

















	<?php include 'theme/js.php'; ?>
</body>
</html>