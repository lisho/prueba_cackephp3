<?php

$titulo="Gestión de Avisos";
$logo_titulo="fa fa-bell";
$titulo_panel="Mensajes de nivel".$importanciaAviso->importancia;
$logo_titulo_panel="fa fa-list";
$texto_boton="Editar Aviso";

// url del Botón:
$controller="Avisos";
$action="edit";
$extra="$aviso->id";

?>

<div class="row">
    
    <div class="col-lg-12">
        
        <h1 class="page-header"> <i class="<?= $logo_titulo;?>"></i><?= __('  '.$titulo) ?> <?= $this->element('botonera_helper'); ?></h1>
       
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
               <!-- <b><?= __('Titulo: ') ?></b> -->
               <h2 class="rojo_subrayado"><?= h($aviso->titulo) ?></h2>
                </p>
                <p>
               <b><?= __('Creado por: ') ?></b>
               <?= h($aviso->user->username) ?>
                </p>
                <p>
               <b><?= __('Importancia del aviso: ') ?></b>
               <?= h($aviso->importancia_aviso->importancia) ?>
                </p>
                <p>
               <b><?= __('Caducidad del mensaje: ') ?></b>
               <?= h($aviso->caduca) ?>
                </p>

               <p>
               <b><?= __('Fecha de creación: ') ?></b>
               <?= h($aviso->created) ?>
                </p>
               <p>
               <b><?= __('Fecha de última modificación: ') ?></b>
               <?= h($aviso->modified) ?>
               </p>
               
               <?php if ($auth['id']== $aviso->user->id || $auth['role']=="admin" ): ?>
               
               <?= $this->Html->link(__($texto_boton), ['controller' => $controller, 'action' => $action, $extra],['type' => 'button', 
                                                                                                                        'class'=>'btn btn-lg btn-outline form-btn btn-primary',
                                                                                                                        ]); ?>
               <?php endif; ?>
                                     
                </div>
                
                 <div class="col-lg-6">
                     <div class="row content">
                        <h4><?= __('Contenido del mensaje') ?></h4>
                            <blockquote> <i><?= $this->Text->autoParagraph(h($aviso->descripcion)); ?></i></blockquote> 
                     </div>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="importanciaAvisos view large-9 medium-8 columns content">
    <h3><?= h($importanciaAviso->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Importancia') ?></th>
            <td><?= h($importanciaAviso->importancia) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($importanciaAviso->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Avisos') ?></h4>
        <?php if (!empty($importanciaAviso->avisos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Titulo') ?></th>
                <th><?= __('Descripcion') ?></th>
                <th><?= __('Caduca') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Importancia Aviso Id') ?></th>
                <th><?= __('Tipo Aviso Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($importanciaAviso->avisos as $avisos): ?>
            <tr>
                <td><?= h($avisos->id) ?></td>
                <td><?= h($avisos->titulo) ?></td>
                <td><?= h($avisos->descripcion) ?></td>
                <td><?= h($avisos->caduca) ?></td>
                <td><?= h($avisos->user_id) ?></td>
                <td><?= h($avisos->importancia_aviso_id) ?></td>
                <td><?= h($avisos->tipo_aviso_id) ?></td>
                <td><?= h($avisos->created) ?></td>
                <td><?= h($avisos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Avisos', 'action' => 'view', $avisos->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Avisos', 'action' => 'edit', $avisos->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Avisos', 'action' => 'delete', $avisos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $avisos->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
