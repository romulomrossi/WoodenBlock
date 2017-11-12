<? $this->load->view('common/header'); ?>

<div class="container">
  <div class="row">
    <h4 class="col offset-m2">Nova tarefa!</h4> 
  </div>
  <div class="row">
      <div class="col m8 s12 offset-m2">
        <?php if($this->session->flashdata('error')): ?>
          <p><?php echo $this->session->flashdata('error'); ?></p>
        <?php endif; ?>
      </div>
      <form class="col s12 col m8 offset-m2" method="post" action=<?=base_url('index.php/users/tarefa/create')?> >
        <div class="row">
          <div class="input-field col s12 col m12">
            <input name="title" required="" type="text" class="validate" value="<?=set_value('title')?>">
            <label for="title">Título</label>
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
            <textarea name="descricao" value="<?=set_value('descricao')?>" required class="materialize-textarea required validate"></textarea>
              <label for="descricao">Descrição da Tarefa</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 col m6">
            <input placeholder="WEB/DESIGN/JAVA" value="<?=set_value('area')?>" type="text" name="area">
            <label>Área</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 col m6">
            <input placeholder="R$ 1200,00" type="text" name="value" value="<?=set_value('value')?>">
            <label>Valor:</label>
          </div>
          <div class="col s12 col m6">
              
                <input name="group1" type="radio" id="v1" />
                  <label for="v1">Definir Valor</label>
            
                  <input name="group1" type="radio" id="v2" />
                  <label for="v2">Aberto para publicações</label>
        
          </div>
        </div>
        <div class="row">
        <div><label for="prazo">Disponível até:</label></div>
          <div class="input-field col s12 col m12">
            <input name="prazo" type="date" required class="validate" value="<?=set_value('prazo')?>">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 col m12">
            <textarea name="observacao" class="materialize-textarea"></textarea>
              <label for="observacao">Observações:</label>
          </div>
        </div>
        <div class="row">
        <label>Status:</label>
          <div class="col s12 col m12">
                <input name="status" type="radio" id="s1" value="5" />
                  <label for="s1">Finalizada</label>
            
                  <input name="status" type="radio" id="s2" value="2" />
                  <label for="s2">Em andamento</label>
                
                  <input class="with-gap" name="status" type="radio" id="s3" value="1" />
                  <label for="s3">Aguardando Desenvolvedor</label>

                  <input class="with-gap" name="status" type="radio" id="s4" value="4" />
                  <label for="s4">Aguardando Pagamento</label>
          </div>
        </div>
        
        <div class="row">
            <div class="col s12 col m4">
              <button class="btn waves-effect waves-light col offset-s4" type="submit" name="action">Publicar
              <i class="material-icons right">send</i>
              </button>
            </div>

            <div class="col s12 col m4">
              <button class="btn waves-effect waves-light col offset-s4"  name="action">
              Cancelar
              </button>
            </div>
        </div>              
      </form>
    </div>
</div>

<? $this->load->view('common/footer'); ?>