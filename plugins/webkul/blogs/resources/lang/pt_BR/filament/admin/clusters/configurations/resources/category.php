<?php

return [
    'navigation' => [
        'title' => 'Categorias',
        'group' => 'Blog',
    ],

    'form' => [
        'fields' => [
            'name'             => 'Nome',
            'name-placeholder' => 'Categoria título ...',
            'sub-title'        => 'Sub Título',
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'nome',
            'sub-title'  => 'Sub Título',
            'posts'      => 'Postagens',
            'created-at' => 'Criado em',
        ],

        'filters' => [
            'is-published' => 'Is Published',
            'author'       => 'Autor',
            'creator'      => 'Criado por',
            'category'     => 'Categoria',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Categoria atualizado',
                    'body'  => 'A Categoria foi atualizada com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Categoria restaurado',
                    'body'  => 'A Categoria foi restaurada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Categoria excluído',
                    'body'  => 'A Categoria foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Categoria excluído definitivamente',
                        'body'  => 'A Categoria foi excluído definitivamente com sucesso.',
                    ],
                    'error' => [
                        'title' => 'Categoria  could não be excluído',
                        'body'  => 'The Categoria  cannot be deleted because it is currently in use.',
                    ],
                ],
            ],

            'force-delete-error' => [
                'notification' => [
                    'title' => 'Cannot excluir categoria',
                    'body'  => 'You cannot excluir este categoria as it is associated com some postagens.',
                ],

                'exception' => 'You cannot excluir definitivamente este categoria as it is associated com some postagens.',
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Categorias restaurado',
                    'body'  => 'O Categorias foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Categorias excluído',
                    'body'  => 'O Categorias foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Categorias excluído definitivamente',
                    'body'  => 'O Categorias foi excluído definitivamente com sucesso.',
                ],
            ],

            'force-delete-error' => [
                'notification' => [
                    'title' => 'Cannot excluir categoria',
                    'body'  => 'You cannot excluir este categoria as it is associated com some postagens.',
                ],
            ],
        ],
    ],

    'infolist' => [
    ],
];
