
 <?php
 include('fonction.php');
 $categorie=getCategorie();
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
                        <li class="nav-item">
                            <a class="nav-link text-body small" href="admin">liste</a>
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
    
    <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="blog-details-text">
                        <div class="leave-comment">
                            <h4>Insert Actu</h4>
                            <form method="post" action="traitementInsert">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label for="inputEmail4">Titre</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="titre">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlFile1">Image de representation</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Categorie</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="categorie">
                                    <?php for($i=0;$i<count($categorie);$i++){ ?>
                                    <option value="<?php echo $categorie[$i]['idCategorie']?>"><?php echo $categorie[$i]['nom']?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Resume</label>
                                    <input type="text" class="form-control" id="inputAddress" name="resume">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Contenue</label>
                                    <input type="text" class="form-control" id="inputAddress2" name="contenue">
                                </div>
                                
                                
                                <button type="submit" class="btn btn-primary" name="insert">Insert</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>            
        </div>

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
