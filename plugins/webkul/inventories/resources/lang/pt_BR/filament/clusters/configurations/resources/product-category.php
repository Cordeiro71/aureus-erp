<?php

return [
    'navigation' => [
        'title' => 'Categorias',
        'group' => 'Produtos',
    ],

    'form' => [
        'sections' => [
            'inventory' => [
                'title' => 'Estoque',

                'fieldsets' => [
                    'logistics' => [
                        'title' => 'Logistics',

                        'fields' => [
                            'routes' => 'Rotas',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'inventory' => [
                'title' => 'Estoque',

                'subsections' => [
                    'logistics' => [
                        'title' => 'Logistics',

                        'entries' => [
                            'routes'     => 'Armazém Rotas',
                            'route_name' => 'Rota Nome',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
