<?php 

session_start();

if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:../index.php');
}

 
$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$cpf = $_SESSION['cpf'];
$usuario = $_SESSION['login'];

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Doação de Pets - Perfil</title>
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


<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">
				<a href="../index.php">
					<div class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="../img/logo_1.png" alt=""></div>
						<div>Veterinário Online</div>
					</div>
				</a>	
			</div>
			

            <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<!-- Search -->
				
				<!-- User -->
				<div class="user"><a href="perfilUsuario.php"><div><img src="../img/user.svg" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
				<!-- Cart -->
				<div class="cart"><a href="listarPets.php"><div><img class="svg" src="../img/cart.svg" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
				<!-- Phone -->

			</div>
		</div>
    </header>
</div>
<br> <br> <br> <br>

<div class="container col-8 mx-auto">
      <h3 class="text-center"> <i class="fas fa-user-cog"></i> Visualizar perfil</h3>
      <hr>
      <div class="row">

        


        <div class="col-md-12 mx-auto personal-info">

          <h3 class="text-center">Informações pessoais</h3>

          <form class="form-horizontal mx-auto" role="form" action="" method="POST">
            <div class="form-group">
              <label class="col-lg-3 control-label ">Nome completo:</label>
              <div class="col-lg-8">
                <input class="form-control" type="text" value="<?php echo $nome;?>" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-3 control-label ">CPF:</label>
              <div class="col-lg-8">
                <input class="form-control" type="text" value="<?php echo $cpf;?>" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-3 control-label">Email:</label>
              <div class="col-lg-8">
                <input class="form-control" type="text" value="<?php echo $email; ?>" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Usuário:</label>
              <div class="col-md-8">
                <input class="form-control" type="text" value="<?php echo $_SESSION['login'];?>" readonly>
              </div>
            </div>

           

            <div class="form-group">
              <label class="col-md-3 control-label"></label>
              <div class="col-md-8">

                <a href="cadastrarAnimal.php" class="btn btn-primary">Cadastrar Animal</a>
                <span></span>

                
                <a href="sairUsuario.php" class="btn btn-danger"> Sair</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <hr>


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