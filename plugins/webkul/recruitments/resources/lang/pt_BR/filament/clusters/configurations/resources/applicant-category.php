<?php

return [
    'title' => 'Etiquetas',

    'navigation' => [
        'title' => 'Etiquetas',
        'group' => 'Candidaturas',
    ],

    'form' => [
        'fields' => [
            'name'             => 'Nome',
            'name-placeholder' => 'Enter the nome de the etiquetas',
            'color'            => 'Cor',
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
            'employee'   => 'Funcionário',
            'created-by' => 'Criado por',
            'updated-at' => 'Atualizado em',
            'created-at' => 'Criado em',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Etiquetas atualizado',
                    'body'  => 'O Etiquetas foi atualizado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Etiquetas excluído',
                    'body'  => 'O Etiquetas foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Categorias de candidatos excluídas',
                    'body'  => 'O Candidato categorias foi excluído com sucesso.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'Etiquetas criado',
                    'body'  => 'O Etiquetas foi criado com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name'  => 'Nome',
        'color' => 'Cor',
    ],
];
