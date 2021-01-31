<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Login</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Bitte geben Sie Ihre Email und Ihr Passwort ein') ?></legend>
        <?= $this->Form->control('email', ['required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true]) ?>
    </fieldset>
    <?= $this->Form->submit(__('Login')); ?>

    <?= $this->Form->end() ?>
</br>
<h4> Sie sind noch nicht angemeldet? Registrieren Sie sich jetzt! </h4>
    <?= $this->Html->link("Registrieren", ['action' => 'add'], ['target' => '_self']) ?>

</div>

