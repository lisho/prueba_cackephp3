

<div class="dropdown boton_helper">
    <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-xs btn-primary btn-outline" data-target="#" href="/page.html">
      <span class=" fa fa-plus"></span>
      <i class="fa fa-bell"></i>
      <span class="caret"></span>
    </a>
    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
      
      <li>
      <?= $this->Form->create() ?>
      <div class="panel panel-info">
        
         
         <div class="panel-heading">
                   
                  <?= __('Añade una alerta...') ?>
         </div>
         
         <div class="panel-body">
             <div class="form-group">
                <?= $this->Form->input('Título') ?>
            </div>
            
             <div class="form-group">
                <?= $this->Form->textarea('Descripción') ?>
            </div>

          <!--   <div class="form-group">
                <?= $this->Form->input('telefono2', ['label'=>'Teléfono 2']) ?>
            </div>

            <?= $this->Form->input('role', [
                'options' => ['admin' => 'Admin', 'formador' => 'Formador']
            ]) ?>-->

        </div>
        
        <div class="panel-footer text-center">
            <?= $this->Form->button(__('<i class="fa fa-save "></i>  Crear'), ['type' => 'submit', 'class'=>'btn btn-lg btn-outline form-btn btn-success']); ?>
        </div>
          <?= $this->Form->end() ?> 
      </div>
      </li>
      
    </ul>

