<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Dischi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js" ></script>
        <link rel="stylesheet" href="../styles/style.css">
    </head>
    <body>
        <header class="my_header container-fluid py-2 px-4 d-flex justify-content-between">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png" alt="spotify logo">
        </header>

        <main class="my_main">
            <div class="container-lg py-5">
                <div>
                    <div class="row">
                        <?php include '../database.php' ?>
                        <?php foreach($albums as $album) { ?>
                            <div class="col-2 my_card p-3 d-flex flex-column align-items-center mx-3 mb-4">
                                <img class="img-fluid mb-3" src="<?php echo $album['poster']?>" alt="object.poster">
                                <h3 class="text-white text-uppercase mb-2 fs-5 text-center"><?php echo $album['title']?></h3>
                                <span><?php echo $album['author']?></span>
                                <span><?php echo $album['year']?></span>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>