<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aviso->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aviso->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Avisos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Importancia Avisos'), ['controller' => 'ImportanciaAvisos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Importancia Aviso'), ['controller' => 'ImportanciaAvisos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipo Avisos'), ['controller' => 'TipoAvisos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipo Aviso'), ['controller' => 'TipoAvisos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="avisos form large-9 medium-8 columns content">
    <?= $this->Form->create($aviso) ?>
    <fieldset>
        <legend><?= __('Edit Aviso') ?></legend>
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
