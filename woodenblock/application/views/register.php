<? $this->load->view('common/header'); ?>

<div class="container">
	<div class="row">
		<h4 class="col offset-m2">Registre-se!</h4>	
	</div>
	
	<div class="row">
		<div class="col m8 s12 offset-m2">
			<?php if($this->session->flashdata('error')): ?>
				<p><?php echo $this->session->flashdata('error');
				?></p>
			<?php endif; ?>
		</div>
			<form class="col s12 col m8 offset-m2" method="post" action=<?=base_url('index.php/users/create')?>>
	      <div class="row">
	        <div class="input-field col s12 col m6">
	          <input name="firstName" type="text" class="validate">
	          <label for="firstName">Nome</label>
	        </div>
	        <div class="input-field col s12 col m6">
	          <input  name="lastName" type="text" class="validate">
	          <label for="lastName">Sobrenome</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12 col m6">
	          <input placeholder="fulano@fulano.com" name="email" type="email" class="validate">
	          <label for="email">Email</label>
	        </div>
	        <div class="input-field col s12 col m6">
	          <input name="password" type="password" class="validate">
	          <label for="password">Senha</label>
	        </div>
	      </div>      
	      <div class="row">
	        <div class="input-field col s12">
	        	<textarea name="description" class="materialize-textarea"></textarea>
	            <label for="description">Descreva suas realizações</label>
	        </div> 
	      </div>
	      <div class="row">
	      	<div class="input-field col s12">
	      		<input name="documentNumber" type="text" class="validate">
	      	 	<label for="cpf">CPF/CNPJ</label>
	      	</div>	      	
	      </div>
	      <div class="row">
          	<button class="btn waves-effect waves-light col offset-s4" type="submit">Pronto
            <i class="material-icons right">send</i>
          	</button>
          </div>	            
	    </form>
	  </div>
</div>

<? $this->load->view('common/footer'); ?>