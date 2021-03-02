<?php

$config = require_once 'config.php';

$mysqli = new mysqli($config['host'], $config['user'], $config['pwd']);

$mysqli->select_db($config['db']);

$sql = "SELECT * FROM contacts;";

$result = $mysqli->query($sql);

?>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    </head>
    <body>
        <h1>Contactos guardados</h1>
        <table class="table table-striped">            
        <?php if ($result->num_rows) {
            ?>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>e-mail</th>
                </tr>
            </thead>
        <tbody>
            <?php
            while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
            </tr><?php
            }            
        } else {
            ?>
        <tbody>
            <tr>
                <td colspan="2">No existe ningun contacto aun</td>
            </tr>
            <?php
        }?>
            <tr>
                <td colspan="2"><a href="index.html">Nuevo</a></td>
            </tr>
        </tbody>
    </table>
</body>
</html>