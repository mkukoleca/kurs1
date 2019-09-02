

<form action="method_test.php?var=value" method="POST">
    <input name="var" value="value1">
    <input type="submit">
</form>

<pre>

<?php

echo "<h1>GET:</h1>";
var_dump($_GET);

echo "<h1>POST:</h1>";
var_dump($_POST);

echo "<h1>SERVER:</h1>";
var_dump($_SERVER);

?>
