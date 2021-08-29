<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Veterinário Online - Login</title>
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

<!-- Menu -->

<div class="menu">

	<!-- Search -->
	
	<!-- Navigation -->
	<div class="menu_nav">
		<ul>
			<li><a href="#">Cães</a></li>
			<li><a href="#">Gatos</a></li>
		</ul>
	</div>
	<!-- Contact Info -->
	
</div>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">
				<a href="#">
					<div class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="../img/logo_1.png" alt=""></div>
						<div>Veterinário Online</div>
					</div>
				</a>	
			</div>
    </header>
</div>
<br> <br> <br> <br>
<div class="container">
    <aside class="col-lg-4 mx-auto">
      <div class="card">
        <article class="card-body">
          <h4 class="card-title text-center mb-4 mt-1">Login</h4>
          <hr>

          <form action="servicoLoginUsuario.php" method="POST">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input name="usuario" class="form-control" placeholder="Nome de usuário" type="text" required>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input class="form-control" placeholder="Senha" type="password" name="senha" required>
              </div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block"> Login </button>
            </div>

          </form>
        </article>
      </div>

    </aside>
</div>


<script src="../js/jquery-3.2.1.min.js"></script>
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