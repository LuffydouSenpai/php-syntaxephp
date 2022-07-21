<?php
var_dump($_POST);
if (isset($_POST["envoyer"])) {
        echo "votre nom est " . $_POST["nom"];
        echo "<br>";
        echo "votre prenom est " . $_POST["prenom"];
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/pulse/bootstrap.min.css">
</head>

<body>
    <?php include "header.php" ?>

    <main>
        <form action="index.php" method="POST">

            <label class="col-form-label mt-4" for="inputDefault">Nom</label>
            <input type="text" class="form-control" placeholder="Nom" id="inputDefault" name="nom" minlength="2" maxlength="15" required="required" >
            <label class="col-form-label mt-4" for="inputDefault">Prenom</label>
            <input type="text" class="form-control" placeholder="Prenom" id="inputDefault" name="prenom" minlength="2" maxlength="15" required="required">
            <br><br>


            <button type="submit" class="btn btn-primary" name="envoyer">Submit</button>

        </form>

        <button type="button" class="btn btn-primary">Button</button>

        <?php
        echo "<br>";
        ?>

        <div class="progress">
            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

    </main>
    <?php include "footer.php" ?>
</body>

</html>