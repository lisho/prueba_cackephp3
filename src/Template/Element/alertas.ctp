
    <div class="panel panel-danger">
        <div class="panel-heading">
            <i class="fa fa-bell fa-fw"></i> Últimos Avisos
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="list-group">
                
                
                 <table class="table table-hover  table-responsive text-center" cellpadding="0" cellspacing="0">
                <thead class="thead">
                    <tr>
                        
                        <th></th>
                        <th class="text-center"><?= $this->Paginator->sort('Caduca') ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('titulo') ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('descripción') ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('Creador') ?></th>
                       <!-- <th class="text-center"><?= $this->Paginator->sort('Importancia') ?></th> -->
                        <th class="text-center"><?= $this->Paginator->sort('Tipo de Aviso') ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('Fecha de Creación') ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('Ultima Modificación') ?></th>

                    </tr>
                </thead>
                <tbody>
                    
                    <?php foreach ($avisos as $aviso): ?>
                   
                        
                        <?php 
                            switch ($aviso->importancia_aviso_id) {
                                case '1':
                                    $nube_color='danger';
                                    break;
                                case '2':
                                    $nube_color='warning';
                                    break;
                                case '3':
                                    $nube_color='success';
                                    break;
                                    
                                default:
                                    $nube_color='';
                                    break;
                            
                            } 
                            
                                    
                             switch ($aviso->tipo_aviso->tipo) {
                                case 'Anuncio':
                                    $logo_tipo='fa fa-bullhorn';
                                    break;
                                case 'Alerta':
                                    $logo_tipo='glyphicon glyphicon-alert ';
                                    break;
                                case 'Informacion':
                                    $logo_tipo='fa fa-info-circle';
                                    break;
                                    
                                default:
                                    $logo_tipo='';
                                    break;
                            
                             }
                        ?>
 
                      
                         <tr >
                        
                        <!-- <td><?= $aviso->has('importancia_aviso') ? $this->Html->link($aviso->importancia_aviso->importancia, ['controller' => 'ImportanciaAvisos', 'action' => 'view', $aviso->importancia_aviso->id]) : '' ?></td> -->
                       
                       
                        <td><?= $aviso->has('importancia_aviso') ? $this->Html->link('', ['controller' => 'ImportanciaAvisos', 
                                                                                            'action' => 'view', 
                                                                                             $aviso->importancia_aviso->id],
                                                                                             ["class"=>"glyphicon glyphicon-cloud btn btn-circle btn-". $nube_color." btn-xs"]) : '' 
                                                                                            ?></td>                        
                        <td>
                            
                            <?= $this->Time->format(
                                  $aviso->caduca,
                                  "dd/MM/yyyy",
                                  null
                                ); ?>
                            
                        </td>
                        <td class="<?= $nube_color ?>"><strong><?= h($aviso->titulo) ?></strong></td>
                        <td><?= h($aviso->descripcion) ?></td>
                        <td><?= $aviso->has('user') ? $this->Html->link($aviso->user->username, ['controller' => 'Users', 'action' => 'view', $aviso->user->id]) : '' ?></td>
                        
                        <td><big> <?= $aviso->has('tipo_aviso') ? $this->Html->link('', ['controller' => 'TipoAvisos', 
                                                                                    'action' => 'view', 
                                                                                    $aviso->tipo_aviso->id],
                                                                                    ["class"=> $logo_tipo]) : '' 
                                                                                    ?></big></td>
                        <td><?= h($aviso->created) ?></td>
                        <td><?= h($aviso->modified) ?></td>
                        
                        
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
                
                
                
                
                
                <a href="#" class="list-group-item">
                    <i class="fa fa-comment fa-fw"></i> New Comment
                    <span class="pull-right text-muted small"><em>4 minutes ago</em>
                    </span>
                </a>
                <a href="#" class="list-group-item">
                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                    </span>
                </a>
                <a href="#" class="list-group-item">
                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                    </span>
                </a>
                <a href="#" class="list-group-item">
                    <i class="fa fa-tasks fa-fw"></i> New Task
                    <span class="pull-right text-muted small"><em>43 minutes ago</em>
                    </span>
                </a>
                <a href="#" class="list-group-item">
                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                    <span class="pull-right text-muted small"><em>11:32 AM</em>
                    </span>
                </a>
                <a href="#" class="list-group-item">
                    <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                    <span class="pull-right text-muted small"><em>11:13 AM</em>
                    </span>
                </a>
                <a href="#" class="list-group-item">
                    <i class="fa fa-warning fa-fw"></i> Server Not Responding
                    <span class="pull-right text-muted small"><em>10:57 AM</em>
                    </span>
                </a>
                <a href="#" class="list-group-item">
                    <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                    <span class="pull-right text-muted small"><em>9:49 AM</em>
                    </span>
                </a>
                <a href="#" class="list-group-item">
                    <i class="fa fa-money fa-fw"></i> Payment Received
                    <span class="pull-right text-muted small"><em>Yesterday</em>
                    </span>
                </a>
            </div>
            <!-- /.list-group -->
            <a href="#" class="btn btn-default btn-block">View All Alerts</a>
        </div>
        <!-- /.panel-body -->
 </div>
