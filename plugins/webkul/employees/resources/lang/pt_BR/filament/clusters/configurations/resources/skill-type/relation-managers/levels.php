<?php

return [
    'form' => [
        'name'          => 'Nome',
        'level'         => 'Level',
        'default-level' => 'Padrão Level',
    ],

    'table' => [
        'columns' => [
            'name'          => 'Nome',
            'level'         => 'Level',
            'default-level' => 'Padrão Level',
            'created-at'    => 'Criado em',
            'updated-at'    => 'Atualizado em',
        ],

        'groups' => [
            'created-at' => 'Criado em',
        ],

        'filters' => [
            'deleted-records' => 'Deleted Records',
        ],

        'actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Habilidade Level criado',
                    'body'  => 'O Habilidade level foi criado com sucesso.',
                ],
            ],

            'edit' => [
                'notification' => [
                    'title' => 'Habilidade Level atualizado',
                    'body'  => 'O Habilidade level foi atualizado com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Habilidade Level restaurado',
                    'body'  => 'O Habilidade level foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Habilidade Level excluído',
                    'body'  => 'O Habilidade level foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Habilidade Levels excluído',
                    'body'  => 'O Habilidades foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Habilidade Levels excluído definitivamente',
                    'body'  => 'O Habilidades foi excluído definitivamente com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Habilidade Levels force restaurado',
                    'body'  => 'O Habilidades foi force restored com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'          => 'Nome',
            'level'         => 'Level',
            'default-level' => 'Padrão Level',
        ],
    ],
];
