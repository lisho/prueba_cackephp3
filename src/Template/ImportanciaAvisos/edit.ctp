<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $importanciaAviso->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $importanciaAviso->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Importancia Avisos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Avisos'), ['controller' => 'Avisos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aviso'), ['controller' => 'Avisos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="importanciaAvisos form large-9 medium-8 columns content">
    <?= $this->Form->create($importanciaAviso) ?>
    <fieldset>
        <legend><?= __('Edit Importancia Aviso') ?></legend>
        <?php
            echo $this->Form->input('importancia');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
