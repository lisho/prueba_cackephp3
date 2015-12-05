<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipoAviso->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipoAviso->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tipo Avisos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Avisos'), ['controller' => 'Avisos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aviso'), ['controller' => 'Avisos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipoAvisos form large-9 medium-8 columns content">
    <?= $this->Form->create($tipoAviso) ?>
    <fieldset>
        <legend><?= __('Edit Tipo Aviso') ?></legend>
        <?php
            echo $this->Form->input('tipo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
