<?php
    require_once('cabecalho.php');
?>
<div id="content">
  <div class="container">
    <div class="row bar">
      <div class="panel panel-default sidebar-menu">
        <div class="panel-heading">
          <h3 class="h4 panel-title">Menu</h3>
        </div>
        <div class="panel-body">
          <ul class="nav nav-pills flex-column text-sm">
            <li class="nav-item"><a href="home.php" class="nav-link"><i class="fa fa-list"></i>
                Meus Pedidos</a></li>
            <li class="nav-item"><a href="lista_venda.php" class="nav-link"><i class="fa fa-list"></i>
                Meus Produtos</a></li>
            <li class="nav-item"><a href="lista_desejos.php" class="nav-link active"><i class="fa fa-heart"></i>
                Lista de Desejos</a></li>
            <li class="nav-item"><a href="minha_conta.php" class="nav-link"><i class="fa fa-user"></i>
                Minha Conta</a></li>
            <li class="nav-item"><a href="index.php" class="nav-link"><i class="fa fa-sign-out"></i>
                Logout</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="row products">
          <div class="col-lg-3 col-md-4">
            <div class="product">
              <div class="image"><a href="detalhes_item.php"><img src="img/geladeira.jpg" alt="" class="img-fluid image1"></a></div>
              <div class="text">
                <h3 class="h5"><a href="detalhes_item.php">Geladeira</a></h3>
                <p class="price">$900,00</p>
              </div>
              <div class="ribbon-holder">
                <div class="ribbon sold">Vendido</div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="product">
              <div class="image"><a href="detalhes_item.php"><img src="img/raquete.jpg" alt="" class="img-fluid image1"></a></div>
              <div class="text">
                <h3 class="h5"><a href="detalhes_item.php">Raquete Butterfly</a></h3>
                <p class="price">
                  <del>$280</del> $160,00
                </p>
              </div>
              <div class="ribbon-holder">
                <div class="ribbon new">Novo</div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="product">
              <div class="image"><a href="detalhes_item.php"><img src="img/relogio.jpg" alt="" class="img-fluid image1"></a></div>
              <div class="text">
                <h3 class="h5"><a href="detalhes_item.php">Relógio</a></h3>
                <p class="price">$540,00</p>
              </div>
              <div class="ribbon-holder">
                <div class="ribbon sale">À Venda</div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="product">
              <div class="image"><a href="detalhes_item.php"><img src="img/ps3.jpg" alt="" class="img-fluid image1"></a></div>
              <div class="text">
                <h3 class="h5"><a href="detalhes_item.php">Playstation 3</a></h3>
                <p class="price">$800,00</p>
              </div>
              <div class="ribbon-holder">
                <div class="ribbon new">Novo</div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="product">
              <div class="image"><a href="detalhes_item.php"><img src="img/cronicas.jpg" alt="" class="img-fluid image1"></a></div>
              <div class="text">
                <h3 class="h5"><a href="detalhes_item.php">Crônicas de Gelo e Fogo Vol.1</a></h3>
                <p class="price">
                  <del>$64</del> $43,00
                </p>
              </div>
              <div class="ribbon-holder">
                <div class="ribbon sale">À Venda</div>
                <div class="ribbon new">Novo</div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="product">
            <div class="image"><a href="detalhes_item.php"><img src="img/cronicas.jpg" alt="" class="img-fluid image1"></a></div>
              <div class="text">
                <h3 class="h5"><a href="detalhes_item.php">Crônicas de Gelo e Fogo Vol.1</a></h3>
                <p class="price">
                  <del>$64</del> $43,00
                </p>
              </div>
              <div class="ribbon-holder">
                <div class="ribbon gift">Presente</div>
                <div class="ribbon new">Novo</div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
          <div class="product">
            <div class="image"><a href="detalhes_item.php"><img src="img/cronicas.jpg" alt="" class="img-fluid image1"></a></div>
              <div class="text">
                <h3 class="h5"><a href="detalhes_item.php">Crônicas de Gelo e Fogo Vol.1</a></h3>
                <p class="price">
                  <del>$64</del> $43,00
                </p>
              </div>
              <div class="ribbon-holder">
              <div class="ribbon sale">À Venda</div>
                <div class="ribbon new">Novo</div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
          <div class="product">
            <div class="image"><a href="detalhes_item.php"><img src="img/cronicas.jpg" alt="" class="img-fluid image1"></a></div>
              <div class="text">
                <h3 class="h5"><a href="detalhes_item.php">Crônicas de Gelo e Fogo Vol.1</a></h3>
                <p class="price">
                  <del>$64</del> $43,00
                </p>
              </div>
              <div class="ribbon-holder">
              <div class="ribbon sold">Vendido</div>
                <div class="ribbon new">Novo</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
    require_once('rodape.php');
?>