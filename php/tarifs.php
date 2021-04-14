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
        <h2>Tarifs</h2>
        <div class="flex">
          <ul>
            <li>Tarif Plein : 8,30 &euro;</li>
            <li>Tarif Réduit : 6,80 &euro;</li>
            <li>Tarif Enfant : 4,50 &euro;</li>
            <li>Supplément 3D : 1 &euro;</li>
          </ul>
          <ul>
            <li>Abonnement 5 places : -10%</li>
            <li>Abonnement 5 places -25ans : -20%</li>
          </ul>
        </div>
        <p>
          Tarif Réduit pour les personnes de + de 60 ans et de moins de 16 ans
          <br>
          Tarif Enfant pour les - de 14 ans
        </p>

        <h2>Etape 1 - Age du capitaine</h2>
        <p>
          <?php

            // ETAPE 1 : Créer une variable avec la valeur 43 (c'est un int / integer / entier)
            $age = 43;

            // Pour pouvoir récupérer le tarif, je définis les variables
            // correspondantes à chacun des tarifs (reprises du challenge d'hier ;) (de type float)
            $tarifPlein  = 13.5;
            $tarifReduit = 6.8;
            $tarifEnfant = 4.5;

            if( $age < 14 ) // Tarif Enfant (< 14 ans)
            {
                $montant = $tarifEnfant;
            }
            elseif( $age < 16 || $age > 60 ) // Tarif réduit ( -16 ans ou +60 ans, mais aussi >= 14 ans )
            {
                $montant = $tarifReduit;
            }
            else // Pour tous les autres => entre 16 et 60 ans
            {
                $montant = $tarifPlein;
            }

            // Affichage avec echo
            echo "Age du capitaine : $age ans";
            echo "<br>";
            echo "Tarif du capitaine : $montant €";
          ?>
        </p>

        <h2>Etape 2 - Selon votre âge</h2>
        <p>
          <?php

            // On reset l'age à 1 pour avoir tout les ages de 1 à 99
            $age = 1;

            // On fait une boucle qui va "tourner" TANT QUE l'age est inférieur à 100
            while( $age < 100 )
            {
              if( $age < 14 ) // Tarif Enfant (< 14 ans)
              {
                  $montant = $tarifEnfant;
              }
              elseif( $age < 16 || $age > 60 ) // Tarif réduit ( -16 ans ou +60 ans, mais aussi >= 14 ans )
              {
                  $montant = $tarifReduit;
              }
              else // Pour tous les autres => entre 16 et 60 ans
              {
                  $montant = $tarifPlein;
              }

              echo "$age ans : $montant €"; // J'affiche l'age actuel et le tarif
              echo "<br>"; // J'affiche un saut de ligne

              $age = $age + 1; // Je modifie l'age pour la prochaine itération
              // Si j'oublie de le faire, $age va conserver la même valeur à l'infini
              // Et la boucle ne s'arrêtera jamais (car la condition $age < 100 est toujours vraie)

              // Solution 2 : $age += 1;
              // Solution 3 : $age++;
            }

            // La version "améliorée" de while : la boucle for
            // for( valeur initiale ; conditions à remplir pour que la boucle "tourne" ; modification de la variable )
            // dans la while : valeur initiale §75 / condition §78 / incrémentation §96
            for( $age = 1 ; $age < 100 ; $age = $age + 1 )
            {
              // Mêmes instructions que dans la boucle while, à part la ligne 96 ;)
            }


            // Les tableaux en PHP
            $miam = [
              "poulet" ,
              "frites",
              "mayo",
              "ketchup"
            ];

            var_dump( $miam );

            echo $miam[1];

          ?>
        </p>

        <h2>Consommation</h2>

        <?php

          $extras = [
            // => index 0
            [
              'Popcorn', // => sous-index 0
              'L', // => sous-index 1
              2.9 // => sous-index 2
            ],
            // => index 1
            [
              'Popcorn', // => sous-index 0
              'XL', // => sous-index 1
              4 // => sous-index 2
            ],
            // => index 2
            [
              'Chips', // => sous-index 0
              '50g', // => sous-index 1
              2.5 // => sous-index 2
            ],
            // => index 3
            [
              'M&M\'s', // => sous-index 0
              '100g', // => sous-index 1
              4 // => sous-index 2
            ],
            // => index 4
            [
              'Soda', // => sous-index 0
              '33cl', // => sous-index 1
              3.2 // => sous-index 2
            ],
            // => index 5
            [
              'Evian', // => sous-index 0
              '33cl', // => sous-index 1
              3 // => sous-index 2
            ]
          ];

          /* echo $extras[0][0].$extras[0][1].$extras[0][2];
          echo $extras[1][0].$extras[1][1].$extras[1][2]; */

          /* for ($i = 0; $i < 6; $i++) {
            for ($si = 0; $si < 3; $si++) {
              $sous_extras = $extras[$i];
              echo " $sous_extras[$si] ";
            }
            echo "<br>";
          } */

          foreach ($extras as $menu) {
            echo "<li>";
            foreach ($menu as $sous_menu) {
              echo $sous_menu;
            }
            echo "</li>";
            echo "<br>";
          }
        
        ?>

      </section>
    </main>

    <?php include 'templates/footer.php'; ?>

  </body>
</html>
