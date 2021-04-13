# Bonus : Consommations

On veut afficher la liste des consommations vendues dans notre cinéma.

Voici la liste :

```php
<?php
// [...]
$extras = [
  [
    'Popcorn',
    'L',
    2.9
  ],
  [
    'Popcorn',
    'XL',
    4
  ],
  [
    'Chips',
    '50g',
    2.5
  ],
  [
    'M&M\'s',
    '100g',
    4
  ],
  [
    'Soda',
    '33cl',
    3.2
  ],
  [
    'Evian',
    '33cl',
    3
  ]
];
```

<details><summary>tableau avec les index indiqués</summary>

```php
<?php
// [...]
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
```

</details>

## Etapes

- reproduire les mêmes étapes
  - dans la page "tarifs", ajouter un titre "Consommation" en bas de la page
  - afficher la première consommation avec son volume et son montant en euros
  - afficher la seconde consommation avec son volume et son montant en euros
  - analyser les parties changeantes (en fait, il n'y en a qu'une :wink:)
  - coder une boucle permettant d'afficher toutes les consommations du tableau `$extras`