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
            <?= $this->Html->link(__('#-Liste anzeigen'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tags form content">
            <?= $this->Form->create($tag) ?>
            <fieldset>
                <legend><?= __('# erstellen') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('articles._ids', ['options' => $articles]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Speichern')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
