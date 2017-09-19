<?php
include 'header.php';
?>

<div class="container">
  <div class="row">
    <h3 class="col offset-s2">	Entrar </h3>
  </div>
  <div class="row">
    <form class="col s12 col m8 offset-m2" method="post" action="#">
      <div class="row">
        <div class="input-field col s12 col m12">
          <i class="material-icons prefix">account_circle</i>
          <input id="email_login" type="email" class="validate required">
          <label for="email_login">E-mail</label>
        </div>
        <div class="input-field col s12 col m12">
          <i class="material-icons prefix">check</i>
          <input id="senha_login" type="password" class="validate required">
          <label for="senha_login">Senha</label>
        </div>
        <div class="row">
          <button class="btn waves-effect waves-light col offset-s4" type="submit" name="action">Entrar
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php
include 'footer.php';
?>
