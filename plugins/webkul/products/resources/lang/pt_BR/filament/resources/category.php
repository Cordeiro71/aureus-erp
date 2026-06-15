<?php

return [
    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Geral',

                'fields' => [
                    'name'             => 'Nome',
                    'name-placeholder' => 'eg. Lamps',
                    'parent'           => 'Pai',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'        => 'Nome',
            'full-name'   => 'Nome completo',
            'parent-path' => 'Pai Path',
            'parent'      => 'Pai',
            'creator'     => 'Creator',
            'created-at'  => 'Criado em',
            'created-at'  => 'Criado em',
            'updated-at'  => 'Atualizado em',
        ],

        'groups' => [
            'parent'     => 'Pai',
            'creator'    => 'Creator',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'filters' => [
            'parent'  => 'Pai',
            'creator' => 'Creator',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Categoria excluído',
                        'body'  => 'A Categoria foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Categoria could não be excluído',
                        'body'  => 'The categoria cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Categorias excluído',
                        'body'  => 'O Categorias foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Categorias could não be excluído',
                        'body'  => 'The categorias cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Informações gerais',

                'entries' => [
                    'name'        => 'Nome',
                    'parent'      => 'Pai Categoria',
                    'full_name'   => 'Full Categoria Nome',
                    'parent_path' => 'Categoria Path',
                ],
            ],

            'record-information' => [
                'title' => 'Record Information',

                'entries' => [
                    'creator'    => 'Criado por',
                    'created_at' => 'Criado em',
                    'updated_at' => 'Último Atualizado em',
                ],
            ],
        ],
    ],
];
