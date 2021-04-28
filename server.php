<?php
    require ("database.php");

    header("content-type: application/json");

    echo json_encode($database);

?>