<?php

return [
    'navigation' => [
        'title' => 'Compra Agreements',
        'group' => 'Compra',
    ],

    'global-search' => [
        'vendor' => 'Fornecedor',
        'type'   => 'Tipo',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Geral',

                'fields' => [
                    'vendor'                => 'Fornecedor',
                    'valid-from'            => 'Válido De',
                    'valid-to'              => 'Válido Until',
                    'buyer'                 => 'Buyer',
                    'reference'             => 'Referência',
                    'reference-placeholder' => 'eg. PO/123',
                    'agreement-type'        => 'Agreement Tipo',
                    'company'               => 'Empresa',
                    'currency'              => 'Moeda',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'Produtos',

                'columns' => [
                    'product'    => 'Produto',
                    'quantity'   => 'Quantidade',
                    'ordered'    => 'Ordered',
                    'uom'        => 'Unidade de medida',
                    'unit-price' => 'Unidade Preço',
                ],

                'fields' => [
                    'product'    => 'Produto',
                    'quantity'   => 'Quantidade',
                    'ordered'    => 'Ordered',
                    'uom'        => 'Unidade de medida',
                    'unit-price' => 'Unidade Preço',
                ],
            ],

            'additional' => [
                'title' => 'Informações adicionais',
            ],

            'terms' => [
                'title' => 'Terms e Conditions',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'agreement'      => 'Agreement',
            'vendor'         => 'Fornecedor',
            'agreement-type' => 'Agreement Tipo',
            'buyer'          => 'Buyer',
            'company'        => 'Empresa',
            'valid-from'     => 'Válido De',
            'valid-to'       => 'Válido Until',
            'reference'      => 'Referência',
            'status'         => 'Status',
        ],

        'groups' => [
            'agreement-type' => 'Agreement Tipo',
            'vendor'         => 'Fornecedor',
            'state'          => 'State',
            'created-at'     => 'Criado em',
            'updated-at'     => 'Atualizado em',
        ],

        'filters' => [
            'agreement'      => 'Agreement',
            'vendor'         => 'Fornecedor',
            'agreement-type' => 'Agreement Tipo',
            'buyer'          => 'Buyer',
            'company'        => 'Empresa',
            'valid-from'     => 'Válido De',
            'valid-to'       => 'Válido Until',
            'reference'      => 'Referência',
            'status'         => 'Status',
            'created-at'     => 'Criado em',
            'updated-at'     => 'Atualizado em',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Compra Agreement excluído',
                    'body'  => 'O Compra agreement foi excluído com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Compra Agreement restaurado',
                    'body'  => 'O Compra agreement foi restaurado com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Compra Agreement permanently excluído',
                        'body'  => 'O Compra agreement foi permanently deleted com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Compra Agreement could não be excluído',
                        'body'  => 'The The compra agreement cannot be deleted because it is currently in use.',
                    ],

                    'warning' => [
                        'title' => 'Compra Agreement cannot be excluído',
                        'body'  => 'Only compra agreements in Rascunho ou Cancelado state can be deleted.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Compra Agreements excluído',
                    'body'  => 'O Compra agreements foi excluído com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Compra Agreements restaurado',
                    'body'  => 'O Compra agreements foi restaurado com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Compra Agreements permanently excluído',
                        'body'  => 'O Compra agreements foi permanently deleted com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Compra Agreements could não be excluído',
                        'body'  => 'The compra agreements cannot be deleted because they are currently in use.',
                    ],

                    'warning' => [
                        'title' => 'Compra Agreement cannot be excluído',
                        'body'  => 'Only compra agreements in Rascunho ou Cancelado state can be deleted.',
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
                    'vendor'                => 'Fornecedor',
                    'valid-from'            => 'Válido De',
                    'valid-to'              => 'Válido Until',
                    'buyer'                 => 'Buyer',
                    'reference'             => 'Referência',
                    'reference-placeholder' => 'eg. PO/123',
                    'agreement-type'        => 'Agreement Tipo',
                    'company'               => 'Empresa',
                    'currency'              => 'Moeda',
                ],
            ],

            'metadata' => [
                'title' => 'Metadata',

                'entries' => [
                    'created-at' => 'Criado em',
                    'created-by' => 'Criado por',
                    'updated-at' => 'Atualizado em',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'Produtos',

                'entries' => [
                    'product'    => 'Produto',
                    'quantity'   => 'Quantidade',
                    'ordered'    => 'Ordered',
                    'uom'        => 'Unidade de medida',
                    'unit-price' => 'Unidade Preço',
                ],
            ],

            'additional' => [
                'title' => 'Informações adicionais',
            ],

            'terms' => [
                'title' => 'Terms e Conditions',
            ],
        ],
    ],
];
