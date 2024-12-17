<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //
    $bd = $_POST['birthday'];
    $dc = intval($_POST['day_count']);

    //
    $BD = new DateTime($bd);
    $td = new DateTime();

    //
    $ag = $td->diff($BD)->days;

    //
    $fd =  new DateTime($bd);
    $fd->modify("+$dc days");

    //
    echo "<h2>Resultat</h2>";
    echo "<p>$ag</strong></p>";
    echo "<p>$dc <strong>" . $fd->format('Y-m-d') . "</strong>.</p>";
}