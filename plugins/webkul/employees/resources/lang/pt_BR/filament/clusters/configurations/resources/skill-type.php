<?php

return [
    'title' => 'Habilidade Tipos',

    'navigation' => [
        'title' => 'Habilidade Tipos',
        'group' => 'Funcionário',
    ],

    'form' => [
        'sections' => [
            'fields' => [
                'name'       => 'Nome',
                'color'      => 'Cor',
                'status'     => 'Status',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => 'ID',
            'name'       => 'Habilidade Tipo',
            'status'     => 'Status',
            'color'      => 'Cor',
            'skills'     => 'Habilidades',
            'levels'     => 'Levels',
            'created-by' => 'Criado por',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'filters' => [
            'skill-levels' => 'Habilidade Levels',
            'skills'       => 'Habilidades',
            'created-by'   => 'Criado por',
            'status'       => 'Status',
            'updated-at'   => 'Atualizado em',
            'created-at'   => 'Criado em',
        ],

        'groups' => [
            'name'       => 'Habilidade Tipo',
            'color'      => 'Cor',
            'status'     => 'Status',
            'created-by' => 'Criado por',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Habilidade Tipo restaurado',
                    'body'  => 'O Habilidade tipo foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Habilidade Tipo excluído',
                    'body'  => 'O Habilidade tipo foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Habilidade Tipos restaurado',
                    'body'  => 'O Habilidade tipos foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Habilidade Tipos excluído',
                    'body'  => 'O Habilidade tipos foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Habilidade Tipos excluído definitivamente',
                    'body'  => 'O Habilidade tipos foi excluído definitivamente com sucesso.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Habilidade Tipos',
                    'body'  => 'O Habilidade tipos foi criado com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'name'   => 'Habilidade Tipo',
                'color'  => 'Cor',
                'status' => 'Status',
            ],
        ],
    ],
];
