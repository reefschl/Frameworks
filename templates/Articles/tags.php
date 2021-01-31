<meta name="viewport" content="width=device-width, initial-scale=1.0">
<h2>
Geben Sie in der URL hinter "tags/" ihren gewünschten Hastag (zb. kuchen o. pudding) ein, um nach bestimmten Rezepten zu suchen.
</br>
</br>

    Rezepte tagged mit
    <?= $this->Text->toList(h($tags), 'or') ?>

</h2>

<section>
<?php foreach ($articles as $article): ?>

    <article>
        <!-- Use the HtmlHelper to create a link -->
        <h4><?= $this->Html->link(
            $article->title,
            ['controller' => 'Articles', 'action' => 'view', $article->slug]
        ) ?></h4>
        <span><?= h($article->created) ?></span>
    </article>
<?php endforeach; ?>
</section>
