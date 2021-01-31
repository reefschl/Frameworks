<meta name="viewport" content="width=device-width, initial-scale=1.0">

<h1>Rezept hinzufügen</h1>
<?php

    echo $this->Form->create($article,['type'=> 'file']);
    // Hard code the user for now.
    echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);
    echo $this->Form->control('title');
    echo $this->Form->control('body', ['rows' => '1']);
    echo $this->Form->control('Anleitung', ['rows' => '1']);
    echo $this->Form->control('image_file',['type'=> 'file']);
    echo $this->Form->button(__('Rezept speichern'));
    echo $this->Form->end();
    echo $this->Form->control('tag_string', ['type' => 'text']);
    
    
?>


<!-- <form method="post" action="/articles/add> -->
