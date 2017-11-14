<? $this->load->view('common/header'); ?>

<div class="container">
  <div class="row">
    <h4 class="col offset-m2">Nova tarefa!</h4> 
  </div>
  <div class="row">
      <div class="col m8 s12 offset-m2">
      <?php if($this->session->flashdata('error')): ?>
      <div class="col m8 s12 offset-m2">
				<p><?php echo $this->session->flashdata('error'); ?></p>
      </div>
		<?php endif; ?>

      </div>
      <form class="col s12 col m8 offset-m2" method="post" action=<?=base_url('index.php/users/tarefa/create')?> >
        <div class="row">
          <input type="hidden" name="idOwner" value="<?php echo $this->session->userdata('id');?>">
          <div class="input-field col s12 col m12">
            <input name="name" required="" type="text" class="validate" value="<?=set_value('name')?>">
            <label for="name">Título</label>
          </div>
        </div>
        <div class="row">
          <div class="file-field input-field col s12 col m12">
              <div class="btn">
                  <span>File</span>
                  <input type="file">
              </div>
              <div class="file-path-wrapper">
                  <input name="image" class="file-path validate" value="<?=set_value('image')?>" placeholder="imagem tarefa" type="text">
              </div>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 col m12">
            <textarea name="description" value="<?=set_value('description')?>" required class="materialize-textarea required validate"></textarea>
              <label for="descricao">Descrição da Tarefa</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 col m6">
            <input placeholder="WEB/DESIGN/JAVA" value="<?=set_value('area')?>" type="text" name="area">
            <label>Área</label>
          </div>
          <div class="input-field col s12 col m6">
            <input placeholder="R$ 1200,00" type="text" name="value" value="<?=set_value('value')?>">
            <label>Valor:</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 col m12">
            <?php $data_atual = date('Y-m-d'); ?>
            <input name="initialTime" type="hidden" required class="validate" value="<?$data_atual?>">
          </div>
        </div>
        <div class="row">
        <div><label for="prazo">Disponível até:</label></div>
          <div class="input-field col s12 col m12">
            <input name="endTime" type="date" required class="validate" value="<?=set_value('endTime')?>">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 col m12">
            <textarea name="comments" class="materialize-textarea" value="<?=set_value('comments')?>"></textarea>
              <label for="comments">Observações:</label>
          </div>
        </div>
        
        <div class="row">
            <div class="col s12 col m4">
              <button class="btn waves-effect waves-light col offset-s4" type="submit" >Publicar
              <i class="material-icons right">send</i>
              </button>
            </div>

            <div class="col s12 col m4">
              <button class="btn waves-effect waves-light col offset-s4">
              Cancelar
              </button>
            </div>
        </div>              
      </form>
    </div>
</div>

<? $this->load->view('common/footer'); ?>