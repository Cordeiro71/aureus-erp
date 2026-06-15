<?php

return [
    'navigation' => [
        'title' => 'Produtos',
        'group' => 'Estoque',
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
                    'sales'            => 'Vendas',
                    'purchase'         => 'Compra',
                ],
            ],

            'invoice-policy' => [
                'title'            => 'Fatura Policy',
                'ordered-policy'   => 'You can fatura goods antes they are entregue.',
                'delivered-policy' => 'Fatura depois entrega, baseado em quantidades entregue, não ordered.',
            ],

            'images' => [
                'title' => 'Images',
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

            'category-and-tags' => [
                'title' => 'Categoria & Etiquetas',

                'fields' => [
                    'category' => 'Categoria',
                    'tags'     => 'Etiquetas',
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
            'name'        => 'Nome',
            'images'      => 'Images',
            'type'        => 'Tipo',
            'reference'   => 'Referência',
            'responsible' => 'Responsible',
            'barcode'     => 'Código de barras',
            'category'    => 'Categoria',
            'company'     => 'Empresa',
            'price'       => 'Preço',
            'cost'        => 'Custo',
            'tags'        => 'Etiquetas',
            'deleted-at'  => 'Excluído em',
            'created-at'  => 'Criado em',
            'updated-at'  => 'Atualizado em',
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
                    'title' => 'Produto excluído definitivamente',
                    'body'  => 'O Produto foi excluído definitivamente com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
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
                    'title' => 'Produtos excluído definitivamente',
                    'body'  => 'O Produtos foi excluído definitivamente com sucesso.',
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

                'entries' => [],

                'fieldsets' => [
                    'tracking' => [
                        'title' => 'Tracking',

                        'entries' => [
                            'track-inventory' => 'Track Estoque',
                            'track-by'        => 'Track Por',
                            'expiration-date' => 'Data de expiração',
                        ],
                    ],

                    'operation' => [
                        'title' => 'Operações',

                        'entries' => [
                            'routes' => 'Rotas',
                        ],
                    ],

                    'logistics' => [
                        'title' => 'Logistics',

                        'entries' => [
                            'responsible' => 'Responsible',
                            'weight'      => 'Peso',
                            'volume'      => 'Volume',
                            'sale-delay'  => 'Cliente Lead Hora (Dias)',
                        ],
                    ],

                    'traceability' => [
                        'title' => 'Traceability',

                        'entries' => [
                            'expiration-date'  => 'Data de expiração (Dias)',
                            'best-before-date' => 'Válido até (Dias)',
                            'removal-date'     => 'Removal Data (Dias)',
                            'alert-date'       => 'Alerta Data (Dias)',
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
