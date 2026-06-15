<?php

return [
    'global-search' => [
        'reference' => 'Referência',
        'barcode'   => 'Código de barras',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Geral',

                'fields' => [
                    'name'             => 'Nome',
                    'name-placeholder' => 'eg. T-shirt',
                    'description'      => 'Descrição',
                    'tags'             => 'Etiquetas',
                ],
            ],

            'images' => [
                'title' => 'Images',
            ],

            'inventory' => [
                'title' => 'Estoque',

                'fields' => [],

                'fieldsets' => [
                    'logistics' => [
                        'title' => 'Logistics',

                        'fields' => [
                            'weight' => 'Peso',
                            'volume' => 'Volume',
                        ],
                    ],
                ],
            ],

            'settings' => [
                'title' => 'Configurações',

                'fields' => [
                    'type'      => 'Tipo',
                    'reference' => 'Referência',
                    'barcode'   => 'Código de barras',
                    'category'  => 'Categoria',
                    'company'   => 'Empresa',
                ],
            ],

            'pricing' => [
                'title' => 'Pricing',

                'fields' => [
                    'price' => 'Preço',
                    'cost'  => 'Custo',
                ],
            ],

            'additional' => [
                'title' => 'Adicional',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'favorite'        => 'Favorito',
            'name'            => 'Nome',
            'variants'        => 'Variantes',
            'images'          => 'Images',
            'type'            => 'Tipo',
            'reference'       => 'Referência',
            'responsible'     => 'Responsible',
            'barcode'         => 'Código de barras',
            'category'        => 'Categoria',
            'company'         => 'Empresa',
            'price'           => 'Preço',
            'cost'            => 'Custo',
            'on-hand'         => 'Disponível',
            'tags'            => 'Etiquetas',
            'deleted-at'      => 'Excluído em',
            'created-at'      => 'Criado em',
            'updated-at'      => 'Atualizado em',
        ],

        'groups' => [
            'type'       => 'Tipo',
            'category'   => 'Categoria',
            'created-at' => 'Criado em',
        ],

        'filters' => [
            'name'        => 'Nome',
            'type'        => 'Tipo',
            'reference'   => 'Referência',
            'barcode'     => 'Código de barras',
            'category'    => 'Categoria',
            'company'     => 'Empresa',
            'price'       => 'Preço',
            'cost'        => 'Custo',
            'is-favorite' => 'Is Favorito',
            'weight'      => 'Peso',
            'volume'      => 'Volume',
            'tags'        => 'Etiquetas',
            'responsible' => 'Responsible',
            'created-at'  => 'Criado em',
            'updated-at'  => 'Atualizado em',
            'creator'     => 'Creator',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Produto restaurado',
                    'body'  => 'O Produto foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Produto excluído',
                    'body'  => 'O Produto foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Produto excluído definitivamente',
                        'body'  => 'O Produto foi excluído definitivamente com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Produto could não be excluído',
                        'body'  => 'The produto cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print' => [
                'label' => 'Imprimir Labels',

                'form' => [
                    'fields' => [
                        'quantity' => 'Number de Labels',
                        'format'   => 'Format',

                        'format-options' => [
                            'dymo'       => 'Dymo',
                            '2x7_price'  => '2x7 com preço',
                            '4x7_price'  => '4x7 com preço',
                            '4x12'       => '4x12',
                            '4x12_price' => '4x12 com preço',
                        ],
                    ],
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Produtos restaurado',
                    'body'  => 'O Produtos foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Produtos excluído',
                    'body'  => 'O Produtos foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Produtos excluído definitivamente',
                        'body'  => 'O Produtos foi excluído definitivamente com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Produtos could não be excluído',
                        'body'  => 'The produtos cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Geral',

                'entries' => [
                    'name'             => 'Nome',
                    'name-placeholder' => 'eg. T-shirt',
                    'description'      => 'Descrição',
                    'tags'             => 'Etiquetas',
                ],
            ],

            'images' => [
                'title' => 'Images',

                'entries' => [],
            ],

            'settings' => [
                'title' => 'Configurações',

                'entries' => [
                    'type'      => 'Tipo',
                    'reference' => 'Referência',
                    'barcode'   => 'Código de barras',
                    'category'  => 'Categoria',
                    'company'   => 'Empresa',
                ],
            ],

            'pricing' => [
                'title' => 'Pricing',

                'entries' => [
                    'price' => 'Preço',
                    'cost'  => 'Custo',
                ],
            ],

            'inventory' => [
                'title' => 'Estoque',

                'fieldsets' => [
                    'logistics' => [
                        'title' => 'Logistics',

                        'entries' => [
                            'weight' => 'Peso',
                            'volume' => 'Volume',
                        ],
                    ],
                ],
            ],

            'record-information' => [
                'title' => 'Record Information',

                'entries' => [
                    'created-at' => 'Criado em',
                    'created-by' => 'Criado por',
                    'updated-at' => 'Atualizado em',
                ],
            ],
        ],
    ],
];
