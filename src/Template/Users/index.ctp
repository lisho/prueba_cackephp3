<div clas="row">
    
    <div class="col-lg-12">
        
        <h1 class="page-header"> <i class="fa fa-user"></i> <?= __('Gestión de Usuarios') ?></h1>
       
    </div> <!-- ./col-lg-12-->
</div> <!-- ./row -->

<div clas="row">
    <div class="col-lg-12">
        
    <table class="table table-hover" cellpadding="0" cellspacing="0">
        <thead class="thead">
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('apellidos') ?></th>
                <th><?= $this->Paginator->sort('puesto') ?></th>
                <th><?= $this->Paginator->sort('telefono1') ?></th>
                <th><?= $this->Paginator->sort('telefono2') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('username') ?></th>
               <!-- <th><?= $this->Paginator->sort('password') ?></th> -->
                <th><?= $this->Paginator->sort('role') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->nombre) ?></td>
                <td><?= h($user->apellidos) ?></td>
                <td><?= h($user->puesto) ?></td>
                <td><?= h($user->telefono1) ?></td>
                <td><?= h($user->telefono2) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->username) ?></td>
               <!-- <td><?= h($user->password) ?></td> -->
                <td><?= h($user->role) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' =>"¿Estás seguro de que quieres borrar el usuario de ".h($user->nombre)." ".h($user->apellidos)."?", $user->id]) ?>
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
</div>

