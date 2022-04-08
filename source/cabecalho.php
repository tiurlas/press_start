<?php 
error_reporting(E_ALL ^ E_NOTICE);
require_once("mostra-alerta.php");
require_once("logica-usuario.php");
?>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Press Start</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.blue.css" id="theme-stylesheet">
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="img/press_start_icon.ico" type="image/x-icon">
    <link rel="press-start" href="img/press-start-57x57.png">
    <link rel="press-start" sizes="57x57" href="img/press-start-57x57.png">
    <link rel="press-start" sizes="72x72" href="img/press-start-72x72.png">
    <link rel="press-start" sizes="76x76" href="img/press-start-76x76.png">
    <link rel="press-start" sizes="114x114" href="img/press-start-114x114.png">
    <link rel="press-start" sizes="120x120" href="img/press-start-120x120.png">
    <link rel="press-start" sizes="144x144" href="img/press-start-144x144.png">
    <link rel="press-start" sizes="152x152" href="img/press-start-152x152.png">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <div id="all">
        <!-- Top bar-->
        <div class="top-bar">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 d-md-block d-none">
                    <div class="align-item-center">
                        <div class='alert-tamanho'>
                            <?php
                                mostraAlerta("confirm");
                                mostraAlerta("error");
                            ?>
                        </div>
                    </div>
                        <!-- <p>Contact us on press-start@gmail.com</p> -->
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-md-end justify-content-between">
                            <ul class="list-inline contact-info d-block d-md-none">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                            </ul>
                            <?php
                            if(usuarioEstaLogado()) {
                            ?>
                            <div class="login">
                                <a href="home.php" class="signup-btn"><i class="fa fa-user"></i>
                                    <span class="d-none d-md-inline-block">My Account</span>
                                </a>
                                <a href="logout.php" class="signup-btn"><i class="fa fa-sign-out"></i>
                                    <span class="d-none d-md-inline-block">Logout</span>
                                </a>
                            </div>
                            <?php
                            } else { ?>
                            <div class="login">
                                <a href="#" data-toggle="modal" data-target="#login-modal" class="login-btn">
                                    <i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">Sign In</span>
                                </a>
                                <a href="registro.php" class="signup-btn"><i class="fa fa-user"></i>
                                    <span class="d-none d-md-inline-block">Sign Up</span>
                                </a>
                            </div>
                            <?php } ?>            
                            <!-- <ul class="social-custom list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar end-->
        <!-- Login Modal-->
        <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="login-modalLabel" class="modal-title">Login</h4>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="login.php" method="POST">
                            <div class="form-group">
                                <input id="email_modal" name="email" type="text" placeholder="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <input id="password_modal" name="senha" type="password" placeholder="password" class="form-control">
                            </div>
                            <p class="text-center">
                                <button type="submit" class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>
                        </form>
                        <p class="text-center text-muted">Não possui conta?</p>
                        <p class="text-center text-muted"><a href="registro.php"><strong>Registre-se Agora</strong></a>!
                            É Rápido e não demora nem 1min.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login modal end-->
        <!-- Navbar Start-->
        <header class="nav-holder make-sticky">
            <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
                <div class="container"><a href="index.php" class="navbar-brand home">
                        <img src="img/Press-Start-extends.png" alt="Press Start Logo" class="d-none d-md-inline-block logo-tamanho-lg">
                        <img src="img/ps-logo.png" alt="Press Start logo" class="d-inline-block d-md-none logo-tamanho-md">
                        <span class="sr-only">Universal - go to homepage</span></a>
                    <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span
                            class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
                    <div id="navigation" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item dropdown active"><a href="index.php">Home <b class="caret"></b></a>
                            </li>
                            <!-- ========== FULL WIDTH MEGAMENU ==================-->
                            <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown"
                                    data-delay="200" class="dropdown-toggle">Categorias <b class="caret"></b></a>
                                <ul class="dropdown-menu megamenu">
                                    <li>
                                        <div class="row">
                                            <div class="col-md-6 col-lg-3">
                                                <h5>Jogos</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="lista_compra.php" class="nav-link">Jogos</a></li>                                                    
                                                </ul>
                                                <h5>Eletrônicos</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="lista_compra.php" class="nav-link">Eletrônicos</a></li> </ul>
                                                <h5>Livros</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="lista_compra.php" class="nav-link">Livros</a></li> </ul>
                                                <h5>Informática</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="lista_compra.php" class="nav-link">Informática</a></li> </ul>
                                                <h5>Outros</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="lista_compra.php" class="nav-link">Outros</a></li> </ul>
                                            </div>
                                            <!--<div class="col-md-6 col-lg-3">
                                                <h5>Livros</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="portfolio-2.html" class="nav-link">2
                                                            columns</a></li>
                                                    <li class="nav-item"><a href="portfolio-no-space-2.html" class="nav-link">2
                                                            columns with negative space</a></li>
                                                    <li class="nav-item"><a href="portfolio-3.html" class="nav-link">3
                                                            columns</a></li>
                                                    <li class="nav-item"><a href="portfolio-no-space-3.html" class="nav-link">3
                                                            columns with negative space</a></li>
                                                    <li class="nav-item"><a href="portfolio-4.html" class="nav-link">4
                                                            columns</a></li>
                                                    <li class="nav-item"><a href="portfolio-no-space-4.html" class="nav-link">4
                                                            columns with negative space</a></li>
                                                    <li class="nav-item"><a href="portfolio-detail.html" class="nav-link">Portfolio
                                                            - detail</a></li>
                                                    <li class="nav-item"><a href="portfolio-detail-2.html" class="nav-link">Portfolio
                                                            - detail 2</a></li>
                                                </ul>
                                                <h5>Eletrodomésticos</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="customer-register.html" class="nav-link">Register
                                                            / login</a></li>
                                                    <li class="nav-item"><a href="home.php" class="nav-link">Orders
                                                            history</a></li>
                                                    <li class="nav-item"><a href="customer-order.html" class="nav-link">Order
                                                            history detail</a></li>
                                                    <li class="nav-item"><a href="customer-wishlist.html" class="nav-link">Wishlist</a></li>
                                                    <li class="nav-item"><a href="customer-account.html" class="nav-link">Customer
                                                            account / change password</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <h5>Jogos</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="shop-category.html" class="nav-link">Category
                                                            - sidebar right</a></li>
                                                    <li class="nav-item"><a href="shop-category-left.html" class="nav-link">Category
                                                            - sidebar left</a></li>
                                                    <li class="nav-item"><a href="shop-category-full.html" class="nav-link">Category
                                                            - full width</a></li>
                                                    <li class="nav-item"><a href="detalhes_item.php" class="nav-link">Product
                                                            detail</a></li>
                                                </ul>
                                                <h5>Beleza</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="shop-basket.html" class="nav-link">Shopping
                                                            cart</a></li>
                                                    <li class="nav-item"><a href="shop-checkout1.html" class="nav-link">Checkout
                                                            - step 1</a></li>
                                                    <li class="nav-item"><a href="shop-checkout2.html" class="nav-link">Checkout
                                                            - step 2</a></li>
                                                    <li class="nav-item"><a href="shop-checkout3.html" class="nav-link">Checkout
                                                            - step 3</a></li>
                                                    <li class="nav-item"><a href="shop-checkout4.html" class="nav-link">Checkout
                                                            - step 4</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <h5>Brinquedos</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                                                    <li class="nav-item"><a href="contact2.html" class="nav-link">Contact
                                                            - version 2</a></li>
                                                    <li class="nav-item"><a href="contact3.html" class="nav-link">Contact
                                                            - version 3</a></li>
                                                </ul>
                                                <h5>Relógios</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="text.html" class="nav-link">Text page</a></li>
                                                    <li class="nav-item"><a href="text-left.html" class="nav-link">Text
                                                            page - left sidebar</a></li>
                                                    <li class="nav-item"><a href="text-full.html" class="nav-link">Text
                                                            page - full width</a></li>
                                                    <li class="nav-item"><a href="faq.html" class="nav-link">FAQ</a></li>
                                                    <li class="nav-item"><a href="404.html" class="nav-link">404 page</a></li>
                                                </ul>
                                                <h5>Ferramentas</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="nav-item"><a href="blog.html" class="nav-link">Blog
                                                            listing big</a></li>
                                                    <li class="nav-item"><a href="blog-medium.html" class="nav-link">Blog
                                                            listing medium</a></li>
                                                    <li class="nav-item"><a href="blog-small.html" class="nav-link">Blog
                                                            listing small</a></li>
                                                    <li class="nav-item"><a href="blog-post.html" class="nav-link">Blog
                                                            Post</a></li>
                                                </ul>
                                            </div>-->
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- ========== FULL WIDTH MEGAMENU END ==================-->
                            <?php
                            if(usuarioEstaLogado()) {
                            ?>
                            <li class="nav-item dropdown menu-large"><a href="lista_compra.php">Comprar<b class="caret"></b></a></li>
                            <li class="nav-item dropdown"><a href="vender.php">Vender<b class="caret"></b></a></li>
                            <?php
                            } ?>
                        </ul>
                    </div>
                    <div id="search" class="collapse clearfix">
                        <form role="search" class="navbar-form">
                            <div class="input-group">
                                <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
                                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <!-- Navbar End-->