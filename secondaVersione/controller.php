<?php
    include '../database.php';
    header('content-type: application/json');
    echo json_encode($albums)
?>