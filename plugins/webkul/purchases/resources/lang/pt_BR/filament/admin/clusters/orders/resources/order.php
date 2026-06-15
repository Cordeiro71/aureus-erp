<?php

return [
    'global-search' => [
        'vendor'    => 'Fornecedor',
        'reference' => 'Referência',
        'amount'    => 'Valor',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Geral',

                'fields' => [
                    'vendor'                   => 'Fornecedor',
                    'vendor-reference'         => 'Fornecedor Referência',
                    'vendor-reference-tooltip' => 'The reference number of the sales order or bid provided by the vendor. It is used for matching when receiving products, as this reference is typically included in the vendor\'The referência number de the pedido de venda ou bid provided por the fornecedor. It is used para matching when receiving produtos, as este referência is typically included in the fornecedor\'s entrega pedido.',
                    'agreement'                => 'Agreement',
                    'currency'                 => 'Moeda',
                    'confirmation-date'        => 'Confirmation Data',
                    'order-deadline'           => 'Pedido Prazo',
                    'expected-arrival'         => 'Expected Arrival',
                    'confirmed-by-vendor'      => 'Confirmado por Fornecedor',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'Produtos',

                'repeater' => [
                    'products' => [
                        'title'            => 'Produtos',
                        'add-product-line' => 'Adicionar produto',

                        'fields' => [
                            'product'             => 'Produto',
                            'expected-arrival'    => 'Expected Arrival',
                            'quantity'            => 'Quantidade',
                            'received'            => 'Recebido',
                            'billed'              => 'Faturado',
                            'unit'                => 'Unidade',
                            'packaging-qty'       => 'Embalagem Qty',
                            'packaging'           => 'Embalagem',
                            'taxes'               => 'Impostos',
                            'discount-percentage' => 'Desconto (%)',
                            'unit-price'          => 'Unidade Preço',
                            'amount'              => 'Valor',
                        ],

                        'notifications' => [
                            'quantity-below-received' => [
                                'title' => 'Cannot Reduce Quantidade',
                                'body'  => 'You cannot reduce the quantidade below the recebido quantidade (:qty).',
                            ],

                            'blanket-order-qty-limit' => [
                                'title' => 'Quantidade Exceeds Ordem aberta Limite',
                                'body'  => 'The produto quantidade (:product_qty) exceeds the quantidade disponível (:available_qty) de the ordem aberta.',
                            ],
                        ],

                        'columns' => [
                            'product'             => 'Produto',
                            'expected-arrival'    => 'Expected Arrival',
                            'quantity'            => 'Quantidade',
                            'received'            => 'Recebido',
                            'billed'              => 'Faturado',
                            'unit'                => 'Unidade',
                            'packaging-qty'       => 'Embalagem Qty',
                            'packaging'           => 'Embalagem',
                            'taxes'               => 'Impostos',
                            'discount-percentage' => 'Desconto (%)',
                            'unit-price'          => 'Unidade Preço',
                            'amount'              => 'Valor',
                        ],

                        'delete-action' => [
                            'error' => [
                                'title' => 'Cannot Excluir Produto',
                                'body'  => 'Produtos cannot be deleted de a confirmado pedido de compra.',
                            ],
                        ],
                    ],

                    'section' => [
                        'title' => 'Adicionar seção',

                        'fields' => [],
                    ],

                    'note' => [
                        'title' => 'Adicionar nota',

                        'fields' => [],
                    ],
                ],
            ],

            'additional' => [
                'title' => 'Informações adicionais',

                'fields' => [
                    'buyer'             => 'Buyer',
                    'company'           => 'Empresa',
                    'source-document'   => 'Origem Document',
                    'incoterm'          => 'Incoterm',
                    'incoterm-tooltip'  => 'International Commercial Terms (Incoterms) are a set de standardized trade terms used in global transactions para define responsibilities entre buyers e sellers.',
                    'incoterm-location' => 'Incoterm Localização',
                    'payment-term'      => 'Condição de pagamento',
                    'fiscal-position'   => 'Posição fiscal',
                ],
            ],

            'terms' => [
                'title' => 'Terms e Conditions',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'favorite'         => 'Favorito',
            'priority'         => 'Prioridade',
            'vendor-reference' => 'Fornecedor Referência',
            'reference'        => 'Referência',
            'vendor'           => 'Fornecedor',
            'buyer'            => 'Buyer',
            'company'          => 'Empresa',
            'order-deadline'   => 'Pedido Prazo',
            'source-document'  => 'Origem Document',
            'untaxed-amount'   => 'Sem impostos Valor',
            'total-amount'     => 'Total Valor',
            'status'           => 'Status',
            'billing-status'   => 'Status do faturamento',
            'receipt-status'   => 'Recibo Status',
            'currency'         => 'Moeda',
        ],

        'groups' => [
            'vendor'     => 'Fornecedor',
            'buyer'      => 'Buyer',
            'state'      => 'State',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'filters' => [
            'status'           => 'Status',
            'vendor-reference' => 'Fornecedor Referência',
            'reference'        => 'Referência',
            'untaxed-amount'   => 'Sem impostos Valor',
            'total-amount'     => 'Total Valor',
            'order-deadline'   => 'Pedido Prazo',
            'vendor'           => 'Fornecedor',
            'buyer'            => 'Buyer',
            'company'          => 'Empresa',
            'payment-term'     => 'Condição de pagamento',
            'incoterm'         => 'Incoterm',
            'status'           => 'Status',
            'created-at'       => 'Criado em',
            'updated-at'       => 'Atualizado em',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Pedido excluído',
                        'body'  => 'O Pedido foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Pedido could não be excluído',
                        'body'  => 'The pedido cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Pedidos excluído',
                        'body'  => 'O Pedidos foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Pedidos could não be excluído',
                        'body'  => 'The pedidos cannot be deleted because they are currently in use.',
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
                    'purchase-order'           => 'Pedido de compra',
                    'vendor'                   => 'Fornecedor',
                    'vendor-reference'         => 'Fornecedor Referência',
                    'vendor-reference-tooltip' => 'The reference number of the sales order or bid provided by the vendor. It is used for matching when receiving products, as this reference is typically included in the vendor\'The referência number de the pedido de venda ou bid provided por the fornecedor. It is used para matching when receiving produtos, as este referência is typically included in the fornecedor\'s entrega pedido.',
                    'agreement'                => 'Agreement',
                    'currency'                 => 'Moeda',
                    'confirmation-date'        => 'Confirmation Data',
                    'order-deadline'           => 'Pedido Prazo',
                    'expected-arrival'         => 'Expected Arrival',
                    'confirmed-by-vendor'      => 'Confirmado por Fornecedor',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'Produtos',

                'repeater' => [
                    'products' => [
                        'title'            => 'Produtos',
                        'add-product-line' => 'Adicionar produto',

                        'entries' => [
                            'product'             => 'Produto',
                            'expected-arrival'    => 'Expected Arrival',
                            'quantity'            => 'Quantidade',
                            'received'            => 'Recebido',
                            'billed'              => 'Faturado',
                            'unit'                => 'Unidade',
                            'packaging-qty'       => 'Embalagem Qty',
                            'packaging'           => 'Embalagem',
                            'taxes'               => 'Impostos',
                            'discount-percentage' => 'Desconto (%)',
                            'unit-price'          => 'Unidade Preço',
                            'amount'              => 'Valor',
                        ],
                    ],

                    'section' => [
                        'title' => 'Adicionar seção',
                    ],

                    'note' => [
                        'title' => 'Adicionar nota',
                    ],
                ],
            ],

            'additional' => [
                'title' => 'Informações adicionais',

                'entries' => [
                    'buyer'             => 'Buyer',
                    'company'           => 'Empresa',
                    'source-document'   => 'Origem Document',
                    'incoterm'          => 'Incoterm',
                    'incoterm-tooltip'  => 'International Commercial Terms (Incoterms) are a set de standardized trade terms used in global transactions para define responsibilities entre buyers e sellers.',
                    'incoterm-location' => 'Incoterm Localização',
                    'payment-term'      => 'Condição de pagamento',
                    'fiscal-position'   => 'Posição fiscal',
                ],
            ],

            'terms' => [
                'title' => 'Terms e Conditions',
            ],
        ],
    ],
];
