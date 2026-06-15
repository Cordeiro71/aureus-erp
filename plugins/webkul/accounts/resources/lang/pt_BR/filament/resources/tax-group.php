<?php

return [
    'form' => [
        'sections' => [
            'fields' => [
                'company'            => 'Empresa',
                'country'            => 'Country',
                'name'               => 'Nome',
                'preceding-subtotal' => 'Preceding Subtotal',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'company'            => 'Empresa',
            'country'            => 'Country',
            'created-by'         => 'Criado por',
            'name'               => 'Nome',
            'preceding-subtotal' => 'Preceding Subtotal',
            'created-at'         => 'Criado em',
            'updated-at'         => 'Atualizado em',
        ],

        'groups' => [
            'name'       => 'Nome',
            'company'    => 'Empresa',
            'country'    => 'Country',
            'created-by' => 'Criado por',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Grupo de impostos excluído',
                        'body'  => 'O Grupo de impostos foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Grupo de impostos could não be excluído',
                        'body'  => 'The grupo de impostos cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Grupos de impostos excluído',
                        'body'  => 'O Grupos de impostos foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Grupos de impostos could não be excluído',
                        'body'  => 'The grupos de impostos cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'company'            => 'Empresa',
                'country'            => 'Country',
                'name'               => 'Nome',
                'preceding-subtotal' => 'Preceding Subtotal',
            ],
        ],
    ],
];
