<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Cinéma Rodia - Tarifs</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>

    <?php include 'templates/header.php'; ?>

    <main>
      <section id="tarifs">
        <h2>Salles</h2>
        <ul>
          <?php

            // CHALLENGE DU SOIR ICI :)
            $rooms = [
              'Athéna', // => index 0
              'Dyonisos', // => index 1
              'Hadès', // => index 2
              'Zeus' // => index 3
            ];

            //Affichage de la valeur Athéna contenue dans $rooms
            /*
            La valeur changeante pour créer la boucle est la valeur 
            indiquant la position des valeurs contenues dans le tableau $rooms 
              echo $rooms[0]; 
            */
            //Affichage de la valeur Dyonisos contenue dans $rooms
             /* echo $rooms[1]; */

            /* Avec la boucle for je demande d'afficher au fur et à mesure mes 4 salles en créant une var $i
            correspondant au nbr de clés du tableau $rooms */
            /* 
            for($i = 0; $i < 4; $i++)
            {
              echo "<li>$rooms[$i]</li>";
            } 
            */


            /* Avec la boucle foreach je n'ai pas besoin de savoir combien de valeurs 
            sont contenues dans mon tableaux, j'ai seulement besoin 
            d'indiquer une variable correspondant aux clés */

            foreach($rooms as $i) {
              echo "<li>$i</li>";
            }

            ?>

        </ul>
      </section>
    </main>

    <?php include 'templates/footer.php'; ?>

  </body>
</html>
