
            
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
                            
                                    
                             switch ($aviso->tipo_aviso_id) {
                                case '1':
                                    $logo_tipo='fa fa-bullhorn';
                                    break;
                                case '2':
                                    $logo_tipo='glyphicon glyphicon-alert';
                                    break;
                                case '3':
                                    $logo_tipo='fa fa-info-circle';
                                    break;
                                    
                                default:
                                    $logo_tipo='';
                                    break;
                            
                             }
                        ?>
                         
                             
                             <?php
                             $creado= $this->Time->timeAgoInWords(
                                  $aviso->modified,
                                  ['format' => 'MMM d, YYY', 'end' => '+1 year']
                                ); ?>
                             
                             <a href="/avisos/view/<?= $aviso->id ?>" class="list-group-item ">
                                <span class="label label-<?= $nube_color; ?>"><i class="<?= $logo_tipo; ?>"></i></span> 
                               <?= $aviso->titulo ?>
                                <span class="pull-right text-muted small"><em> <?= $creado ?> </em>
                                </span>
                            </a>

                    <?php endforeach; ?>


            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                </ul>
                <p><?= $this->Paginator->counter() ?></p>
            </div>