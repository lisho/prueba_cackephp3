<div class="row cabecera">
    
    <div class="col-lg-12">
        
        <h1 class="page-header"> <i class="fa fa-user"></i> <?= __('Gestión de Usuarios') ?> <?= $this->element('botonera_helper_gestion'); ?></h1>
       
    </div> <!-- ./col-lg-12-->
</div> <!-- ./row -->

<div class="row">
    
    <div class="panel panel-primary">
        
        <div class="panel-body logo_fondo">   
                <?php $i=0; ?>
              <div class="col-lg-12">  
                <?php foreach ($users as $user): ?>
                
                <?php 
                    
                  switch ($user->role) {
                    case 'admin':
                          $color='green';
                          $fa='cloud ';
                          break;
                    case 'formador':
                          $color='yellow';
                          $fa='mortar-board';
                          break;
                    case 'tecnico':
                          $color='red';
                          $fa='group';
                          break;
                      default:
                          // code...
                          break;
                  } 
                  
                
                ?>
                <a href="<?= $this->Url->build('Users/view/', true);?><?= $user->id; ?>:" class="sin_efectos">
                
                   <div class="col-lg-4 col-md-6">
                       
                        <div class="panel panel-<?= $color; ?>" id="accordion">
                            
                            
                                <div class="panel-heading " >
                                   
                                        <p class='text-center'>
                                            <?= h($user->nombre.' '.$user->apellidos) ?>
                                        </p>
                                        <h4 class='text-center'>
                                             <i class="fa fa-<?= $fa;?> fa-4x"></i>
                                            <p><?= h($user->role) ?></p>
                                        </h4>
                                  
                                </div>
                           
                            <div class="panel-body panel-collapse collapse" id="collapse<?= $i;?>">   
                               
                                <div class="col-lg-8">  
                                    <small>    
                                        <p><?= '<strong>Nonbre de Usuario: </strong>'.h($user->username) ?></p>
                                        <p><?= '<strong>Puesto: </strong>'.h($user->puesto) ?></p>
                                        <p><?= '<strong>Teléfono1: </strong>'.h($user->telefono1) ?></p>
                                        <p><?= '<strong>Teléfono2: </strong>'.h($user->telefono2) ?></p>
                                        <p><?= '<strong>Email: </strong>'.h($user->email) ?></p>
                                        <p><?= '<strong>Alta en el sistema: </strong>'.h($user->created) ?></p>
                                        <p><?= '<strong>Última Modificación: </strong>'.h($user->modified) ?></p>
                                    </small>
                                </div>
                                <div class="col-lg-4">
                                    <div class="img-contenedor text-center">
                                        
                                        <?php $avatar=$user['foto'];?>
                                        <?php if(!empty($avatar)):?>
                                             <img class="img-circle avatar" src="/img/user_fotos/<?= $avatar; ?>" width="100%"></img>
                                        <?php else: ?>
                                             <i class="fa fa-user fa-5x"></i>
                                        <?php endif;?>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="panel-footer">   
                                <?= $this->Html->link(__(''), ['action' => 'view', $user->id],["class"=>"fa fa-eye btn btn-primary btn-xs"]) ?>
                                <?= $this->Html->link(__(''), ['controller'=>'Users','action' => 'edit', $user->id],["class"=>"fa fa-edit btn btn-info btn-xs"]) ?>
                                <?= $this->Form->postLink(__(''), ['action' => 'delete', $user->id], 
                                                        ['confirm' =>"¿Estás seguro de que quieres borrar el usuario de ".h($user->nombre)." ".h($user->apellidos)."?", 
                                                        $user->id,
                                                        "class"=>"fa fa-trash-o btn btn-danger btn-xs"]
                                                        ) ?>
                                <a  data-toggle="collapse" class="collapsed" href="#collapse<?= $i++;?>"><i class="pull-right fa fa-toggle-down fa-2x"></i> </a>
                            </div>
                         </div>        
                    </div>
                 </a> <!-- ./ Hiperenlace -->
                 <?php endforeach; ?>
            </div> 
        </div>
    </div> <!-- ./ Panel Primary -->
    
    
     <div class="panel panel-primary">
            <div class="panel-heading"><i class="glyphicon glyphicon-list-alt">  </i>  Listado de Usuarios del Sistema</div>
            <!-- /.panel-heading -->
                
        <div class="panel-body logo_fondo">   
            <table class="table table-hover  table-responsive text-center" cellpadding="0" cellspacing="0">
                <thead class="thead">
                    <tr>
                        <!-- <th class="text-center"><?= $this->Paginator->sort('id') ?></th> -->
                        <th class="text-center"><?= $this->Paginator->sort('nombre') ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('apellidos') ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('puesto') ?></th>
                        <th class="text-center visible-md visible-lg"><?= $this->Paginator->sort('telefono1') ?></th>
                        <!-- <th class="text-center"><?= $this->Paginator->sort('telefono2') ?></th> -->
                        <th class="text-center visible-md visible-lg"><?= $this->Paginator->sort('email') ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('username') ?></th>
                       <!-- <th><?= $this->Paginator->sort('password') ?></th> -->
                        <th class="text-center"><?= $this->Paginator->sort('role') ?></th>
                        <!-- <th class="text-center"><?= $this->Paginator->sort('created') ?></th> -->
                        <!-- <th class="text-center"><?= $this->Paginator->sort('modified') ?></th> -->
                        <th class="actions text-center"><?= __('Acciones') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                    <tr>
                         <!-- <td><?= $this->Number->format($user->id) ?></td> -->
                        <td><?= h($user->nombre) ?></td>
                        <td><?= h($user->apellidos) ?></td>
                        <td><?= h($user->puesto) ?></td>
                        <td class="visible-md visible-lg"><?= h($user->telefono1) ?></td>
                        <!-- <td><?= h($user->telefono2) ?></td> -->
                        <td class="visible-md visible-lg"><?= h($user->email) ?></td>
                        <td><?= h($user->username) ?></td>
                       <!-- <td><?= h($user->password) ?></td> -->
                        <td><?= h($user->role) ?></td>
                         <!-- <td><?= h($user->created) ?></td> -->
                         <!-- <td><?= h($user->modified) ?></td> -->
                        <td class="actions">
                            <?= $this->Html->link(__(''), ['action' => 'view', $user->id],["class"=>"fa fa-eye btn btn-primary btn-xs"]) ?>
                            <?= $this->Html->link(__(''), ['controller'=>'Users','action' => 'edit', $user->id],["class"=>"fa fa-edit btn btn-info btn-xs"]) ?>
                            <?= $this->Form->postLink(__(''), ['action' => 'delete', $user->id], 
                                                                ['confirm' =>"¿Estás seguro de que quieres borrar el usuario de ".h($user->nombre)." ".h($user->apellidos)."?", 
                                                                $user->id,
                                                                "class"=>"fa fa-trash-o btn btn-danger btn-xs"]
                                                                ) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            
            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                </ul>
                <p><?= $this->Paginator->counter() ?></p>
            </div>
        </div>
    </div> <!-- ./ Panel Primary -->
 
</div> <!-- ./ Row -->
