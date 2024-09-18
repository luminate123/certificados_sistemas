<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .watermark {
            position: absolute;
            top: -5;
            left: -10;
            width: 101%;
            height: 101%;
            z-index: -1;
        }
    </style>
</head>

<body>
    <?php
    $nombreImagen = "img014.jpg";
    $imagenBase64 = "data:image/png;base64," . base64_encode(file_get_contents($nombreImagen));
    ?>
    <img src="<?php echo $imagenBase64 ?>" class="watermark" alt="">
    asdasd
</body>

</html>