



<?php
 include('fonction.php');
 session_start();
 if(isset($_SESSION['active'])){

 }
 $allnews=getAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Info-CLimat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

 



    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center bg-dark px-lg-5">
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-n2">
                        
                        <li class="nav-item">
                            <a class="nav-link text-body small" href="home">Accueil</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 text-right d-none d-md-block">
                
            </div>
        </div>
        <div class="row align-items-center bg-white py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="home" class="navbar-brand p-0 d-none d-lg-block">
                    <h1 class="m-0 display-4 text-uppercase text-primary">Info<span class="text-secondary font-weight-normal">Climat</span></h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php if(isset($_SESSION['active'])){ ?>
        <div class="container">
            <div class=" ">
                   
                    <a href="admin"><h3>Liste</h3></a>
            </div>
        </div>
    <?php }else{?>
    <div class="row">
        <div class="col-md-5">

        </div>
		<div class="container-login100" style="background-image: url('images/bg-01.jpg'); center">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41 text-center">
					Admin Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="authentification" method="post">

					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="text" name="email" placeholder="E-mail">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="mdp" placeholder="Mot de passse">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
                    <input class="input100" type="submit" name="connect" value="Connect">
					</div>
				</form>
			</div>
		</div>
        <div class="col-md-3">

        </div>
    </div>
    <?php } ?>


    <!-- Main News Slider Start -->
    

    <!-- News With Sidebar End -->


    <!-- Footer Start -->
    
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>