<?php

return [
    'navigation' => [
        'title' => 'Planos de atividades',
    ],

    'form' => [
        'name'   => 'Nome',
        'status' => 'Status',
    ],

    'table' => [
        'columns' => [
            'name'       => 'Nome',
            'status'     => 'Status',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'groups' => [
            'name'       => 'Nome',
            'status'     => 'Status',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Plano de atividades restaurado',
                    'body'  => 'O Plano de atividades foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Plano de atividades excluído',
                    'body'  => 'O Plano de atividades foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Plano de atividades excluído definitivamente',
                    'body'  => 'O Plano de atividades foi excluído definitivamente com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Planos de atividades restaurado',
                    'body'  => 'O Planos de atividades foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Planos de atividades excluído',
                    'body'  => 'O Planos de atividades foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Planos de atividades excluído definitivamente',
                    'body'  => 'O Planos de atividades foi excluído definitivamente com sucesso.',
                ],
            ],
        ],

        'empty-state' => [
            'create' => [
                'notification' => [
                    'title' => 'Plano de atividades criado',
                    'body'  => 'O Plano de atividades foi criado com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name'   => 'Nome',
        'status' => 'Status',
    ],
];
