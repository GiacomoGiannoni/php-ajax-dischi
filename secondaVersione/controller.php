<?php
    include '../database.php';
    $filteredAlbums = [];
    if(!empty($_GET['genre'])) {
        $genre = $_GET['genre'];
        foreach($albums as $album) {
            if($album['genre'] === $genre) {
                $filteredAlbums[] = $album;
            }
        }
    } else {
        $filteredAlbums = $albums;
    }

    header('content-type: application/json');
    echo json_encode($filteredAlbums)
?>