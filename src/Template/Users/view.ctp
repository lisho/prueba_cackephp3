<?php

$titulo="Gestión de Usuarios";
$logo_titulo="fa fa-user";
$titulo_panel="Perfil de Usuario de <strong> $user->nombre  $user->apellidos </strong>";
$logo_titulo_panel="fa fa-eye";
$texto_boton="Editar Perfil";

// url del Botón:
$controller="Users";
$action="edit";
$extra="$user->id";

?>


<div class="row">
    
    <div class="col-lg-12">
        
        <h1 class="page-header"> <i class="<?= $logo_titulo;?>"></i><?= __(' Gestión de Usuarios') ?> </h1>
       
    </div> <!-- ./col-lg-12-->
</div> <!-- ./row -->

<div class="row">
    <div class="col-lg-12">
        
         <div class="panel panel-primary">
            
            <div class="panel-heading">
                 <i class="<?= $logo_titulo_panel;?>"></i>  <?= '  '.$titulo_panel; ?>
            </div>
            <!-- /.panel-heading -->
            
            <div class="panel-body logo_fondo">
                
                <div class="col-lg-6">
                
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
                   
                   <?php if ($auth['id']== $user->id || $auth['role']=="admin" ): ?>
                   
                   <?= $this->Html->link(__($texto_boton), ['controller' => $controller, 'action' => $action, $extra],['type' => 'button', 
                                                                                                                            'class'=>'btn btn-lg btn-outline form-btn btn-primary',
                                                                                                                            ]); ?>
                   <?php endif; ?>
                
                 </div>
                 
                 <div class="col-lg-6">
                      <div class="panel panel-info sin_sombra">
                          <div class="panel-heading">
                          </div>
                          <div class="panel-body"> 
                              <!-- Nav tabs -->
                              <ul class="nav nav-tabs">
                                  <li class="active"><a href="#avisos" data-toggle="tab">Avisos</a>
                                  </li>
                                  <li><a href="#profile" data-toggle="tab">Profile</a>
                                  </li>
                                  <li><a href="#messages" data-toggle="tab">Messages</a>
                                  </li>
                                  <li><a href="#settings" data-toggle="tab">Settings</a>
                                  </li>
                              </ul>
            
                              <!-- Tab panes -->
                              <div class="tab-content">
                                  <div class="tab-pane fade in active" id="avisos">
                                       <h4>Mis Avisos Publicados</h4>
                                       <?= $this->element('UserElements/mis_avisos'); ?>
                                  </div>
                                  <div class="tab-pane fade" id="profile">
                                      <h4>Profile Tab</h4>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                  </div>
                                  <div class="tab-pane fade" id="messages">
                                      <h4>Messages Tab</h4>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                  </div>
                                  <div class="tab-pane fade" id="settings">
                                      <h4>Settings Tab</h4>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                  </div>
                              </div> <!-- ./ tab-content -->
                            </div>   
                                             
                 </div>
            </div>
        </div>
    </div>
</div>


