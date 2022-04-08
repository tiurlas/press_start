<?php
    session_start();
    include("conecta.php");
    require_once("logica-usuario.php"); 
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
                        <li class="nav-item"><a href="lista_desejos.php" class="nav-link"><i class="fa fa-heart"></i>
                                Lista de Desejos</a></li>
                        <li class="nav-item"><a href="minha_conta.php" class="nav-link active"><i class="fa fa-user"></i>
                                Minha Conta</a></li>
                        <li class="nav-item"><a href="logout.php" class="nav-link"><i class="fa fa-sign-out"></i>
                                Logout</a></li>
                    </ul>
                </div>
            </div>
            <div id="customer-account" class="col-lg-9 clearfix">
                <div class="box mt-5">
                    <div class="heading">
                        <h3 class="text-uppercase">Trocar Senha</h3>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password_old">Senha antiga</label>
                                    <input id="password_old" type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password_1">Nova Senha</label>
                                    <input id="password_1" type="password" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password_2">Repita a Nova Senha</label>
                                    <input id="password_2" type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-template-outlined"><i class="fa fa-save"></i> Salvar Nova Senha</button>
                        </div>
                    </form>
                </div>
                <div class="bo3">
                    <div class="heading">
                        <h3 class="text-uppercase">Detalhes Pessoal</h3>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstname">Nome</label>
                                    <input id="firstname" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastname">Sobrenome</label>
                                    <input id="lastname" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="street">Endereço</label>
                                    <input id="street" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label for="state">Estado</label>
                                    <select id="state" class="form-control"></select>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label for="country">País</label>
                                    <select id="country" class="form-control"></select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label for="city">Complemento</label>
                                    <input id="city" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label for="zip">CEP</label>
                                    <input id="zip" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Telefone</label>
                                    <input id="phone" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email_account">E-mail</label>
                                    <input id="email_account" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email_account">E-mail Secundário</label>
                                    <input id="email_account" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-template-outlined"><i class="fa fa-save"></i> Salvar Alterações</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    require_once('rodape.php');
?>