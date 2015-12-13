
<div class="row">
    
    <div class="col-lg-12">
        
        <h1 class="page-header"> <i class="fa fa-user"></i> Editar el Perfil<small> de <?= h($user->nombre).' '.h($user->apellidos) ?></small></h1>
       
    </div> <!-- ./col-lg-12-->
</div> <!-- ./row -->

<div class="row">
    <div class="col-lg-12">
        
         <div class="panel panel-primary">
            
            <div class="panel-heading">
               <i class="fa fa-edit">  </i>  Editar Perfil de <strong><?= h($user->nombre).' '.h($user->apellidos) ?></strong>
            </div>
            <!-- /.panel-heading -->
            
            <div class="panel-body logo_fondo">
                <div class="users form">
                    
                    <?= $this->Form->create($user) ?>
                    <fieldset>
                        <legend><?= __('Añade/Edita los datos de este perfil...') ?></legend>
                        
                            <div class="form-group">
                            <?=$this->Form->input('nombre'); ?>
                            </div>
                            
                            <div class="form-group">
                            <?=$this->Form->input('apellidos'); ?>
                            </div>
                            
                            <div class="form-group">
                            <?=$this->Form->input('puesto'); ?>
                            </div>
                            
                            <div class="form-group">
                            <?=$this->Form->input('telefono1'); ?>
                            </div>
                            
                            <div class="form-group">
                            <?=$this->Form->input('telefono2'); ?>
                            </div>
                            
                            <div class="form-group">
                            <?=$this->Form->input('email'); ?>
                            </div>
                            
                            <div class="form-group">
                            <?=$this->Form->input('username'); ?>
                            </div>
                            
                            <div class="form-group">
                            <?=$this->Form->input('password'); ?>
                            </div>
                            
                            <div class="form-group">
                            <?=$this->Form->input('role'); ?>
                            </div>
                            

                    </fieldset>
                    
          
                       <p>
                           <div>
                        <?= $this->Form->button(__('<i class="fa fa-save "></i> Guardar cambios'), ['type' => 'submit', 'class'=>'btn btn-lg btn-outline form-btn btn-success']); ?>
                        <?= $this->Form->end() ?>
                           </div> 
                            
                           <div>
                        <?= $this->Html->link(__('VOLVER SIN GUARDAR'), ['controller' => 'Users', 'action' => 'index'],['type' => 'button','class'=>'btn btn-lg btn-outline form-btn btn-primary']); ?>
                           </div>
                        </p> 
                    
                </div>
            </div> <!-- /.panel-body -->
        </div> 
    </div>
</div>


