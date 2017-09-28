<?php
include 'header.php';
?>
<div class="container">
	<div class="row">
		<h4 class="col offset-m2">Registre-se!</h4>	
	</div>
	<div class="row">
	    <form class="col s12 col m8 offset-m2" method="post" action="#">
	      <div class="row">
	        <div class="input-field col s12 col m6">
	          <input id="first_name" type="text" class="validate">
	          <label for="first_name">Nome</label>
	        </div>
	        <div class="input-field col s12 col m6">
	          <input  id="last_name" type="text" class="validate">
	          <label for="last_name">Sobrenome</label>
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
	        	<textarea id="textarea1" class="materialize-textarea"></textarea>
	            <label for="textarea1">Descreva suas realizações</label>
	        </div> 
	      </div>
	      <div class="row">
	      	<div class="input-field col s12">
	      		<input id="cpf" type="text" class="validate">
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

<?php
include 'footer.php';
?>