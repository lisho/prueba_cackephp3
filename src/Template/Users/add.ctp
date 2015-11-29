<div clas="row">
    
    <div class="col-lg-12">
        
        <h1 class="page-header"> <i class="fa fa-user"></i> Nuevo Usuario</h1>
       
    </div> <!-- ./col-lg-12-->
</div> <!-- ./row -->



<div clas="row">
    <div class="col-lg-12">
        
         <div class="panel panel-primary">
            <div class="panel-heading"></div>
            <!-- /.panel-heading -->
            
        <div class="panel-body">
            <div class="users form">
                <?= $this->Form->create($user) ?>
                    <fieldset>
                        <legend><?= __('Añade un nuevo usuario al sistema...') ?></legend>
                        
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
                            <?= $this->Form->input('username') ?>
                        </div>
                        
                        <div class="form-group">
                            <?= $this->Form->input('password') ?>
                        </div>
                        
                        <?= $this->Form->input('role', [
                            'options' => ['admin' => 'Admin', 'formador' => 'Formador']
                        ]) ?>
                   </fieldset>

                    <br>
                        <?= $this->Form->button(__('Crear'), ['type' => 'button', 'class'=>'btn btn-primary']); ?>
                        <?= $this->Form->end() ?>

            </div>
        </div> <!-- /.panel-body -->
    </div>
</div>

