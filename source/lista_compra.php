<?php
    require_once('cabecalho.php');
    require_once("banco-produtos.php");
    include("conecta.php");
    listaTodos($conexao);
?>
<div id="content">
    <div class="container">
        <div class="row bar">
            <div class="col-md-3">
                <!-- MENUS AND FILTERS-->
                <div class="panel panel-default sidebar-menu">
                    <div class="panel-heading">
                        <h3 class="h4 panel-title">Categorias</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-pills flex-column text-sm category-menu">
                            <li class="nav-item"><a href="lista_compra.php" class="nav-link d-flex align-items-center justify-content-between"><span>Jogos
                                </span><span class="badge badge-secondary">42</span></a>
                            </li>
                            <li class="nav-item"><a href="lista_compra.php" class="nav-link d-flex align-items-center justify-content-between"><span>Eletrônicos
                                </span><span class="badge badge-secondary">123</span></a>
                            </li>
                            <li class="nav-item"><a href="lista_compra.php" class="nav-link d-flex align-items-center justify-content-between"><span>Livros
                                </span><span class="badge badge-secondary">11</span></a>
                            </li>
                            <li class="nav-item"><a href="lista_compra.php" class="nav-link d-flex align-items-center justify-content-between"><span>Informática
                                </span><span class="badge badge-secondary">11</span></a>
                            </li>
                            <li class="nav-item"><a href="lista_compra.php" class="nav-link d-flex align-items-center justify-content-between"><span>Outros
                                </span><span class="badge badge-secondary">11</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row products products-big">
                    <?php foreach ($itens as $item) : ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="product">
                            <div class="image"><a href="detalhes_item.php"><img src="fotos/<?php $item['foto1'] ?>" class="img-fluid image1"></a></div>
                            <div class="text">
                                <h3 class="h5"><a href="detalhes_item.php"><?php $item['nome'] ?></a></h3>
                                <p class="price">$<?php $item['precoVenda'] ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                        <!-- <div class="col-lg-4 col-md-6">
                        <div class="product">
                            <div class="image"><a href="detalhes_item.php"><img src="img/ps3.jpg" alt="" class="img-fluid image1"></a></div>
                            <div class="text">
                                <h3 class="h5"><a href="detalhes_item.php">ps3</a></h3>
                                <p class="price">
                                    <del>$280</del> $143.00
                                </p>
                            </div>
                            <div class="ribbon-holder">
                                <div class="ribbon sale">SALE</div>
                                <div class="ribbon new">NEW</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="product">
                            <div class="image"><a href="detalhes_item.php"><img src="img/ps3.jpg" alt="" class="img-fluid image1"></a></div>
                            <div class="text">
                                <h3 class="h5"><a href="detalhes_item.php">ps3</a></h3>
                                <p class="price">$143.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="product">
                            <div class="image"><a href="detalhes_item.php"><img src="img/ps3.jpg" alt="" class="img-fluid image1"></a></div>
                            <div class="text">
                                <h3 class="h5"><a href="detalhes_item.php">ps3</a></h3>
                                <p class="price">$143.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="product">
                            <div class="image"><a href="detalhes_item.php"><img src="img/ps3.jpg" alt="" class="img-fluid image1"></a></div>
                            <div class="text">
                                <h3 class="h5"><a href="detalhes_item.php">ps3</a></h3>
                                <p class="price">
                                    <del>$280</del> $143.00
                                </p>
                            </div>
                            <div class="ribbon-holder">
                                <div class="ribbon sale">SALE</div>
                                <div class="ribbon new">NEW</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="product">
                            <div class="image"><a href="detalhes_item.php"><img src="img/ps3.jpg" alt="" class="img-fluid image1"></a></div>
                            <div class="text">
                                <h3 class="h5"><a href="detalhes_item.php">ps3</a></h3>
                                <p class="price">$143.00</p>
                            </div>
                            <div class="ribbon-holder">
                                <div class="ribbon new">NEW</div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="pages">
                    <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                        <ul class="pagination">
                            <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-double-left"></i></a></li>
                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                            <li class="page-item"><a href="#" class="page-link">4</a></li>
                            <li class="page-item"><a href="#" class="page-link">5</a></li>
                            <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </nav>
                </div> -->
            </div>
        </div>
    </div>
</div>
<?php
    require_once('rodape.php');
?>