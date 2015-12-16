<div class="row">
    
    <div class="col-lg-12">
        
        <h1 class="page-header"> <i class="fa fa-bell"></i> <?= __('Gestión de Avisos') ?></h1>
       
    </div> <!-- ./col-lg-12-->
</div> <!-- ./row -->



<div class="row">
    <div class="col-lg-12">
        
         <div class="panel panel-primary">
            <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i>  Generar un Nuevo Aviso</div>
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
                            <?= $this->Form->textarea('descripcion', ['rows' => '5', 'cols' => '45']) ?>
                        </div>
                        
                        <div class="form-group">
                            <?= $this->Form->input('caduca', [
                                                        'empty' => true,
                                                        ]); ?>
                           
                        </div>
             
                        <div class="form-group">
                            <?= $this->Form->hidden('user_id', ['default' => $auth['id']]); ?>
                        </div>
                        
                        <div class="form-group">
                            <?= $this->Form->input('importancia_aviso_id', ['options' => $importanciaAvisos]); ?>
                        </div>
                        
                        <div class="form-group">
                            <?= $this->Form->input('tipo_aviso_id', ['options' => $tipoAvisos]); ?>
                        </div>
                        
                        
                   </fieldset>
                    
                    <p>
     
                    <div class="">
                        <?= $this->Form->button(__('<i class="fa fa-save "></i>  Crear'), ['type' => 'submit', 'class'=>'btn btn-lg btn-outline form-btn btn-success']); ?>
                        
                        <?= $this->Form->end() ?>
                    </div>
                    <div>
                        <?= $this->Html->link(__('VOLVER SIN CREAR AVISO'), ['controller' => 'Avisos', 'action' => 'index'],['type' => 'button','class'=>'btn btn-lg btn-outline form-btn btn-primary']); ?>
                    </div>
                    
                    </p>
                </div>
            </div> <!-- /.panel-body -->
        </div> 
    </div>
</div>


