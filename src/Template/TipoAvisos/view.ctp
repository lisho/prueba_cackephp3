<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipo Aviso'), ['action' => 'edit', $tipoAviso->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipo Aviso'), ['action' => 'delete', $tipoAviso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoAviso->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipo Avisos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo Aviso'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Avisos'), ['controller' => 'Avisos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aviso'), ['controller' => 'Avisos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tipoAvisos view large-9 medium-8 columns content">
    <h3><?= h($tipoAviso->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Tipo') ?></th>
            <td><?= h($tipoAviso->tipo) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tipoAviso->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Avisos') ?></h4>
        <?php if (!empty($tipoAviso->avisos)): ?>
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
            <?php foreach ($tipoAviso->avisos as $avisos): ?>
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
