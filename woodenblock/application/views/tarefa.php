<? $this->load->view('common/header'); ?>

<div class="container">
  <div class="row">
    <h4 class="col offset-m2">Nova tarefa!</h4> 
  </div>
  <div class="row">
      <form class="col s12 col m8 offset-m2" method="post" action="#">
        <div class="row">
          <div class="input-field col s12 col m12">
            <input id="title" required="" type="text" class="validate" value="<?=set_value('title')?>">
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
                  <input class="file-path validate" value="<?=set_value('image')?>" placeholder="imagem tarefa" type="text">
              </div>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 col m12">
            <textarea id="descricao" value="<?=set_value('description')?>" required class="materialize-textarea required validate"></textarea>
              <label for="descricao">Descrição da Tarefa</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 col m6">
            <input placeholder="outros" value="<?=set_value('area')?>" type="text" id="outro">
            <label>Área</label>
          </div>
          <div class="col s12 col m6">
              
                <input name="group1" type="radio" id="1" />
                  <label for="1">Design</label>
            
                  <input name="group1" type="radio" id="2" />
                  <label for="2">Programação</label>
                
                  <input class="with-gap" name="group1" type="radio" id="3"  />
                  <label for="3">WEB</label>

                  <input class="with-gap" name="group1" type="radio" id="4"  />
                  <label for="4">Outro</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 col m6">
            <input placeholder="R$ 1200,00" type="text" id="valor" value="<?=set_value('value')?>">
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
          <div class="input-field col s12 col m12">
            <input id="prazo" type="date" required class="validate" value="<?=set_value('date')?>">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 col m12">
            <textarea id="observacao" class="materialize-textarea"></textarea>
              <label for="observacao">Observações:</label>
          </div>
        </div>
        <div class="row">
        <label>Status:</label>
          <div class="col s12 col m12">
                <input name="group1" type="radio" id="s1" />
                  <label for="s1">Finalizada</label>
            
                  <input name="group1" type="radio" id="s2" />
                  <label for="s2">Em andamento</label>
                
                  <input class="with-gap" name="group1" type="radio" id="s3"  />
                  <label for="s3">Aguardando Desenvolvedor</label>

                  <input class="with-gap" name="group1" type="radio" id="s4"  />
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
              <button class="btn waves-effect waves-light col offset-s4"  name="action">Editar
              </button>
            </div>

             <div class="col s12 col m4">
              <button class="btn waves-effect waves-light col offset-s4"  name="action">Salvar
              </button>
            </div>
        </div>              
      </form>
    </div>
</div>

<? $this->load->view('common/footer'); ?>