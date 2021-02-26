<?php
$db = mysqli_connect('localhost', 'root', 'root', 'appsalon');
if (!$db) {
    echo "error de conexion";
    exit;
}
