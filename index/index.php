<?php

$clients = [
    [
        'name' => 'Brandon Sanderson',
        'orders' => [
                'name' => 'Iphone 15 Pro Max, Airpods pro',
                'total' => 2054.99
        ],
        'suscriptions' => true
    ],
    [
        'name' => 'robert Jordan',
        'orders' => [],
        'suscriptions' => false
    ],
    [
        'name' => 'George R.R. Martin',
        'orders' => [
                'name' => 'Iphone 15 Pro Max, Kindle ',
                'total' => 1400.5
        ],
        'suscriptions' => true
    ],
    [
        'name' => 'R.F. Kuang',
        'orders' => [
                'name' => 'Iphone 15 Pro Max',
                'total' => 1400.5
        ],
        'suscriptions' => true
    ],
    [
        'name' => 'J.K. Rowling',
        'orders' => [],
        'suscriptions' => false
    ]
];

$listaSuscritos = array_filter($clients, function ($client) {
    return $client['suscriptions'];
});
$listaNoSuscritos = array_filter($clients, function ($client) {
    return $client['suscriptions'] === false;
});

$listaOrders = array_filter($clients, function ($client) {
    return count($client['orders']) >= 1;
});

require "index.view.php"
?>
