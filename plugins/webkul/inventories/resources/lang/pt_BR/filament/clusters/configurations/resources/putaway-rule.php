<?php

return [
    'navigation' => [
        'title' => 'Putaway Regras',
        'group' => 'Armazém Management',
    ],

    'form' => [
        'fields' => [
            'in-location'          => 'When Produto Arrives In',
            'product'              => 'Produto',
            'product-placeholder'  => 'Todos os produtos',
            'category'             => 'Produto Categoria',
            'category-placeholder' => 'Todas as categorias',
            'storage-category'     => 'Storage Categoria',
            'out-location'         => 'Store Para',
            'sub-location'         => 'Sub Localização',
            'company'              => 'Empresa',
        ],
    ],

    'table' => [
        'columns' => [
            'in-location'      => 'When Produto Arrives In',
            'product'          => 'Produto',
            'category'         => 'Produto Categoria',
            'storage-category' => 'Storage Categoria',
            'out-location'     => 'Store Para',
            'sub-location'     => 'Sub Localização',
            'company'          => 'Empresa',
            'deleted-at'       => 'Excluído em',
            'created-at'       => 'Criado em',
            'updated-at'       => 'Atualizado em',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Putaway regra atualizado',
                    'body'  => 'A Putaway regra foi atualizada com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Putaway regra restaurado',
                    'body'  => 'A Putaway regra foi restaurada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Putaway regra excluído',
                    'body'  => 'A Putaway regra foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'error' => [
                        'title' => 'Putaway regra could não be excluído',
                        'body'  => 'The putaway regra cannot be permanently deleted because it is referenced por outro records.',
                    ],

                    'success' => [
                        'title' => 'Putaway regra permanently excluído',
                        'body'  => 'A Putaway regra foi permanently deleted com sucesso.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Putaway regras restaurado',
                    'body'  => 'The putaway regras have been restored successfully.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Putaway regras excluído',
                    'body'  => 'The putaway regras have been deleted successfully.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'error' => [
                        'title' => 'Putaway regras could não be excluído',
                        'body'  => 'Some putaway regras cannot be permanently deleted because they are referenced por outro records.',
                    ],

                    'success' => [
                        'title' => 'Putaway regras permanently excluído',
                        'body'  => 'The putaway regras have been permanently deleted successfully.',
                    ],
                ],
            ],
        ],
    ],
];
