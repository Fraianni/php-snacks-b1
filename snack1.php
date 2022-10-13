<!-- // Snack 1
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
// Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
// Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60 -->
<?php

$games =[
    [
        'home' => 'Juve',
        'away' => 'Milan',
        'homePoints' => '20',
        'awayPoints' => '30'
        
    ],
    [
        'home' => 'Udinese',
        'away' => 'Napoli',
        'homePoints' => '20',
        'awayPoints' => '30'
    ],
    [
        'home' => 'Empoli',
        'away' => 'Roma',
        'homePoints' => '20',
        'awayPoints' => '30'
        
    ],
    [
        'home' => 'Genoa',
        'away' => 'Sampdoria',
        'homePoints' => '20',
        'awayPoints' => '30'
        
    ],
];

for($i=0;$i<count($games);$i++){
    $game=$games[$i];
    ?>
    <p><?= $game['home']  ?> - <?= $game['away'] ?> | <?= $game['homePoints']?>-<?= $game['awayPoints']  ?> </p>

    <?php

 
}

  

?>



