<?php
    require_once('cabecalho.php');
?>
<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="box">
          <h2 class="text-uppercase">Nova Conta</h2>
          <p class="lead">Não está Cadastrado?</p>
          <p>Com uma conta na Press Start, um novo mundo de compras e vendas estará aberto 
            para que possa desfrutar ao Máximo!</p>
          <p class="text-muted">Se possui alguma dúvida, <a href="contato.php">entre em contato conosco</a> para que possamos ajudá-lo,
            pois nem todos tem um serviço de ajuda 24/7.</p>
          <hr>
          <form action="cadastro.php" method="POST">
            <div class="form-group">
              <label for="name-login">Nome</label>
              <input id="name-login" name="nome" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="email-login">E-mail</label>
              <input id="email-login" name="email" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="password-login">Senha</label>
              <input id="password-login" name="senha" type="password" class="form-control">
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-template-outlined"><i class="fa fa-user-md"></i> Registrar</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="box">
          <h2 class="text-uppercase">Login</h2>
          <p class="lead">Já possui uma conta?
          </p>
          <p class="text-muted">Entre e veja quais são as novidades a venda ou para vender.</p>
          <hr>
          <form action="login.php" method="POST">
            <div class="form-group">
              <label for="email">E-mail</label>
              <input id="email" name="email" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="password">Senha</label>
              <input id="password" name="senha" type="password" class="form-control">
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Log in</button>
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