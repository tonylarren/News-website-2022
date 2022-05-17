<?php
 include('fonction.php');
 $allnews=getAll();
 $mainnews=getLatest();
 $popular=getPopular();
 $latest=getLatest();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Info-CLimat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    

   

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
                            <a class="nav-link text-body small" href="login">Login</a>
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
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
            <a href="home" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-4 text-uppercase text-primary">Biz<span class="text-white font-weight-normal">News</span></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="home" class="nav-item nav-link active">Home</a>
                    
                    
                </div>
                <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                    <input type="text" class="form-control border-0" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="input-group-text bg-primary text-dark border-0 px-3"><i
                                class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Main News Slider Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 px-0">
                <div class="owl-carousel main-carousel position-relative">
                <?php for ($i = 0; $i <count($mainnews);$i++){?>
                    <div class="position-relative overflow-hidden" style="height: 500px;">
                        <img class="img-fluid h-100" src="img/<?php echo $mainnews[$i]['image'];?>" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="category"><?php echo $mainnews[$i]['nom'];?></a>
                                <a class="text-white" href="#"><?php echo $mainnews[$i]['dateI'];?></a>
                            </div>
                            <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="<?php echo $mainnews[$i]['url'].'-'.$mainnews[$i]['id'];?>"><?php echo $mainnews[$i]['titre'];?></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-5 px-0">
                <div class="row mx-0">
                    <?php for ($i=0 ;$i<4;$i++) { ?>
                    <div class="col-md-6 px-0">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img class="img-fluid w-100 h-100" src="img/<?php echo $allnews[$i]['image'];?>" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href=""><?php echo $allnews[$i]['nom'];?></a>
                                    <a class="text-white" href=""><small><?php echo $allnews[$i]['dateI'];?></small></a>
                                </div>
                                <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href=""><?php echo $allnews[$i]['titre'];?></a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    

    <div>
        <p></p>
    </div>
    


    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                            </div>
                        </div>
                        <?php for ($i=0 ;$i<2;$i++) { ?>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="img/<?php echo $mainnews[$i]['image'];?>" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href=""><?php echo $mainnews[$i]['nom'];?></a>
                                        <a class="text-body" href=""><small><?php echo $mainnews[$i]['dateI'];?></small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="<?php echo $mainnews[$i]['url'].'-'.$mainnews[$i]['id'];?>"><?php echo $mainnews[$i]['titre'];?></a>
                                    <p class="m-0"><?php echo $mainnews[$i]['resume'];?></p>
                                </div>
                                
                            </div>
                        </div>
                        <?php } ?>
                        
                        
                    
                        
                    </div>
                </div>
                
                <div class="col-lg-4">
                   

                    <!-- Popular News Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tranding News</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                        <div class="bg-white border border-top-0 p-3">
                            <?php for ($i = 0; $i <count($popular);$i++){?>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 200px;">
                                <img class="img-fluid" src="img/<?php echo $popular[$i]['image'];?>" alt="" height="110px" width="110px">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href=""><?php echo $popular[$i]['nom'];?></a>
                                        <a class="text-body" href=""><small><?php echo $popular[$i]['dateI'];?></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text font-weight" href="<?php echo $popular[$i]['url'].'-'.$popular[$i]['id'];?>"><?php echo $popular[$i]['titre'];?></a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
        <div class="row py-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Get In Touch</h5>
                
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Popular News</h5>
                <?php for ($i =0;$i<3;$i++){?>
                <div class="mb-3">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href=""><?php echo $latest[$i]['nom'];?></a>
                        <a class="text-body" href=""><small><?php echo $latest[$i]['dateI'];?></small></a>
                    </div>
                    <a class="small text-body text-uppercase font-weight-medium" href="<?php echo $latest[$i]['url'];?>"><?php echo $latest[$i]['titre'];?></a>
                </div>
                <?php } ?>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Categories</h5>
                <div class="m-n1">
                    <a href="" class="btn btn-sm btn-secondary m-1">Politics</a>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                
                
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
        <p class="m-0 text-center">&copy; <a href="#">Info Climat</a>. All Rights Reserved. 
		
		
		Design by <a href="https://htmlcodex.com">HTML Codex</a><br>
        Distributed by <a href="https://themewagon.com">ThemeWagon</a>
    </p>
    </div>
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