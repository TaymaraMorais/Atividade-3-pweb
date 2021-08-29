<?php 
session_start();

if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:../index.php');
}

$idPet  = $_POST['idPet'];
$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$cpf = $_SESSION['cpf'];

require "../controller/PetsController.php";

$petsController = new PetsController();
$pets = $petsController->acharPet($idPet);

$nome = null;
$idade = null;
$sintomas = null;
foreach($pets as $pet)
{
    $nome = $pet['nome'];
    $idade = $pet['idade'];
    $sintomas = $pet['sintomas'];
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Veterinário Online - Cadastrar animal </title>
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
      <h3 class="text-center"> <i class="fas fa-user-cog"></i> Efetuar doação</h3>
      <hr>
      <div class="row">

        


        <div class="col-md-12 mx-auto personal-info">

          <h3 class="text-center">Informações do pet</h3>

          <form class="form-horizontal mx-auto" role="form" action="../controller/PetsController.php" method="POST">
            <div class="form-group">
              <label class="col-lg-3 control-label ">Nome completo:</label>
              <div class="col-lg-8">
              
                <input class="form-control" type="text" name="novonome" value="<?php echo $nome; ?>" required>
             </div>
            </div>

            

            <div class="form-group">
              <label class="col-lg-3 control-label">Idade:</label>
              <div class="col-lg-4">
                <input class="form-control" type="text" name="idade" value="<?php echo $idade?>" required>
              </div>
            </div>

            

            <div class="form-group">
              <label class="col-md-3 control-label"> Novos Sintomas:</label>
              <div class="col-md-8">
                <textarea class="form-control" rows="10" cols="100" name="novossintomas" required> <?php echo $sintomas; ?></textarea>
              </div>
            </div>

            <input type="hidden" name="idAnimal" value="<?php echo $idPet;?>">
            <input type="hidden" name="estado" value=0>

           

            <div class="form-group">
              <label class="col-md-3 control-label"></label>
              <div class="col-md-8">

                <button type="submit" class="btn btn-primary">Salvar </button>
                <span></span>
                
                
              </div>
            </div>
          </form>
                
          <form action="../controller/PetsController.php" method="POST">
          <input type="hidden" name="deletar" value="verdadeiro">
           <input type="hidden" name="idAnimal" value="<?php echo $idPet;?>">
            <button type="submit" class="btn btn-danger">Excluir</button>
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