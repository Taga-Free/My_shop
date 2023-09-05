<?php

$name = "";
$email = "";
$phone = "";
$address = "";

$errorMessage = "";
$successMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
}


    do {
        # code...
        if( empty($name) || empty($email) || empty($phone) || empty($address)){
            $errorMessage = "Veillez remplire le formulaire SVP!";
            break;
        }

        //Ajouter dans la base de donner

        $name = "";
        $email = "";
        $phone = "";
        $address = "";

        $successMessage = "le client est ajouter avec succés.";
    } 

    while (false);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h2>Nouveau Client</h2>

        <?php
        if (!empty($errorMessage)) {
            # code...
            echo"
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>$errorMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
            </div>";
        }
        ?>
        <form action="#" method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nom Comlet</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Numero de Télephone</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Adresse</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="">
                </div>
            </div>
            <?php
            if (!empty($successMessage)) {
                # code...
                echo "
                
            <div class='row mb-3'>
                <div class='offset-sm-3 col-sm-6'>
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>    
                        <strong>$successMessage</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
                    </div>
                </div>
            </div>
                ";
            }
            ?>
            

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a href="/projet_crud_php/index.php" class="btn btn-outline-danger" role="button">Annuler</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>