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
                    <li><a href="liste.php">Liste</a></li>
                    <li></li>
                </ul>
                <a class="btn" href="#">Connexion</a>
            </nav>
        </div>
    </header>
    <section>
        <div class="contour">
            <div class="form_line"> 
                <div class="card-text">
                    <p id="texte3">Bienvenue</p>  
                    <p class="texte">Orange Digital Kalanso</p> 
                    <p class="texte1">Consulter la liste de nos</p> 
                    <p class="texte2">apprenants en toute securite</p> 
                </div>
                <div class="card-img">
                    <img class="img-text" src="img/11.jpeg" alt="" width="500px" height="400px">
                </div>
            </div>
        </div>
        </div>
    </section>
    <section>
        <div class="contour">
            <div class="card-btn">
                <button class="btn3"> <a href="liste.php">Voir la liste des apprenants</a></button>
            </div>
        </div>
    </section>
    <section>
    <div class="contour">
    <div class="form_line"> 
            <div>
                <img src="img/2.svg" alt="">
            </div>
            <div class="cardImg">
                <p class="titre">Bienvenue</p>  
                <p class="titre1">Orange Digital Kalanso</p> 
                <p class="titre">Consulter la liste de nos</p> 
                <p class="titre1">apprenants en toute securite</p> 
            </div>
        </div>
    </div>    
    </section>
    <section>
        <div>
            <div class="card-footer"></div>
        </div>
    </section>

</body>
</html>