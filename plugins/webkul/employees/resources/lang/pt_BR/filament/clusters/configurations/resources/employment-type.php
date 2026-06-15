<?php

return [
    'title' => 'Employment Tipos',

    'navigation' => [
        'title' => 'Employment Tipos',
        'group' => 'Recrutamento',
    ],

    'form' => [
        'fields' => [
            'name'    => 'Employment Tipo',
            'code'    => 'Code',
            'country' => 'Country',
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => 'ID',
            'name'       => 'Employment Tipo',
            'code'       => 'Code',
            'country'    => 'Country',
            'created-by' => 'Criado por',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'filters' => [
            'name'       => 'Employment Tipo',
            'country'    => 'Country',
            'created-by' => 'Criado por',
            'updated-at' => 'Atualizado em',
            'created-at' => 'Criado em',
        ],

        'groups' => [
            'name'       => 'Employment Tipo',
            'country'    => 'Country',
            'code'       => 'Code',
            'created-by' => 'Criado por',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Employment Tipo',
                    'body'  => 'O Employment tipo foi edited com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Employment Tipo excluído',
                    'body'  => 'O Employment tipo foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Employment Tipos excluído',
                    'body'  => 'O Employment tipos foi excluído com sucesso.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Employment Tipos',
                    'body'  => 'O Employment tipos foi criado com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'    => 'Employment Tipo',
            'code'    => 'Code',
            'country' => 'Country',
        ],
    ],
];
