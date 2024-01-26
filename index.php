<?php
include 'functions.php';

if (isset($_GET["lunghezza"]) && isset($_GET["lunghezza"]) != ""){
    $lenght = $_GET["lunghezza"];
    $password = genPassword($lenght);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="./index.php" method="GET">
                <label for="lunghezza">Inserisci la lunghezza della password desiderata</label>
                <input type="text" class="form-control form-control-sm" name="lunghezza">
                <button type ="submit" class="btn btn-primary"> Vai</button>
                </form>
            </div>
            <div>

                <?php  if(isset($lenght)){ ?>
                <?php echo "La tua password è: $password" ?> 
                
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>