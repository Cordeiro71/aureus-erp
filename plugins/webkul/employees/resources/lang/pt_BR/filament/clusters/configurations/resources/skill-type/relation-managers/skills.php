<?php

return [
    'form' => [
        'name' => 'Nome',
    ],

    'table' => [
        'columns' => [
            'name'       => 'Nome',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'groups' => [
            'created-at' => 'Criado em',
        ],

        'filters' => [
            'deleted-records' => 'Deleted Records',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Habilidade atualizado',
                    'body'  => 'A Habilidade foi atualizada com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Habilidade restaurado',
                    'body'  => 'A Habilidade foi restaurada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Habilidade excluído',
                    'body'  => 'A Habilidade foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Habilidades excluído',
                    'body'  => 'O Habilidades foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Habilidades excluído definitivamente',
                    'body'  => 'O Habilidades foi excluído definitivamente com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Habilidades force restaurado',
                    'body'  => 'O Habilidades foi force restored com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name' => 'Nome',
        ],
    ],
];
