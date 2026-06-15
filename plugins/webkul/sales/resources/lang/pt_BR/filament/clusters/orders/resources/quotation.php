<?php

return [
    'title' => 'Cotação',

    'navigation' => [
        'title' => 'Cotações',
    ],

    'global-search' => [
        'customer'  => 'Cliente',
        'reference' => 'Referência',
        'amount'    => 'Valor',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => 'Geral',
                'fields' => [
                    'customer'       => 'Cliente',
                    'expiration'     => 'Expiration',
                    'quotation-date' => 'Cotação Data',
                    'order-date'     => 'Pedido Data',
                    'payment-term'   => 'Condição de pagamento',
                ],
            ],
        ],

        'tabs' => [
            'order-line' => [
                'title' => 'Linha do pedido',

                'repeater' => [
                    'products' => [
                        'title'       => 'Produtos',
                        'add-product' => 'Adicionar produto',

                        'columns'     => [
                            'product'                    => 'Produto',
                            'product-variants'           => 'Produto Variantes',
                            'product-simple'             => 'Produto Simple',
                            'quantity'                   => 'Quantidade',
                            'insufficient-stock-tooltip' => 'Insufficient estoque para fulfill este demand.',
                            'uom'                        => 'UOM',
                            'lead-time'                  => 'Lead Hora',
                            'qty-delivered'              => 'Entregue',
                            'qty-invoiced'               => 'Faturado',
                            'packaging-qty'              => 'Embalagem Quantidade',
                            'packaging'                  => 'Embalagem',
                            'unit-price'                 => 'Unidade Preço',
                            'cost'                       => 'Custo',
                            'margin'                     => 'Margem',
                            'taxes'                      => 'Impostos',
                            'amount'                     => 'Valor',
                            'margin-percentage'          => 'Margem (%)',
                            'discount-percentage'        => 'Desconto (%)',
                        ],

                        'fields'      => [
                            'product'             => 'Produto',
                            'product-variants'    => 'Produto Variantes',
                            'product-simple'      => 'Produto Simple',
                            'quantity'            => 'Quantidade',
                            'uom'                 => 'Unidade de medida',
                            'lead-time'           => 'Lead Hora',
                            'qty-delivered'       => 'Quantidade Entregue',
                            'qty-invoiced'        => 'Quantidade Faturado',
                            'packaging-qty'       => 'Embalagem Quantidade',
                            'packaging'           => 'Embalagem',
                            'unit-price'          => 'Unidade Preço',
                            'cost'                => 'Custo',
                            'margin'              => 'Margem',
                            'taxes'               => 'Impostos',
                            'amount'              => 'Valor',
                            'margin-percentage'   => 'Margem (%)',
                            'discount-percentage' => 'Desconto (%)',
                        ],

                        'notifications' => [
                            'quantity-below-delivered' => [
                                'title' => 'Cannot Reduce Quantidade',
                                'body'  => 'You cannot reduce the quantidade below the entregue quantidade (:qty).',
                            ],
                        ],

                        'delete-action' => [
                            'error' => [
                                'title' => 'Cannot Excluir Produto',
                                'body'  => 'Produtos cannot be deleted de a confirmado pedido de venda.',
                            ],
                        ],
                    ],

                    'product-optional' => [
                        'title'       => 'Opcional Produtos',
                        'add-product' => 'Adicionar produto',

                        'columns' => [
                            'product'             => 'Produto',
                            'description'         => 'Descrição',
                            'quantity'            => 'Quantidade',
                            'uom'                 => 'Unidade de medida',
                            'unit-price'          => 'Unidade Preço',
                            'discount-percentage' => 'Desconto (%)',
                        ],

                        'fields'      => [
                            'product'             => 'Produto',
                            'description'         => 'Descrição',
                            'quantity'            => 'Quantidade',
                            'uom'                 => 'Unidade de medida',
                            'unit-price'          => 'Unidade Preço',
                            'discount-percentage' => 'Desconto (%)',

                            'actions' => [
                                'tooltip' => [
                                    'add-order-line' => 'Adicionar linha do pedido',
                                ],

                                'notifications' => [
                                    'product-added' => [
                                        'title' => 'Produto added',
                                        'body'  => 'O Produto foi added com sucesso.',
                                    ],

                                    'product-not-found' => [
                                        'title' => 'Produto Não Found',
                                    ],

                                    'product-already-exists' => [
                                        'title' => 'Produto Already Exists',
                                        'body'  => 'Este produto is already in the linhas do pedido. Please atualizar the existing linha instead.',
                                    ],

                                    'missing-product-data' => [
                                        'title' => 'Missing Produto Data',
                                        'body'  => 'Unable para process the selected produto.',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'other-information' => [
                'title' => 'Outro Information',

                'fieldset' => [
                    'sales' => [
                        'title' => 'Vendas',

                        'fields' => [
                            'sales-person'       => 'Vendas Person',
                            'customer-reference' => 'Cliente Referência',
                            'tags'               => 'Etiquetas',
                        ],
                    ],

                    'shipping' => [
                        'title'  => 'Shipping',
                        'fields' => [
                            'warehouse'       => 'Armazém',
                            'commitment-date' => 'Entrega Data',
                        ],
                    ],

                    'tracking' => [
                        'title'  => 'Tracking',
                        'fields' => [
                            'source-document' => 'Origem Document',
                            'medium'          => 'Médio',
                            'source'          => 'Origem',
                            'campaign'        => 'Campaign',
                        ],
                    ],

                    'additional-information' => [
                        'title' => 'Informações adicionais',

                        'fields' => [
                            'company'  => 'Empresa',
                            'currency' => 'Moeda',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => 'Terms & Conditions',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'number'             => 'Number',
            'status'             => 'Status',
            'delivery-status'    => 'Entrega Status',
            'invoice-status'     => 'Fatura Status',
            'creation-date'      => 'Creation Data',
            'commitment-date'    => 'Commitment Data',
            'expected-date'      => 'Expected Data',
            'customer'           => 'Cliente',
            'sales-person'       => 'Vendas Person',
            'sales-team'         => 'Vendas Equipe',
            'untaxed-amount'     => 'Sem impostos Valor',
            'amount-tax'         => 'Valor do imposto',
            'amount-total'       => 'Valor total',
            'customer-reference' => 'Cliente Referência',
        ],

        'filters' => [
            'sales-person'     => 'Vendas Person',
            'utm-source'       => 'UTM Origem',
            'company'          => 'Empresa',
            'customer'         => 'Cliente',
            'journal'          => 'Diário',
            'invoice-address'  => 'Fatura Endereço',
            'shipping-address' => 'Shipping Endereço',
            'fiscal-position'  => 'Posição fiscal',
            'payment-term'     => 'Condição de pagamento',
            'currency'         => 'Moeda',
            'created-at'       => 'Criado em',
            'updated-at'       => 'Atualizado em',
        ],

        'groups' => [
            'medium'          => 'Médio',
            'source'          => 'Origem',
            'team'            => 'Equipe',
            'sales-person'    => 'Vendas Person',
            'currency'        => 'Moeda',
            'company'         => 'Empresa',
            'customer'        => 'Cliente',
            'quotation-date'  => 'Cotação Data',
            'commitment-date' => 'Commitment Data',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Cotação restaurado',
                    'body'  => 'A Cotação foi restaurada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Cotação excluído',
                    'body'  => 'A Cotação foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Cotação excluído definitivamente',
                    'body'  => 'A Cotação foi excluído definitivamente com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Cotações restaurado',
                    'body'  => 'O Cotações foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Cotações excluído',
                    'body'  => 'O Cotações foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Cotações excluído definitivamente',
                    'body'  => 'O Cotações foi excluído definitivamente com sucesso.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'Cotações criado',
                    'body'  => 'O Cotações foi criado com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'section' => [
            'general' => [
                'title'   => 'Geral',
                'entries' => [
                    'sale-order'     => 'Pedido de venda',
                    'customer'       => 'Cliente',
                    'expiration'     => 'Expiration',
                    'quotation-date' => 'Cotação Data',
                    'payment-term'   => 'Condição de pagamento',
                ],
            ],
        ],

        'tabs' => [
            'order-line' => [
                'title' => 'Linha do pedido',

                'repeater' => [
                    'products' => [
                        'title'       => 'Produtos',
                        'add-product' => 'Adicionar produto',
                        'entries'     => [
                            'product'             => 'Produto',
                            'product-variants'    => 'Produto Variantes',
                            'product-simple'      => 'Produto Simple',
                            'quantity'            => 'Quantidade',
                            'qty-delivered'       => 'Entregue',
                            'qty-invoiced'        => 'Faturado',
                            'uom'                 => 'UOM',
                            'lead-time'           => 'Lead Hora',
                            'packaging-qty'       => 'Embalagem Quantidade',
                            'packaging'           => 'Embalagem',
                            'unit-price'          => 'Unidade Preço',
                            'cost'                => 'Custo',
                            'margin'              => 'Margem',
                            'taxes'               => 'Impostos',
                            'amount'              => 'Valor',
                            'margin-percentage'   => 'Margem (%)',
                            'discount-percentage' => 'Desconto (%)',
                            'sub-total'           => 'Sub Total',
                        ],
                    ],

                    'product-optional' => [
                        'title'       => 'Opcional Produtos',
                        'add-product' => 'Adicionar produto',
                        'entries'     => [
                            'product'             => 'Produto',
                            'description'         => 'Descrição',
                            'quantity'            => 'Quantidade',
                            'uom'                 => 'Unidade de medida',
                            'unit-price'          => 'Unidade Preço',
                            'discount-percentage' => 'Desconto (%)',
                            'sub-total'           => 'Sub Total',

                            'actions' => [
                                'tooltip' => [
                                    'add-order-line' => 'Adicionar linha do pedido',
                                ],

                                'notifications' => [
                                    'product-added' => [
                                        'title' => 'Produto added',
                                        'body'  => 'O Produto foi added com sucesso.',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'other-information' => [
                'title' => 'Outro Information',

                'fieldset' => [
                    'sales' => [
                        'title' => 'Vendas',

                        'entries' => [
                            'sales-person'       => 'Vendas Person',
                            'customer-reference' => 'Cliente Referência',
                            'tags'               => 'Etiquetas',
                        ],
                    ],

                    'shipping' => [
                        'title'   => 'Shipping',
                        'entries' => [
                            'commitment-date' => 'Entrega Data',
                        ],
                    ],

                    'tracking' => [
                        'title'   => 'Tracking',
                        'entries' => [
                            'source-document' => 'Origem Document',
                            'medium'          => 'Médio',
                            'source'          => 'Origem',
                            'campaign'        => 'Campaign',
                        ],
                    ],

                    'additional-information' => [
                        'title' => 'Informações adicionais',

                        'entries' => [
                            'company'  => 'Empresa',
                            'currency' => 'Moeda',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => 'Terms & Conditions',
            ],
        ],
    ],
];
