<?php

return [
    'navigation' => [
        'title' => 'Equipes',
    ],

    'form' => [
        'name'    => 'Nome',
        'company' => 'Empresa',
        'users'   => 'Equipe Members',
    ],

    'table' => [
        'columns' => [
            'name'       => 'Nome',
            'company'    => 'Empresa',
            'users'      => 'Equipe Members',
            'created-at' => 'Criado em',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Equipe atualizado',
                    'body'  => 'A Equipe foi atualizada com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Equipe restaurado',
                    'body'  => 'A Equipe foi restaurada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Equipe excluído',
                    'body'  => 'A Equipe foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Equipe excluído definitivamente',
                        'body'  => 'A Equipe foi excluído definitivamente com sucesso.',
                    ],
                    'error' => [
                        'title' => 'Equipe could não be excluído definitivamente',
                        'body'  => 'The equipe is being used e cannot be excluído definitivamente.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Equipes restaurado',
                    'body'  => 'The equipes have been restored successfully.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Equipes excluído',
                    'body'  => 'The equipes have been deleted successfully.',
                ],
            ],
        ],
    ],
];
