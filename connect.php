<?php

$con = new mysqli('localhost', 'root', '', 'crudoperation');    // servername , username, pass, dbname

if (!$con) {
    die(mysqli_error($con));
}

?>