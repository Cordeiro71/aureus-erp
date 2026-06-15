<?php

return [
    'navigation' => [
        'title' => 'Tarefa Estágios',
    ],

    'form' => [
        'name'    => 'Nome',
        'project' => 'Projeto',
    ],

    'table' => [
        'columns' => [
            'name'       => 'Nome',
            'project'    => 'Projeto',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'groups' => [
            'project'    => 'Projeto',
            'created-at' => 'Criado em',
        ],

        'filters' => [
            'project' => 'Projeto',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Tarefa estágio atualizado',
                    'body'  => 'O Tarefa estágio foi atualizado com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Tarefa estágio restaurado',
                    'body'  => 'O Tarefa estágio foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Tarefa estágio excluído',
                    'body'  => 'O Tarefa estágio foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Tarefa estágio excluído definitivamente',
                        'body'  => 'O Tarefa estágio foi excluído definitivamente com sucesso.',
                    ],
                    'error' => [
                        'title' => 'Tarefa estágio could não be excluído',
                        'body'  => 'The Tarefa estágio cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Tarefa estágios restaurado',
                    'body'  => 'O Tarefa estágios foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Tarefa estágios excluído',
                    'body'  => 'O Tarefa estágios foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Tarefa estágios excluído definitivamente',
                    'body'  => 'O Tarefa estágios foi excluído definitivamente com sucesso.',
                ],
            ],
        ],
    ],
];
