<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votação</title>
</head>
<body>
    <h2>Verificação para eleitor</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <input type="text" name="verificacao"><br><br>
        <input type="submit" value="verificar">

    </form>

    <?php 
        if ($_POST) {
            $verificacao = $_POST['verificacao'];
            if (is_numeric($verificacao)) {
                if ($verificacao >=16) {
                    echo "<h3> Você tem $verificacao e pode votar!</h3>";
                } else {
                    echo"<h3> Você tem $verificacao e não pode votar!</h3>";
                }
            }
        }
    ?>

</body>
</html>