<div class="row cabecera">
    
    <div class="col-lg-12">
        
        <h1 class="page-header"> <i class="fa fa-bell"></i> <?= __('Gestión de Avisos') ?> <?= $this->element('botonera_helper'); ?></h1>
       
    </div> <!-- ./col-lg-12-->
</div> <!-- ./row -->

<div class="row">
    <div class="col-lg-12">
     
         <div class="panel panel-primary">
                <div class="panel-heading">
                    <i class="glyphicon glyphicon-list-alt">  </i>  
                        Listado Completo de Avisos 
                        <span class=pull-right> <!-- Botonera de navegabilidad -->
                            <?= $this->Html->link('  Listado completo', ['controller' => 'Avisos', 
                                                        'action' => 'index',],
                                                         ["class"=>"fa fa-undo btn btn-default btn-outline btn-sm"]); 
                                                        ?>
                        </span>
                </div>
                <!-- /.panel-heading -->
                
        <div class="panel-body logo_fondo">
            <table class="table table-hover  table-responsive text-center" cellpadding="0" cellspacing="0">
                <thead class="thead">
                    <tr>
                        <th class="text-center"><?= $this->Paginator->sort('tipo_aviso_id','Tipo') ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('created','Fecha de Creación') ?></th>
                        <th></th>
                        <th class="text-center"><?= $this->Paginator->sort('caduca', 'Caduca') ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('titulo') ?></th>
                       <!-- <th class="text-center"><?= $this->Paginator->sort('descripción') ?></th> -->
                        <th class="actions text-center"><?= __('Descripción') ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('user_id','Creador') ?></th>
                       <!-- <th class="text-center"><?= $this->Paginator->sort('importancia_aviso_id','Importancia') ?></th> -->
                    
                        <th class="text-center"><?= $this->Paginator->sort('modified','Ultima Modificación') ?></th>
                        <!-- <th class="actions text-center"><?= __('Acciones') ?></th> -->
                    </tr>
                </thead>
                <tbody >
                    <?php foreach ($avisos as $aviso): ?>
                   
                        
                        <?php 
                            switch ($aviso->importancia_aviso->importancia) {
                                case 'alta':
                                    $nube_color='danger';
                                    break;
                                case 'media':
                                    $nube_color='warning';
                                    break;
                                case 'baja':
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
                         <tr>
                        
                        <!-- <td><?= $aviso->has('importancia_aviso') ? $this->Html->link($aviso->importancia_aviso->importancia, ['controller' => 'Avisos', 'action' => 'index', $aviso->importancia_aviso->id]) : '' ?></td> -->
                        <td><big> <?= $aviso->has('tipo_aviso') ? $this->Html->link('', ['controller' => 'Avisos', 
                                                                                    'action' => 'index_filtro_tipo', 
                                                                                    $aviso->tipo_aviso->id],
                                                                                    ["class"=> $logo_tipo]) : '' 
                                                                                    ?></big></td>
                        <td><?= h($aviso->created) ?></td>   
                        <td><?= $aviso->has('importancia_aviso') ? $this->Html->link('', ['controller' => 'Avisos', 
                                                                                            'action' => 'index_filtro_importancia', 
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
                        <td><a href="/avisos/view/<?=  $aviso->id; ?>"><strong><?= h($aviso->titulo) ?></strong></a></td>
                        <td><?= h($aviso->descripcion) ?></td>
                        <td><?= $aviso->has('user') ? $this->Html->link($aviso->user->username, ['controller' => 'Users', 'action' => 'view', $aviso->user->id]) : '' ?></td>

                        <td><?= h($aviso->modified) ?></td>
                        
                        <?php if ($aviso->user->username==$auth['username']): ?>
                        
                            <td class="actions">
                                <?php //echo $this->Html->link(__(''), ['action' => 'view', $aviso->id],["class"=>"fa fa-eye btn btn-primary btn-xs"]) ?>
                                <?= $this->Html->link(__(''), ['action' => 'edit', $aviso->id],["class"=>"fa fa-edit btn btn-info btn-xs"]) ?>
                                <?= $this->Form->postLink(__(''), ['action' => 'delete', $aviso->id], ['confirm' =>"¿Estás seguro de que quieres borrar este aviso?", 
                                                                    $aviso->id,
                                                                    "class"=>"fa fa-trash-o btn btn-danger btn-xs"]) ?>
                            </td>
                        <?php endif; ?>
                        
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
        <div class="panel-footer">
            <h4><small>Leyenda:</small></h4>
                <p><small><i class="fa fa-bullhorn">  Anuncio</i></small></p>
                <p><small><i class="glyphicon glyphicon-alert"></i>  Alerta</small></p>
                <p><small><i class="fa fa-info-circle"></i>  Información</small></p>
            
        </div> <!-- ./panel-footer -->
    </div>
</div>
