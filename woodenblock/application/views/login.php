<? $this->load->view('common/header'); ?>
<div class="container">
  <div class="row">
    <h3 class="col offset-s2">  Entrar </h3>
  </div>
  <div class="row">
    <?php if($this->session->flashdata('error')): ?>
      <div class="col m8 s12 offset-m2">
				<p><?php echo $this->session->flashdata('error'); ?></p>
      </div>
		<?php endif; ?>

    <?php if($this->session->flashdata('registerSuccess')): ?>
      <div class="col m8 s12 offset-m2">
				<p><?php echo $this->session->flashdata('registerSuccess'); ?></p>
      </div>
		<?php endif; ?>


    <form class="col s12 col m8 offset-m2" method="post" action="<?=base_url('index.php/users/login')?>">
      <div class="row">
        <div class="input-field col s12 col m12">
          <i class="material-icons prefix">account_circle</i>
          <input name="email" type="email" class="validate required">
          <label for="email">E-mail</label>
        </div>
        <div class="input-field col s12 col m12">
          <i class="material-icons prefix">check</i>
          <input name="password" type="password" class="validate required">
          <label for="password">Senha</label>
        </div>
        <div class="row">
          <button class="btn waves-effect waves-light col offset-s4" type="submit">Entrar
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div>
    </form>
  </div>
</div>

<? $this->load->view('common/footer'); ?>