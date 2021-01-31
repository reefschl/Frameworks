<meta name="viewport" content="width=device-width, initial-scale=1.0">

<h1><?= h($article->title) ?></h1>
<p><?= h($article->body ) ?></p>
<p><?= h($article->Anleitung ) ?></p>
<p><b>Tags:</b> <?= h($article->tag_string) ?></p>





<meta property="og:title" content="0- Waste">
<meta property="og:site_name" content="">
<meta property="og:url" content="">
<meta property="og:description" content="Checken Sie jetzt das schöne Rezept von 0- Waste aus!">
<meta property="og:type" content="article">
<meta property="og:image" content="https://www.moneycrashers.com/wp-content/uploads/2011/01/zero-waste-food-groceries-1068x713.jpg">








<h6> Möchten Sie ihr Rezept ändern?</h6>

<p><?= $this->Html->link('Ändern!', ['action' => 'edit', $article->slug]) ?></p>


</br>
</br>

<h4>Teilen Sie jetzt ihre Rezept mit ihren Freunden!</h4>


<br />


<?php



$services = [
    'facebook' => __('Auf Facebook teilen'),

    'linkedin' => __('Auf LinkIn teilen'),
    'twitter' => __('Auf Twitter teilen')
];

echo '<ul>';
foreach ($services as $service => $linkText) {
    echo '<li>' . $this->SocialShare->link(
        $service,
        $linkText
    ) . '</li>';
}
echo '</ul>';


?>


</br>
</br>

<h3>Nicht alles zuhause? Kein Problem! Checken Sie ihre Umgebung nach Supermärkten!<h3>

<?= $this->Form->create() ?>




<?php
if (isset($_POST["submit_address"]))
{
    $address = $_POST["address"];
    ?>
    <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php
    echo "$address Discounter";?>&output=embed"></iframe>
    <?php
}
?>
<form method="POST">
    <p>
        <input type="text" name="address" placeholder="Geben Sie ihre Stadt ein">
    </p>
    <button input type="submit" name="submit_address" value="">Los geht´s</button>
</form>










</footer>

</br>




<?php
$page_name = "$article->title";
?>
<!-- <?php echo $page_name; ?> -->
<?php
//include "HelloWorld";
$anzahl_zugriffe = besucher($page_name);
?>
<footer>
    <p>
        <?php
        echo "Du bist der ", $anzahl_zugriffe, ". Snacker dieses Rezepts!";
        ?>
    </p>
</footer>

<?php
function besucher($record) {
    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "cake";
    $db_table = "webcounter";
    $counter_page = "access_page";
    $counter_field = "access_counter";

    $db = mysqli_connect ($db_host, $db_username, $db_password, $db_name) or die("Host oder Datenbank nicht erreichbar");

    $sql_call = "INSERT INTO ".$db_table." (".$counter_page.", ".$counter_field.") VALUES ('".$record."', 1)
    ON DUPLICATE KEY UPDATE ".$counter_field." = ".$counter_field." + 1";
    mysqli_query($db, $sql_call) or die("Fehler beim Einfügen");

    $sql_call = "SELECT ".$counter_field. " FROM ".$db_table." WHERE ".$counter_page. " = '".$record. "'";
    $sql_result = mysqli_query($db, $sql_call) or die("SQL-Anfrage fehlgeschlagen");
    $row = mysqli_fetch_assoc($sql_result);
    $x = $row[$counter_field];

    mysqli_close($db);
    return $x;
}
?>
</footer>