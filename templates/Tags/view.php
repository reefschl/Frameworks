<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag $tag
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Aktionen') ?></h4>
            <?= $this->Html->link(__('# ändern'), ['action' => 'edit', $tag->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('# löschen'), ['action' => 'delete', $tag->id], ['confirm' => __('Willst du den #  # {0} wirklich löschen?', $tag->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('#-Liste anzeigen'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('# erstellen'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tags view content">
            <h3><?= h($tag->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('#-Name') ?></th>
                    <td><?= h($tag->title) ?></td>
                </tr>

                <tr>
                    <th><?= __('Erstellt') ?></th>
                    <td><?= h($tag->created) ?></td>
                </tr>

            </table>
            <div class="related">
                <h4><?= __('Rezepte mit diesem #') ?></h4>
                <?php if (!empty($tag->articles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>

                            <th><?= __('Id') ?></th>
                            <th><?= __('Rezeptname') ?></th>

                            <th><?= __('Zutaten') ?></th>
                            <th><?= __('Veröffentlicht') ?></th>



                        </tr>
                        <?php foreach ($tag->articles as $articles) : ?>
                        <tr>

                            <td><?= h($articles->id) ?></td>
                            <td><?= h($articles->title) ?></td>

                            <td><?= h($articles->body) ?></td>
                            <td><?= h($articles->created) ?></td>



                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
