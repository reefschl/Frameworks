<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Aktionen') ?></h4>
            <?= $this->Form->postLink(
                __('Nutzer löschen'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Bist du dir sicher # {0} zu löschen?', $user->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Nutzerliste anzeigen'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>

        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>

            <fieldset>
                <legend><?= __('Nutzer ändern') ?></legend>
                <?php
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');


                ?>
            </fieldset>
            <?= $this->Form->button(__('Nutzer speichern')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
