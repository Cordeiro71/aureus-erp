<?php

return [
    'navigation' => [
        'title' => 'Planos de atividades',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Informações gerais',
                'fields' => [
                    'name'       => 'Nome',
                    'status'     => 'Status',
                    'department' => 'Departamento',
                    'company'    => 'Empresa',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Nome',
            'status'     => 'Status',
            'department' => 'Departamento',
            'company'    => 'Empresa',
            'manager'    => 'Gerente',
            'created-by' => 'Criado por',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'filters' => [
            'name'           => 'Nome',
            'plugin'         => 'Plugin',
            'activity-types' => 'Atividade Tipos',
            'company'        => 'Empresa',
            'department'     => 'Departamento',
            'is-active'      => 'Status',
            'updated-at'     => 'Atualizado em',
            'created-at'     => 'Criado em',
        ],

        'groups' => [
            'status'     => 'Status',
            'name'       => 'Nome',
            'created-by' => 'Criado por',
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

        'activity-plan' => [
            'create' => [
                'notification' => [
                    'title' => 'Plano de atividades criado',
                    'body'  => 'O Plano de atividades foi criado com sucesso.',
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
        'sections' => [
            'general' => [
                'title'   => 'Informações gerais',
                'entries' => [
                    'name'       => 'Nome',
                    'status'     => 'Status',
                    'department' => 'Departamento',
                    'manager'    => 'Gerente',
                    'company'    => 'Empresa',
                ],
            ],
        ],
    ],
];
