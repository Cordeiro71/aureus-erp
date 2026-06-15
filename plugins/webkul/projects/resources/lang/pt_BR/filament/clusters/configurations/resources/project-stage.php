<?php

return [
    'navigation' => [
        'title' => 'Projeto Estágios',
    ],

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
            'name'         => 'Nome',
            'is-completed' => 'Is Concluído',
            'project'      => 'Projeto',
            'created-at'   => 'Criado em',
        ],

        'filters' => [
            'is-completed' => 'Is Concluído',
            'project'      => 'Projeto',
            'creator'      => 'Creator',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Projeto estágio atualizado',
                    'body'  => 'O Projeto estágio foi atualizado com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Projeto estágio restaurado',
                    'body'  => 'O Projeto estágio foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Projeto estágio excluído',
                    'body'  => 'O Projeto estágio foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Projeto estágio excluído definitivamente',
                        'body'  => 'O Projeto estágio foi excluído definitivamente com sucesso.',
                    ],
                    'error' => [
                        'title' => 'Projeto Estágio  could não be excluído',
                        'body'  => 'The Projeto Estágio  cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Projeto estágios restaurado',
                    'body'  => 'O Projeto estágios foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Projeto estágios excluído',
                    'body'  => 'O Projeto estágios foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Projeto estágios excluído definitivamente',
                    'body'  => 'O Projeto estágios foi excluído definitivamente com sucesso.',
                ],
            ],
        ],
    ],
];
