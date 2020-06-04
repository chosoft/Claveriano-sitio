<?php

    $link = $_POST['link'];
    $coment = $_POST['comentario'];

    if ($link == null|| $coment == null) {
        header('location../subir-video.php');
    }
    else{
        $q = "INSERT INTO tb_videos (l)";
    }

?>