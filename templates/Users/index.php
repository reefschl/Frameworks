<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div class="users index content">
    <?= $this->Html->link(__('Registrieren'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Nutzerverwaltung') ?></h3>




    <?= $this->Form->create(null,['type'=>'get']) ?>
          <?= $this->Form->control('key',['label'=>'','value'=>$this->request->getQuery('key')]) ?>
          <?= $this->Form->submit('Nutzer suchen') ?>
          <?= $this->Form->end() ?>




    <div class="table-responsive">











        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('password') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->password) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Anzeigen'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Ändern'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Löschen'), ['action' => 'delete', $user->id], ['confirm' => __('Bist du dir sicher # {0} zu löschen?', $user->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('letzte')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('nächste') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Seite {{page}} von {{pages}}, zeigt {{current}} Nutzer von insgesamt {{count}} Nutzern ')) ?></p>
    </div>
</div>
