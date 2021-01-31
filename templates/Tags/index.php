<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag[]|\Cake\Collection\CollectionInterface $tags
 */
?>
<div class="tags index content">
    <?= $this->Html->link(__('Tag erstellen'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tags') ?></h3>
    <div class="table-responsive">







        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Titel') ?></th>
                    <th><?= $this->Paginator->sort('Erstellt') ?></th>

                    <th class="actions"><?= __('Aktionen') ?></th>
                </tr>
            </thead>
            <body>
                <?php foreach ($tags as $tag): ?>
                <tr>
                    <td><?= $this->Number->format($tag->id) ?></td>
                    <td><?= h($tag->title) ?></td>
                    <td><?= h($tag->created) ?></td>

                    <td class="actions">
                        <?= $this->Html->link(__('Anzeigen'), ['action' => 'view', $tag->id]) ?>
                        <?= $this->Html->link(__('Ändern'), ['action' => 'edit', $tag->id]) ?>
                        <?= $this->Form->postLink(__('Löschen'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('Zurück')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Nächste') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Seite {{page}} von {{pages}}, zeigt aktuell {{current}} von {{count}} Einträge(n)')) ?></p>
    </div>
</div>
