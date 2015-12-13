
<div class="row">
    
    <div class="col-lg-12">
        
        <h1 class="page-header"> <i class="fa fa-bell"></i> <?= __('Gestión de Avisos') ?></h1>
       
    </div> <!-- ./col-lg-12-->
</div> <!-- ./row -->



<div class="row">
    <div class="col-lg-12">
        
         <div class="panel panel-primary">
            <div class="panel-heading"><i class="fa fa-edit"></i>  Editar un Aviso</div>
            <!-- /.panel-heading -->
            
        <div class="panel-body logo_fondo">
            <div class="users form">
                <?= $this->Form->create($aviso) ?>
                    <fieldset>
                        <legend><?= __('Crea un nuevo aviso ...') ?></legend>
                        
                         <div class="form-group">
                            <?= $this->Form->input('titulo') ?>
                        </div>
                        
                         <div class="form-group">
                             <p><label for="descripcion">Descripción <span class="text-danger">*</span></label></p>
                            <?= $this->Form->textarea('descripcion', ['rows' => '7', 'cols' => '55']) ?>
                        </div>
                        
                        <div class="form-group">
                            
                            <?= $this->Form->input('caduca', [
                                                        'empty' => true,
                                                        ]); ?>
                           
                        </div>
             
                        <div class="form-group">
                            <?= $this->Form->input('user_id', ['options' => $users]); ?>
                        </div>
                        
                        <div class="form-group">
                            <?= $this->Form->input('importancia_aviso_id', ['options' => $importanciaAvisos]); ?>
                        </div>
                        
                        <div class="form-group">
                            <?= $this->Form->input('tipo_aviso_id', ['options' => $tipoAvisos]); ?>
                        </div>
                        
                        
                   </fieldset>

                   <p>
                    
                    <div>
                        <?= $this->Form->button(__('<i class="fa fa-save "></i>  Guardar Cambios'), ['type' => 'submit', 'class'=>'btn btn-lg btn-outline form-btn btn-success']); ?>
                        
                        <?= $this->Form->end() ?>
                    </div>
                    <div>
                        <?= $this->Html->link(__('VOLVER SIN GUARDAR'), ['controller' => 'Avisos', 'action' => 'index'],['type' => 'button','class'=>'btn btn-lg btn-outline form-btn btn-primary']); ?>
                    </div>
                    
                    </p>
                    
                </div>
            </div> <!-- /.panel-body -->
        </div> 
    </div>
</div>
