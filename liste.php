<!DOCTYPE html>
<html lang="en">
<head>

    <?php 
    $bddPDO = new PDO('mysql:host=localhost;dbname=portail', 'root', "");
    $bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $prepareStatement = $bddPDO->prepare("SELECT * FROM apprenant");
    $reponseIsOK = $prepareStatement ->execute();
    $apprenant = $prepareStatement->fetchAll();
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Orange Digital Kalanso</title>
</head>
<body>
    <header>
        <div class="contour">
            <nav>
                <a href="index.php"><img class="img" src="img/1.png" alt="logo" width="90px" height="70px"></a>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="inscription.html">Nouveau</a></li>
                    <li></li>
                </ul>
            </nav>
        </div>
    </header>
    <section>
        <div class="contour">
            <h2 class="list">Liste des apprenants</h2>
            <div class="table">
               <table class="table table-striped">
                    <thead>
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>age</th>
                        <th>Date de naissance</th>
                        <th>Adresse Email</th>
                        <th>Telephone</th>
                        <th>Promotion</th>
                        <th>Annee certification</th>
                        <th>Photo</th>
                    </thead>

                    <tbody>
                        <?php foreach($apprenant as $app) :?>
                        <tr>
                        <td><?= $app['matricule'] ?></td>
                            <td><?= $app['nom'] ?></td>
                            <td><?= $app['prenom'] ?></td>
                            <td><?= $app['age'] ?></td>
                            <td><?= $app['dateNaissance'] ?></td>
                            <td><?= $app['adresseEmail'] ?></td>
                            <td><?= $app['numeroTel'] ?></td>
                            <td><?= $app['promotion'] ?></td>
                            <td><?= $app['anneeCertification'] ?></td>
                            <td><img style="border-radius:50%;" src="data:image/jpg;charset=utf8;base64, <?php echo base64_encode($app['photo']); ?>" width="80px" height="80px" /></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
               </table> 
            </div>
        </div>
    </section>

</body>
</html>