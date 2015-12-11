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
                            <?= $this->Form->input('user_id', ['options' => $users]); ?>
                        </div>
                        
                        <div class="form-group">
                            <?= $this->Form->input('importancia_aviso_id', ['options' => $importanciaAvisos]); ?>
                        </div>
                        
                        <div class="form-group">
                            <?= $this->Form->input('tipo_aviso_id', ['options' => $tipoAvisos]); ?>
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



<div class="avisos form large-9 medium-8 columns content">
    <?= $this->Form->create($aviso) ?>
    <fieldset>
        <legend><?= __('Add Aviso') ?></legend>
        <?php
            echo $this->Form->input('titulo');
            echo $this->Form->input('descripcion');
            echo $this->Form->input('caduca', ['empty' => true]);
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('importancia_aviso_id', ['options' => $importanciaAvisos]);
            echo $this->Form->input('tipo_aviso_id', ['options' => $tipoAvisos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
