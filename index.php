<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>My Shop</title>
</head>

<body>
    <div class="container my-5">
        <h2>Liste des Clients</h2>
        <a class="btn btn-primary" href="/projet_crud_php/create.php" role="button">Nouveau Client</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom Complet</th>
                    <th>Email</th>
                    <th>Numero</th>
                    <th>Adresse</th>
                    <th>Date De Creation</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "myshop";

                //Creation de la connexion
                $connection = new mysqli($servername, $username, $password, $database);

                //Verification de la connexion
                if($connection->connect_error){
                    die("Connection failed: " . $connection->connect_error);
                }

                //Lire les differents Tables
                $sql = "SELECT * FROM clients";
                $result = $connection->query($sql);

                if(!$result){
                    die("Invalid query: " . $connection->error);
                }

                while($row = $result->fetch_assoc()){
                    echo " 
                    <tr>
                    <td>$row[id]</td>
                    <td>$row[nom]</td>
                    <td>$row[email]</td>
                    <td>$row[téléphone]</td>
                    <td>$row[adresse]</td>
                    <td>$row[créé_à]</td>
                    <td>
                        <a href='projet_crud_php/edite.php?$row[id]' class='btn btn-primary btn-sm'>Edite</a>
                        <a href='projet_crud_php/delete.php?$row[id]' class='btn btn-danger btn-sm'>Delete</a>
                    </td>


                </tr>
                    ";
                }

                ?>
                   
            </tbody>
        </table>
    </div>
</body>

</html>