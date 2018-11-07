<?php
session_start();
require_once('cabecalho.php');
include("conecta.php");
?>
<div id="content">
    <div id="contact" class="container">
        <section class="bar">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Iremos Ajudar Você a vender !!</h2>
                    </div>
                    <p class="lead">Antes de Anunciarmos, preencha os campos do formulário a seguir, detalhando o produto para os futuros compradores.</p>
                </div>
            </div>
        </section>
        <section class="bar pt-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading text-center">
                        <h2>Formulário de Venda</h2>
                    </div>
                </div>
                <div class="col-md-8 mx-auto">
                    <form action="anunciar-produto.php" enctype="multipart/form-data" method="POST">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="anuncio">Título do Anúncio</label>
                                    <input type="text" maxlength="80" id="anuncio" name="anuncio" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="categoria">Categoria</label>
                                    <select class="custom-select" id="categoria" name="categoria">
                                        <option selected>Escolha...</option>
                                        <option value="1">Jogos</option>
                                        <option value="2">Eletrônicos</option>
                                        <option value="3">Livros</option>
                                        <option value="4">Informática</option>
                                        <option value="5">Outros</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="status">Condição do Produto</label>
                                    <select class="custom-select" id="status" name="status">
                                        <option selected>Escolha...</option>
                                        <option value="1">Novo</option>
                                        <option value="2">Usado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="cidade">Cidade</label>
                                    <input type="text" maxlength="45" id="cidade" name="cidade" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="estado">Estado</label>
                                    <input type="text" maxlength="45" id="estado" name="estado" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="marca">Marca</label>
                                    <input type="text" maxlength="30" id="marca" name="marca" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="modelo">Modelo</label>
                                    <input type="text" maxlength="30" id="modelo" name="modelo" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="valor">Valor</label>
                                    <!-- <input type="text" min="0" max="999.99" step="0.01" id="valor" name="valor" class="form-control"> -->
                                    <input type="number" id="valor" min="0" max="999999.99" step="0.01" name="valor" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="foto">Foto 1</label>
                                    <input type="file" class="form-control-file" name="foto1">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="foto">Foto 2</label>
                                    <input type="file" class="form-control-file" name="foto2">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="foto">Foto 3</label>
                                    <input type="file" class="form-control-file" name="foto3">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="descricao">Descrição </label>
                                    <textarea id="descricao" name="descricao" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-template-outlined"><i class="fa fa-envelope-o"></i>
                                    Anunciar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

<?php
    require_once('rodape.php');
?>