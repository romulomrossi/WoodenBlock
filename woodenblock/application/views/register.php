<? $this->load->view('common/header'); ?>

<div class="container">
	<div class="row">
		<h4 class="col offset-m2">Registre-se!</h4>	
	</div>
	<p><?php echo $this->session->flashdata('error'); ?></p>
	<div class="row">
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
	          <input placeholder="fulano@fulano.com" id="email" type="email" class="validate">
	          <label for="email">Email</label>
	        </div>
	        <div class="input-field col s12 col m6">
	          <input id="password" type="password" class="validate">
	          <label for="password">Senha</label>
	        </div>
	      </div>      
	      <div class="row">
	        <div class="input-field col s12">
	        	<textarea id="description" class="materialize-textarea"></textarea>
	            <label for="description">Descreva suas realizações</label>
	        </div> 
	      </div>
	      <div class="row">
	      	<div class="input-field col s12">
	      		<input id="documentNumber" type="text" class="validate">
	      	 	<label for="cpf">CPF/CNPJ</label>
	      	</div>	      	
	      </div>
	      <div class="row">
          	<button class="btn waves-effect waves-light col offset-s4" type="submit" name="action">Pronto
            <i class="material-icons right">send</i>
          	</button>
          </div>	            
	    </form>
	  </div>
</div>

<? $this->load->view('common/footer'); ?>