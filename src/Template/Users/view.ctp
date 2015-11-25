<div class="container">

    <nav class="col-lg-4 content" id="actions-sidebar">
        <ul class="nav nav-pills nav-stacked">
            <li class="heading"><?= __('Actions') ?></li>
            <li class="presentation"><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
            <li class="presentation"><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
            <li class="presentation"><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
            <li class="presentation"><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        </ul>
    </nav>
    <div class="col-lg-8 content">
        <h3>Ficha Usuario: <?= h($user->username) ?></h3>
               <p>
               <b><?= __('Username') ?></b>
               <?= h($user->username) ?>
                </p>
               <p>
               <b><?= __('Password') ?></b>
               <?= h($user->password) ?>
                </p>
               <p>
               <b><?= __('Role') ?></b>
               <?= h($user->role) ?>
                </p>
               <p>
               <b><?= __('Id') ?></b>
               <?= $this->Number->format($user->id) ?>
                </p>
               <p>
               <b><?= __('Created') ?></b>
               <?= h($user->created) ?>
                </p>
               <p>
               <b><?= __('Modified') ?></b>
               <?= h($user->modified) ?>
               </p>
    </div>
</div>