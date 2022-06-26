<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_exercice.css">
    <title>Exercice php $_GET</title>
</head>
<body>


<div class="consigne">
    <h2>Exercice php $_GET</h2>
    <ol>
        <li>
            - Vous créez 3 liens HTML : bananes, kiwis et cerises.
        </li>
        <li>
            - Quand on clique sur 1 lien, vous passez dans l'URL uniquement le nom du fruit vers la page exercice.php. Pour cela vous remplissez le href.
        </li>

        <li>
            - Quand un fruit est demandé, vous affichez son prix selon la phrase "Le prix des ... est de ... euros au kilo." dans cette même page.
        </li>

    </ol>


    <div class="container">
        <ul>
            <li>
                <a href="?name=bananes&prix=3">Bananes</a> 
            </li>

            <li>
                <a href="?name=kiwis&prix=2">Kiwis</a>
            </li>

            <li>
                <a href="?name=cerises&prix=5">Cerises</a>
            </li>

            <li>
                <a href="exercice.php">Reset</a>
            </li>
        </ul>
    </div>

    <?php

    if( isset($_GET['name']) && isset ($_GET['prix'])){ // si existe "article" dans $_GET, donc dans l'URL, ainsi que "couleur" et "prix", alors on peut les afficher
        echo '<h4>Le prix des ' . $_GET['name'] . ' est de ' . $_GET['prix'] . ' €/kilo.</h4>';
    
    }else{
        echo '<h4>Aucun fruit sélectionné!....</h4>';
    }


    ?>
</div>  
</body>
</html>



 



