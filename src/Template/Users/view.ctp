<div class="row">
    
    <div class="col-lg-12">
        
        <h1 class="page-header"> <i class="fa fa-user"></i><?= __(' Gestión de Usuarios') ?> </h1>
       
    </div> <!-- ./col-lg-12-->
</div> <!-- ./row -->

<div class="row">
    <div class="col-lg-12">
        
         <div class="panel panel-primary">
            
            <div class="panel-heading">
                 <i class="fa fa-eye"></i>  Perfil de Usuario de <strong><?= h($user->nombre).' '.h($user->apellidos) ?></strong>
            </div>
            <!-- /.panel-heading -->
            
            <div class="panel-body logo_fondo">
                
                <p>
               <b><?= __('Nombre: ') ?></b>
               <?= h($user->nombre) ?>
                </p>
                <p>
               <b><?= __('Apellidos: ') ?></b>
               <?= h($user->apellidos) ?>
                </p>
                <p>
               <b><?= __('Puesto que desempeña en la entidad: ') ?></b>
               <?= h($user->puesto) ?>
                </p>
                <p>
               <b><?= __('Nombre de Usuario: ') ?></b>
               <?= h($user->username) ?>
                </p>
                <p>
               <b><?= __('Teléfono 1: ') ?></b>
               <?= h($user->telefono1) ?>
                </p>
                 <p>
               <b><?= __('Teléfono 2: ') ?></b>
               <?= h($user->telefono2) ?>
                </p>
                 <p>
               <b><?= __('Correo electrónico: ') ?></b>
               <?= h($user->email) ?>
                </p>
               
               <!--
               <p>
               <b><?= __('Rol') ?></b>
               <?= h($user->role) ?>
                </p>
               <p>
               <b><?= __('Id') ?></b>
               <?= $this->Number->format($user->id) ?>
                </p>
                -->
                
               <p>
               <b><?= __('Fecha de creación: ') ?></b>
               <?= h($user->created) ?>
                </p>
               <p>
               <b><?= __('Fecha de última modificación: ') ?></b>
               <?= h($user->modified) ?>
               </p>
               
               <?= $this->Html->link(__('Editar este perfil'), ['controller' => 'Users', 'action' => 'edit',$user->id],['type' => 'button', 'class'=>'btn btn-primary']); ?>
            
            </div>
        </div>
    </div>
</div>


