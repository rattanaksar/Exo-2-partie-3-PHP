
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 2 : Les boucles</title>
</head>
<body>
    <h1>Exo 2 : Les boucles</h1>
    <h2>Exo 2</h2>
    <p>
    Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.  
    Tant que la première variable n'est pas supérieure à 20 :
    - multiplier la première variable avec la deuxième
    - afficher le résultat
    - incrementer la première variable  
    </p>
    <p>
        <?php
        $i = 0; 
        $b = rand (1,5);
        while($i < 20)
        {
          echo ($i*$b)."<br>";
          $i ++;
        }
        ?>
    </p>
</body>
</html>