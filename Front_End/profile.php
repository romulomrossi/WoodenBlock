<?php
include 'header.php';
?>


	<div class="row">
    <div class="col s12 col m3 offset-s2 offset-m1" >			
      		<img src="https://scontent.fpoa10-1.fna.fbcdn.net/v/t1.0-9/15107270_1017594778364069_4131013435164946840_n.jpg?oh=4a306a52c601c4c16b238456c77a46c9&oe=5A5714BC" alt="" class="circle" width="200px">
            <h4> Anthony Cassol </h4>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
    </div>
         <!-- Modal Trigger -->
    <div class="col s12 col m8 ">
        <div class= "collection">
          <a class= "modal-trigger collection-item" href="#modal1"> <i class="material-icons large">access_time</i> <h5>Tarefas Por Fazer</h5></a>
        </div>
        <div class= "collection">
          <a class= "modal-trigger collection-item" href="#modal2"> <i class="material-icons large">cached</i> <h5>Tarefas Em Andamento</h5></a>
        </div>
        <div class= "collection">
          <a class= "modal-trigger collection-item" href="#modal3"> <i class="material-icons large">checked</i> <h5>Tarefas Executadas</h5></a>
        </div>

        <!-- Modal Structure -->

        <div id="modal1" class="modal modal-fixed-footer">
          <div class="modal-content">
            <div class="col s12 m6">
               <h6 class="header">Fazer uma Logo (CSGO)</h6>
               <div class="card horizontal">
                 <div>
                   <img src="https://i.ytimg.com/vi/FwfSSBGf2S4/maxresdefault.jpg" class="circle" width="150px">
                 </div>
                 <div class="card-stacked">
                   <div class="card-content">
                     <p>I am a very simple card. I am good at containing small bits of information.</p>
                   </div>
                   <div class="card-action">
                     <div class="progress">
                         <div class="determinate" style="width: 80%"></div>
                     </div>
                   </div>
                 </div>

               </div>
             </div>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">OK</a>
          </div>
        </div>
    </div>
  </div>

<?php
include 'footer.php';
?>
