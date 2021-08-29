<?php
session_start();

require "../controller/PetsController.php";

$petController = new PetsController();
$pets = $petController->listarTodosPets();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Veterinário Online - Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="../styles/responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">
				<a href="../index.php">
					<div class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="img/logo_1.png" alt=""></div>
						<div>Veterinário Online</div>
					</div>
				</a>	
			</div>
			
			
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">				
				<div class="user"><a href="perfilMedico.php"><div><img src="../img/user.svg" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
				<!-- Cart -->
				<div class="cart"><a href="atendimento.php"><div><img class="svg" src="../img/cart.svg" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
				
			</div>
		</div>
	</header>

	<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<div class="home">
			<!-- Home Slider -->
			<div class="home_slider_container">
				<div class="owl-carousel owl-theme home_slider">
					<div class="owl-item">
						<div class="background_image" style="background-image:url(../img/wallpaper.jpg)"></div>	
					</div>

				</div>

			</div>
		</div>

	</div>

</div>


					<!-- Slide -->
					
								

		<!-- Products -->

		<div class="products">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="section_title text-center">Consultas</div>
					</div>
				</div>
				
				<div class="row products_row">
					
					<!-- Product -->
					<?php foreach($pets as $pet){ ?>
					<div class="col-xl-4 col-md-6">
						<div class="product">
							<div class="product_image"><img src="../img/<?php echo $pet['imagem']; ?>" style="width: 350px;"></div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
											<div class="product_name"><a href="#"><?php echo $pet['nome']; ?></a></div>
											<div class="product_category"><a href="#"><?php echo $pet['categoria']; ?></a></div>
											<div class="product_category"> Dono: <a href="#"><?php echo $pet['dono']; ?></a></div>
										</div>
									</div>
									<div class="ml-auto text-right">
										<div class="rating_r rating_r_5 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
										<div class="product_price text-right"><?php echo $pet['idade']; ?><span> anos </span></div>
									</div>
								</div>
								<div class="product_buttons">
									<div class="text-right d-flex flex-row align-items-start justify-content-start">
										<div class="d-flex flex-column align-items-center justify-content-center mx-auto">
											<div><div><form action="../controller/PetsController.php" method="POST">
											<input type="hidden" name="pessoa" id="pessoa" value="<?php echo $_SESSION['nome']; ?>">
											<input type="hidden" name="pet" id="pet" value="<?php echo $pet['id'];?> ">
											<input type="hidden" name="acao" id="acao" value="atendimento">
											<button type="submit" id="enviar">
											Atender</button>
											</form>
											</div></div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
										
			<div class="footer_bar">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
								<div class="copyright order-md-1 order-2"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Este template foi feito <i class="fa fa-heart-o" aria-hidden="true"></i> por <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
		
</div>



<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/consulta.js"> </script>
<script src="../styles/bootstrap-4.1.2/popper.js"></script>
<script src="../styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="../plugins/greensock/TweenMax.min.js"></script>
<script src="../plugins/greensock/TimelineMax.min.js"></script>
<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../plugins/greensock/animation.gsap.min.js"></script>
<script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/progressbar/progressbar.min.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../js/custom.js"></script>
</body>
</html>