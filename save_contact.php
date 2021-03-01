<?php

$config = require_once 'config.php';

$mysqli = new mysqli($config['host'], $config['user'], $config['pwd']);

$sql = "INSERT INTO contacts (name, email) VALUES ('$_POST[name]', '$_POST[email]')";

$mysqli->query($sql);

mail($config['email'], 'Nuevo contacto!', 'Nombre: '.$_POST['name'].', email:'.$_POST['email']);

header('Location: contact_saved.html');