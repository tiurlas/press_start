<?php
    require_once('cabecalho.php');
?>
<div id="content">
    <div class="container">
        <div class="row bar mb-0">
        <div class="col-md-3 mt-4 mt-md-0">
                <!-- CUSTOMER MENU -->
            <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                    <h3 class="h4 panel-title">Menu</h3>
                </div>
                <div class="panel-body">
                    <ul class="nav nav-pills flex-column text-sm">
                        <li class="nav-item"><a href="home.php" class="nav-link active"><i class="fa fa-list"></i>
                                    Meus Pedidos</a></li>
                        <li class="nav-item"><a href="lista_venda.php" class="nav-link"><i class="fa fa-list"></i>
                                    Meus Produtos</a></li>
                        <li class="nav-item"><a href="lista_desejos.php" class="nav-link"><i class="fa fa-heart"></i>
                                    Lista de Desejos</a></li>
                        <li class="nav-item"><a href="minha_conta.php" class="nav-link"><i class="fa fa-user"></i>
                                    Minha Conta</a></li>
                        <li class="nav-item"><a href="logout.php" class="nav-link"><i class="fa fa-sign-out"></i>
                                    Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
            <div id="customer-orders" class="col-md-9">
                <div class="box mt-0 mb-lg-0">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nº Pedido</th>
                                    <th>Data compra</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th># 1735</th>
                                    <td>22/06/2013</td>
                                    <td>$ 150.00</td>
                                    <td><span class="badge badge-info">Em Preparo</span></td>
                                </tr>
                                <tr>
                                    <th># 1735</th>
                                    <td>22/06/2013</td>
                                    <td>$ 150.00</td>
                                    <td><span class="badge badge-info">Em Preparo</span></td>
                                </tr>
                                <tr>
                                    <th># 1735</th>
                                    <td>22/06/2013</td>
                                    <td>$ 150.00</td>
                                    <td><span class="badge badge-success">Recebido</span></td>
                                </tr>
                                <tr>
                                    <th># 1735</th>
                                    <td>22/06/2013</td>
                                    <td>$ 150.00</td>
                                    <td><span class="badge badge-danger">Cancelado</span></td>
                                </tr>
                                <tr>
                                    <th># 1735</th>
                                    <td>22/06/2013</td>
                                    <td>$ 150.00</td>
                                    <td><span class="badge badge-warning">Aguardando</span></td>
                                </tr>
                                <tr>
                                    <th># 1735</th>
                                    <td>22/06/2013</td>
                                    <td>$ 150.00</td>
                                    <td><span class="badge badge-warning">Aguardando</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    require_once('rodape.php');
?>