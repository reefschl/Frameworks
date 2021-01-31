<meta name="viewport" content="width=device-width, initial-scale=1.0">



<h1><?php echo __("Rezeptliste")?></h1>

<h4>Haben Sie auch Rezepte, die Sie mit der Community teilen wollen? Dann legen Sie jetzt los!</h4>
<p><?= $this->Html->link("Rezept hinzufügen", ['action' => 'add'], ['class' => 'button', 'target' => '_self'])?></p>


</br>
<h4>Schauen Sie jetzt nach ihrem gewünschtem Hashtag!</h4>
<p><?= $this->Html->link("Tags anzeigen", '/tags/', ['class' => 'button', 'target' => '_self']) ?></p>
</br>
</br>
<h4>Filtern Sie die Rezepte nach Namen oder Zutaten!</h4>





<body>



<?= $this->Form->create(null,['type'=>'get']) ?>


      <?= $this->Form->control('key',['label'=>'','value'=>$this->request->getQuery('key')]) ?>

      <?= $this->Form->submit('Filtern!') ?>
      <?= $this->Form->end() ?>








</br>
</br>





<?php


?>
<table>
    <tr>
        <th>Rezeptnamen</th>
<th>Bild</th>
        <th>Aktionen</th>
    </tr>



<link rel="stylesheet" href="/css/tabellenview.css" />

<?php foreach ($articles as $article): ?>

    <tr>
        <td>
            <?= $this->Html->link($article->title, ['action' => 'view', $article->slug]) ?>
            
        </td>
<td>
            <!-- <?=$this->Html->image($article->image) ?> -->
            <img src="<?= $row['image']; ?>" class="card-img-top">
        </td>
        <td>
            <?= $this->Html->link('Ändern', ['action' => 'edit', $article->slug]) ?>
            <?= $this->Form->postLink(
                'Löschen',
                ['action' => 'delete', $article->slug],
                ['confirm' => 'Bist du dir sicher?'])
            ?>
        </td>
    </tr>
<?php endforeach;  ?>

</table>
</body>
</br>
</br>


<!-- <?php

function besucher($record) {
    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "cake";
    $db_table = "webcounter";
    $counter_page = "access_page";
    $counter_field = "access_counter";

$rowSQL = mysql_query( "SELECT MAX( access_counter ) AS max FROM webcounter;" );
$row = mysql_fetch_array( $rowSQL );
$largestNumber = $row['max'];
echo $row['max'];
};
?> -->



