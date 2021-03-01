<?php

$config = require_once 'config.php';

$mysqli = new mysqli($config['host'], $config['user'], $config['pwd']);

$sql = "SELECT * FROM contacts;";

$result = $mysqli->query($sql);

?>
<html>
    <body>
        <table><?php
        while ($row = $result->fetch_assoc()) {
?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
            </tr><?php
        }
?>
    <tr>
        <td colspan="2"><a href="index.html">Nuevo</a></td>
    </tr>
</table>
</body>
</html>