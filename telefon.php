<?php
if($_SERVER["REQUEST_METHOD"]==="POST") {
    $namn=$_POST["namn"];
    $telefon=$_POST["telefon"];
    $text="Du har tryckt på skicka";
} else {
    $namn="";
    $telefon="";
    $text="Tryck då!";
}
    
?>
<form method="POST">
    Namn: <input name="namn" value="<?= $namn;?>"><br>
    Telefon: <input type="tel" name="telefon" value="<?= $telefon;?>"><br>
    <input type="submit">
</form>
<?= $text; ?>