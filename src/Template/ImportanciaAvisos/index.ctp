<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Importancia Aviso'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Avisos'), ['controller' => 'Avisos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aviso'), ['controller' => 'Avisos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="importanciaAvisos index large-9 medium-8 columns content">
    <h3><?= __('Importancia Avisos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('importancia') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($importanciaAvisos as $importanciaAviso): ?>
            <tr>
                <td><?= $this->Number->format($importanciaAviso->id) ?></td>
                <td><?= h($importanciaAviso->importancia) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $importanciaAviso->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $importanciaAviso->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $importanciaAviso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $importanciaAviso->id)]) ?>
                </td>
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
