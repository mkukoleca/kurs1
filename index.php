<h1>Obuka</h1>

<p>
Linkovi do skripti:
</p>

<?php 

    $links = [
        '21.08.2019/test.php',
        '23.08.2019/forma.php',
        '23.08.2019/kalkulator.php',
        '23.08.2019/kalkulator2.php',
        '26.08.2019/index.php'
    ];
?>
<?php 
foreach ($links as $link) {
    echo "<a href='{$link}'>{$link}</a><br>";
} ?>