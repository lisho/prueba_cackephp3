<?php

$titulo="Gestión de Avisos";
$logo_titulo="fa fa-bell";
$titulo_panel="Datos del aviso";
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
                 <span class=pull-right> <!-- Botonera de navegabilidad -->
                        <?= $this->Html->link('  Listado completo', ['controller' => 'Avisos', 
                                                    'action' => 'index',],
                                                     ["class"=>"fa fa-undo btn btn-default btn-outline btn-sm"]); 
                                                    ?>
                    </span>
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

