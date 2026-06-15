<?php

return [
    'navigation' => [
        'title' => 'Rotas',
        'group' => 'Armazém Management',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Geral',

                'fields' => [
                    'route'             => 'Rota',
                    'route-placeholder' => 'eg. Two Step Reception',
                    'company'           => 'Empresa',
                ],
            ],

            'applicable-on' => [
                'title'       => 'Aplicável em',
                'description' => 'Choose the localizações where este rota can be applied.',

                'fields' => [
                    'products'                        => 'Produtos',
                    'products-hint-tooltip'           => 'If selected, este rota will be disponível para seleção ligado the produto.',
                    'product-categories'              => 'Produto Categorias',
                    'product-categories-hint-tooltip' => 'If selected, este rota will be disponível para seleção ligado the produto categoria.',
                    'warehouses'                      => 'Armazéns',
                    'warehouses-hint-tooltip'         => 'When a armazém is atribuído a este rota, it will be considered the padrão rota para produtos moving through aquele armazém.',
                    'packaging'                       => 'Embalagem',
                    'packaging-hint-tooltip'          => 'If selected, este rota will be disponível para seleção ligado the embalagem.',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'route'      => 'Rota',
            'company'    => 'Empresa',
            'deleted-at' => 'Excluído em',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'groups' => [
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'filters' => [
            'company'  => 'Empresa',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Rota atualizado',
                    'body'  => 'A Rota foi atualizada com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Rota restaurado',
                    'body'  => 'A Rota foi restaurada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Rota excluído',
                    'body'  => 'A Rota foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Rota excluído definitivamente',
                        'body'  => 'A Rota foi excluído definitivamente com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Rota could não be excluído',
                        'body'  => 'The rota cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Rotas restaurado',
                    'body'  => 'O Rotas foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Rotas excluído',
                    'body'  => 'O Rotas foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Rotas excluído definitivamente',
                        'body'  => 'O Rotas foi excluído definitivamente com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Rotas could não be excluído',
                        'body'  => 'The rotas cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'  => 'Geral',

                'entries' => [
                    'route'             => 'Rota',
                    'route-placeholder' => 'eg. Two Step Reception',
                    'company'           => 'Empresa',
                ],
            ],

            'applicable-on' => [
                'title'       => 'Aplicável em',
                'description' => 'Selecionar the places where este rota can be selected.',

                'entries' => [
                    'products'                        => 'Produtos',
                    'products-hint-tooltip'           => 'If selected, este rota will be disponível para seleção ligado the produto.',
                    'product-categories'              => 'Produto Categorias',
                    'product-categories-hint-tooltip' => 'If selected, este rota will be disponível para seleção ligado the produto categoria.',
                    'warehouses'                      => 'Armazéns',
                    'warehouses-hint-tooltip'         => 'When a armazém is atribuído a este rota, it will be considered the padrão rota para produtos moving through aquele armazém.',
                    'packaging'                       => 'Embalagem',
                    'packaging-hint-tooltip'          => 'If selected, este rota will be disponível para seleção ligado the embalagem.',
                ],
            ],

            'record-information' => [
                'title' => 'Record Information',

                'entries' => [
                    'created-by'   => 'Criado por',
                    'created-at'   => 'Criado em',
                    'last-updated' => 'Último atualizado',
                ],
            ],
        ],
    ],
];
