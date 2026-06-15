<?php

return [
    'title' => 'Recusar Reason',

    'navigation' => [
        'title' => 'Recusar Reasons',
        'group' => 'Candidaturas',
    ],

    'form' => [
        'fields' => [
            'name'             => 'Nome',
            'template'         => [
                'title'                    => 'Modelo',
                'applicant-refuse'         => 'Recusar candidato',
                'applicant-not-interested' => 'Candidato não interessado',
            ],
            'name-placeholder' => 'Enter the nome de the recusar reason',
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => 'ID',
            'name'       => 'Nome',
            'template'   => 'Modelo',
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
                    'title' => 'Recusar reason atualizado',
                    'body'  => 'O Recusar reason foi atualizado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Recusar reason excluído',
                    'body'  => 'O Recusar reason foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Recusar reasons excluído',
                    'body'  => 'O Recusar reasons foi excluído com sucesso.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'Recusar reason criado',
                    'body'  => 'O Recusar reason foi criado com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name'       => 'Nome',
        'template'   => 'Modelo',
    ],
];
