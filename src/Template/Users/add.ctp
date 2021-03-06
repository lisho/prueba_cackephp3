<div class="row">
    
    <div class="col-lg-12">
        
        <h1 class="page-header"> <i class="fa fa-user"></i> <?= __('Gestión de Usuarios') ?></h1>
       
    </div> <!-- ./col-lg-12-->
</div> <!-- ./row -->



<div class="row">
    <div class="col-lg-12">
        
         <div class="panel panel-primary">
            <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i>  Crear un Nuevo Usuario</div>
            <!-- /.panel-heading -->
            
        <div class="panel-body logo_fondo">
            <div class="users form">
                <?= $this->Form->create($user, ["type"=>"file"]) ?>
                    <fieldset>
                        
                            <legend><?= __('Añade un nuevo usuario al sistema...') ?></legend>
                    
                    <div class="col-lg-12">
                          <div class="col-lg-6">  
                             <div class="form-group">
                                <?= $this->Form->input('nombre') ?>
                            </div>
                            
                             <div class="form-group">
                                <?= $this->Form->input('apellidos') ?>
                            </div>
                            
                            <div class="form-group">
                                <?= $this->Form->input('puesto') ?>
                            </div>
                            
                            <div class="form-group">
                                <?= $this->Form->input('telefono1', ['label'=>'Teléfono 1']) ?>
                            </div>
                            
                            <div class="form-group">
                                <?= $this->Form->input('telefono2', ['label'=>'Teléfono 2']) ?>
                            </div>
                            
                            <div class="form-group">
                                <?= $this->Form->input('email') ?>
                            </div>
                            
                            <div class="form-group">
                                <?= $this->Form->input('username',['default'=>'']) ?>
                            </div>
                            
                            <div class="form-group">
                                <?= $this->Form->input('password',['default'=>'']) ?>
                            </div>
                            
                            <?= $this->Form->input('role', [
                                'options' => ['admin' => 'Admin', 'formador' => 'Formador', 'tecnico'=>'Técnico']
                            ]) ?>
                        
                         </div>
                            
                         <div class="col-lg-6">
                         
                             <div class="form-group">
                                 <h4 class="rojo_subrayado">Añadir foto de perfil:</h4>
            
                                <?= $this->Form->input('foto', [
                                                    'type'=>'file',
                                                  'label'=>'Selecciona un archivo para añadir la foto de perfil:']); ?>  
                            </div> 
                            
                        </div>
                   </fieldset>

                    <br>
                    <div class="container">
                        <?= $this->Form->button(__('<i class="fa fa-save "></i>  Crear'), ['type' => 'submit', 'class'=>'btn btn-lg btn-outline form-btn btn-success']); ?>
                        
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div> <!-- /.panel-body -->
        </div> 
    </div>
</div>
</div>
