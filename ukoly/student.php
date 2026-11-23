<?php
// Ulozeni informaci o studentovi do proměnnych
$jmeno = "Azifa";
$vek = 18;
$trida = "1. ročnik IT";
$vyska = 1.50;
$jeStudent = true;
$jazyk = "PHP";

/*
Tato cast vypisuje informace o studentovi.
Použivame HTML a PHP proměnne.
*/
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Můj studentský profil</title>
</head>
<body>

    <h1>Můj studentský profil</h1>

    <p><strong>Jmeno a prijimeni:</strong> <?php echo $jmeno; ?></p>
    <p><strong>Vek:</strong> <?php echo $vek; ?> let</p>
    <p><strong>Trida:</strong> <?php echo $trida; ?></p>
    <p><strong>Vyska:</strong> <?php echo $vyska; ?> m</p>
    <p><strong>Jsem student:</strong>
        <?php echo $jeStudent ? "Ano" : "Ne"; ?>
    </p>
    <p><strong>Oblíbený programovaci jazyk:</strong> <?php echo $jazyk; ?></p>

    <h2>Datove typy</h2>

    <?php
    // Výpis hodnot a datových typů všech proměnných
    echo "<p>";
    var_dump($jmeno);
    echo "</p>";

    echo "<p>";
    var_dump($vek);
    echo "</p>";

    echo "<p>";
    var_dump($trida);
    echo "</p>";

    echo "<p>";
    var_dump($vyska);
    echo "</p>";

    echo "<p>";
    var_dump($jeStudent);
    echo "</p>";

    echo "<p>";
    var_dump($jazyk);
    echo "</p>";
    ?>

</body>
</html>

<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}
?>

<?php
for ($i = 1; $i <= 8; $i++) {
    echo $i . "<br>";
}
?>

<?php
for ($i = 2; $i <= 20; $i+= 2) {
    echo $i . "<br>";
}
?>

<?php
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}
?>

<?php
$number = 7;
for ($i = 1; $i <= 10; $i++) {
    echo $number . "x" . $i . "=" . ($number * $i) . "<br>";
}
?>

<?php
$counter = 10;
while ($counter >= 1) {
    echo $counter . "<br>";
    $counter--;
}
echo "Hotovo!";
?>

<?php
$number = 8;
while ($number < 5) {
    echo "Cyklus while: " . $number . "<br>";
    $number++;
}
echo "Hotovo!";
?>

<?php
$i= 1;
while ($i <= 5) {
    echo $i . "<br>";
    $i++;
}