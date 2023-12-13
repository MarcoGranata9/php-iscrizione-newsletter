<?php 
include_once __DIR__ . "/partials/functions.php";

session_start();
$_SESSION["email"] = "";
?>

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
                <h1 class="pb-5">Registrati alla Newsletter!</h1>
                <form action="index.php" method="POST">
                    <label for="email">Inserisci la tua E-mail</label>
                    <input id="email" name="email" type="text" <?php if(isset($_POST["email"])) {echo " value='".$_POST["email"]."'";} ?>>
                    <button class="btn btn-primary" type="submit">Invia</button>
                    <?php
                    if (isset($_POST["email"])) {
                        if (email_check($_POST["email"])) { ?>
                           <p class="alert alert-success mt-2"><?php echo "email valida"; ?></p>
                           <?php
                            $_SESSION["email"] = $_POST["email"];
                            header("Location: ./thankyou.php") 
                           ?>
                    <?php  } else { ?>
                            <p class="alert alert-danger mt-2"><?php echo "email non valida, riprova"; ?></p>
                    <?php }} ?>
                </form>
            </div>
        </div>
    </div>

</body>
</html>