<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badwords php</title>
</head>
<body>
    <?php
    $paragraph = $_GET["paragraph"];
    ?>

    <div>
        <p><?php echo $paragraph ?></p>
        <div>La frase è composta da <?php echo strlen($paragraph); ?> caratteri.</div>
    </div>

</body>

</html>