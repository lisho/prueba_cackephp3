<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aviso'), ['action' => 'edit', $aviso->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aviso'), ['action' => 'delete', $aviso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aviso->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Avisos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aviso'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Importancia Avisos'), ['controller' => 'ImportanciaAvisos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Importancia Aviso'), ['controller' => 'ImportanciaAvisos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipo Avisos'), ['controller' => 'TipoAvisos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo Aviso'), ['controller' => 'TipoAvisos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="avisos view large-9 medium-8 columns content">
    <h3><?= h($aviso->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Titulo') ?></th>
            <td><?= h($aviso->titulo) ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $aviso->has('user') ? $this->Html->link($aviso->user->id, ['controller' => 'Users', 'action' => 'view', $aviso->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Importancia Aviso') ?></th>
            <td><?= $aviso->has('importancia_aviso') ? $this->Html->link($aviso->importancia_aviso->id, ['controller' => 'ImportanciaAvisos', 'action' => 'view', $aviso->importancia_aviso->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo Aviso') ?></th>
            <td><?= $aviso->has('tipo_aviso') ? $this->Html->link($aviso->tipo_aviso->id, ['controller' => 'TipoAvisos', 'action' => 'view', $aviso->tipo_aviso->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($aviso->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Caduca') ?></th>
            <td><?= h($aviso->caduca) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($aviso->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($aviso->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($aviso->descripcion)); ?>
    </div>
</div>
