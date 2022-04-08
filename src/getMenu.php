<?php

function getMenu()
{

    $mass = [
        [
            'title' => 'Главная',
            'path' => '/',
            'sort' => 1,
            'active' => true,
        ],
        [
            'title' => 'Каталог',
            'path' => '/catalog/',
            'sort' => 4,
            'active' => false,
        ],
        [
            'title' => 'Раздел 1',
            'path' => '/section1/',
            'sort' => 1,
            'active' => true,
        ],
        [
            'title' => 'Раздел 2',
            'path' => '/section2/',
            'sort' => 2,
            'active' => true,
        ],
        [
            'title' => 'Раздел 3',
            'path' => '/section3/',
            'sort' => 3,
            'active' => true,
        ],
    ];
    return $mass;
}
