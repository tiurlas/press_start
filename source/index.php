<?php
session_start();
  require_once('cabecalho.php');
?>

<section style="background: url('img/photogrid.jpg') center center repeat; background-size: cover;" class="relative-positioned">
    <!-- Carousel Start-->
    <div class="home-carousel">
        <div class="dark-mask mask-primary"></div>
        <div class="container">
            <div class="homepage owl-carousel">
                <div class="item">
                    <div class="row">
                        <div class="col-md-5 text-right">
                            <p><img src="img/Press-Start-extends.png" alt="" class="ml-auto logo-tamanho-lg"></p>
                            <h1>A nova forma de Negócio</h1>
                            <p>O método Inteligente de<br>Comprar e Vender.</p>
                        </div>
                        <div class="col-md-7"><img src="img/bi-carrousel.png" alt="" class="img-fluid"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-7 text-center"><img src="img/trade-speed.png" alt="" class="img-fluid"></div>
                        <div class="col-md-5">
                            <h2>Velocidade e segurança em suas transações</h2>
                            <ul class="list-unstyled">
                                <li>Receba em menos de 30 dias</li>
                                <li>Garantia de Recebimento</li>
                                <li>Menores taxas do Mercado</li>
                                <li>Sistema integrado a vários Bancos</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-5 text-right">
                            <h1>Garantia de Entrega</h1>
                            <ul class="list-unstyled">
                                <li>Item Enviado após confirmação de pagamento</li>
                                <li>Entregas Rápidas</li>
                                <li>Segurança e Rastreamento dos produtos</li>
                                <li>Prevenção de Golpes</li>
                            </ul>
                        </div>
                        <div class="col-md-7"><img src="img/entrega.png" alt="" class="img-fluid"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-7"><img src="img/forma-pagamento.png" alt="" class="img-fluid"></div>
                        <div class="col-md-5">
                            <h1>Diversas Formas de Pagamento</h1>
                            <ul class="list-unstyled">
                                <li>Escolha a melhor opção para você</li>
                                <li>Parcele em até 12x</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End-->
</section>

<?php
  require_once('rodape.php');
?>