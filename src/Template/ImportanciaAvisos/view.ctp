<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Importancia Aviso'), ['action' => 'edit', $importanciaAviso->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Importancia Aviso'), ['action' => 'delete', $importanciaAviso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $importanciaAviso->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Importancia Avisos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Importancia Aviso'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Avisos'), ['controller' => 'Avisos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aviso'), ['controller' => 'Avisos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
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
