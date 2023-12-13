
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-6 justify-content-center">
                <form action="index.php" method="GET">
                    <label for="email">Inserisci la tua E-mail</label>
                    <input id="email" name="email" type="email">
                    <?php
                    if (isset($_GET["email"])) {
                        if (str_contains($_GET["email"], "@") && str_contains($_GET["email"], ".")) { ?>
                           <p><?php echo "email valida"; ?></p> 
                    <?php  } else { ?>
                            <p><?php echo "email non valida"; ?></p>
                    <?php }} ?>

                    <button type="submit">Invia</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>