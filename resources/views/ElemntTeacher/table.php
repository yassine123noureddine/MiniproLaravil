<?php 


$employees = [
    1 => [
        'id' => 1,
        'nom' => 'Doe',
        'prenom' => 'John',
        'age' => 35,
        'subordonnees' => [
            ['id' => 101, 'nom' => 'Smith', 'prenom' => 'Alice', 'poste' => 'Assistant'],
            ['id' => 102, 'nom' => 'Johnson', 'prenom' => 'Mark', 'poste' => 'Junior Developer']
        ]
    ],
    2 => [
        'id' => 2,
        'nom' => 'Brown',
        'prenom' => 'Emily',
        'age' => 29,
        'subordonnees' => [
            ['id' => 201, 'nom' => 'Taylor', 'prenom' => 'Chris', 'poste' => 'Designer']
        ]
    ],
    3 => [
        'id' => 3,
        'nom' => 'White',
        'prenom' => 'Sophia',
        'age' => 42,
        'subordonnees' => []
    ]
];
?>