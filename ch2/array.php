<?php
    $heroInfo = [
        [
            'heroName' => 'Spiderman',
            'weapon' => 'Spider Web'
        ],
        [
            'heroName' => 'Iron Man',
            'weapon' => 'Mark L'
        ],
        [
            'heroName' => 'Thor',
            'weapon' => 'Mjolnir'
        ],
        [
            'heroName' => 'Captain America',
            'weapon' => 'shield'
        ]    
        ];
        echo '<pre>';
        print_r($heroInfo);
        echo '<pre>';
        //What wepon Iron Man use?
        echo '<br>';
        echo $heroInfo[1]['heroName'].' uses '.$heroInfo[1]['weapon'].'.'
?>