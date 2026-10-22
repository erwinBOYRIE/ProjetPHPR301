<?php
function redimage($img_src, $img_dest, $dst_w, $dst_h) {
    //si l'image éditée existe déjà, inutile de la ré-exécuter
    if (file_exists($img_dest)) {
        return;
    }

    if (!file_exists($img_src)) {
        return;
    }

    $size = getimagesize($img_src);
    if (!$size) {
        return;
    }

    $src_w = $size[0];
    $src_h = $size[1];

    $dst_im = imagecreatetruecolor($dst_w, $dst_h);
    $src_im = imagecreatefromjpeg($img_src);

    if ($src_im && $dst_im) {
        imagecopyresampled($dst_im, $src_im, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
        imagejpeg($dst_im, $img_dest, 85); // 85% de qualité pour un bon compromis poids/visuel
    }
}
?>