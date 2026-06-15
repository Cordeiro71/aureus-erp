<?php

return [
    'title' => 'Etiquetas',

    'navigation' => [
        'title' => 'Etiquetas',
        'group' => 'Funcionário',
    ],

    'groups' => [
        'status'     => 'Status',
        'created-by' => 'Criado por',
        'created-at' => 'Criado em',
        'updated-at' => 'Atualizado em',
    ],

    'form' => [
        'fields' => [
            'name'  => 'Nome',
            'color' => 'Cor',
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => 'ID',
            'name'       => 'Nome',
            'color'      => 'Cor',
            'created-by' => 'Criado por',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'filters' => [
            'name'       => 'Nome',
            'created-by' => 'Criado por',
            'updated-by' => 'Atualizado por',
            'updated-at' => 'Atualizado em',
            'created-at' => 'Criado em',
        ],

        'groups' => [
            'name'         => 'Nome',
            'job-position' => 'Cargo Cargo',
            'color'        => 'Cor',
            'created-by'   => 'Criado por',
            'created-at'   => 'Criado em',
            'updated-at'   => 'Atualizado em',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Etiqueta atualizado',
                    'body'  => 'A Etiqueta foi atualizada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Etiqueta excluído',
                    'body'  => 'A Etiqueta foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Etiquetas excluído',
                    'body'  => 'O Etiquetas foi excluído com sucesso.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'Etiqueta criado',
                    'body'  => 'A Etiqueta foi criada com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name'  => 'Nome',
        'color' => 'Cor',
    ],
];
