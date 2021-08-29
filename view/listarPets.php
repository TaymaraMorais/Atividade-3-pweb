<?php 
session_start();

if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:../index.php');
}

require "../controller/PetsController.php";


$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$cpf = $_SESSION['cpf'];
$usuario = $_SESSION['login'];

$petsController = new PetsController();
$pets = $petsController->exibirPets($nome);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Veterinário Online - Animais </title>
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


<div class="content">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <div class="card">
        <div class="card-header">
          <h4 class="text-primary text-center"> Lista de Pets</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table" id="tabela">
              <thead class=" text-primary">

                <th>
                  Nome
                </th>
                <th>
                  Idade
                </th>

                <th>
                  Categoria
                </th>

                

                <th>
                  Ação
                </th>
              </thead>
              <tbody>
                <?php
                if ($pets != "") {
                  foreach ($pets as $animais) {
                    ?>
                    <tr>

                      <td>
                        <?php echo $animais['nome'] ?>
                      </td>
                      <td>
                         <?php echo $animais['idade'] ?>
                      </td>

                      <td>
                         <?php echo $animais['categoria'] ?>
                      </td>

                      

                      <td>
                          <form action="editarAnimal.php" method="POST">
                          <input type="hidden" name="novo" id="novo" value="<?php echo $animais['dono'];?>">
                          <input type="hidden" name="idPet" id="idPet" value="<?php echo $animais['id'];?>">
                          <input type="hidden" name="dono" id="dono" value=$nome>
                          <input type="hidden" name="exibir" id="exibir" value="confirmar">
                        <button type="submit" class="btn btn-primary" id="editar"> Editar</button> 
                        
                        </form>
                      </td>

                    </tr>

                  <?php }
              } ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>



<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/solicitacao.js"></script>
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