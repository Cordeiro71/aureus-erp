<?php

return [
    'title' => 'Fatura',

    'navigation' => [
        'title' => 'Faturas',
        'group' => 'Faturas',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => 'Geral',
                'fields' => [
                    'customer-invoice' => 'Cliente Nota de crédito',
                    'customer'         => 'Cliente',
                    'invoice-date'     => 'Fatura Data',
                    'due-date'         => 'Data de vencimento',
                    'payment-term'     => 'Condição de pagamento',
                ],
            ],
        ],

        'tabs' => [
            'invoice-lines' => [
                'title' => 'Fatura Linhas',

                'repeater' => [
                    'products' => [
                        'title'       => 'Produtos',
                        'add-product' => 'Adicionar produto',

                        'fields' => [
                            'product'             => 'Produto',
                            'quantity'            => 'Quantidade',
                            'unit'                => 'Unidade',
                            'taxes'               => 'Impostos',
                            'discount-percentage' => 'Desconto Porcentagem',
                            'unit-price'          => 'Unidade Preço',
                            'sub-total'           => 'Sub Total',
                        ],
                    ],
                ],
            ],

            'other-information' => [
                'title'    => 'Outro Information',
                'fieldset' => [
                    'invoice' => [
                        'title'  => 'Fatura',
                        'fields' => [
                            'customer-reference' => 'Cliente Referência',
                            'sales-person'       => 'Vendas Person',
                            'payment-reference'  => 'Pagamento Referência',
                            'recipient-bank'     => 'Recipient Banco',
                            'delivery-date'      => 'Entrega Data',
                        ],
                    ],

                    'accounting' => [
                        'title' => 'Contabilidade',

                        'fields' => [
                            'incoterm'          => 'Incoterm',
                            'incoterm-location' => 'Incoterm Localização',
                            'payment-method'    => 'Forma de pagamento',
                            'auto-post'         => 'Lançamento automático',
                            'checked'           => 'Checked',
                        ],
                    ],

                    'additional-information' => [
                        'title'  => 'Informações adicionais',
                        'fields' => [
                            'company'  => 'Empresa',
                            'currency' => 'Moeda',
                        ],
                    ],

                    'marketing' => [
                        'title'  => 'Marketing',
                        'fields' => [
                            'campaign' => 'Campaign',
                            'medium'   => 'Médio',
                            'source'   => 'Origem',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => 'Term & Conditions',
            ],
        ],
    ],

    'infolist' => [
        'section' => [
            'general' => [
                'title'   => 'Geral',
                'entries' => [
                    'customer-invoice' => 'Cliente Nota de crédito',
                    'customer'         => 'Cliente',
                    'invoice-date'     => 'Fatura Data',
                    'due-date'         => 'Data de vencimento',
                    'payment-term'     => 'Condição de pagamento',
                ],
            ],
        ],

        'tabs' => [
            'invoice-lines' => [
                'title' => 'Fatura Linhas',

                'repeater' => [
                    'products' => [
                        'entries' => [
                            'product'             => 'Produto',
                            'quantity'            => 'Quantidade',
                            'unit'                => 'Unidade de medida',
                            'taxes'               => 'Impostos',
                            'discount-percentage' => 'Desconto Porcentagem',
                            'unit-price'          => 'Unidade Preço',
                            'sub-total'           => 'Sub Total',
                            'total'               => 'Total',
                        ],
                    ],
                ],
            ],

            'other-information' => [
                'title'    => 'Outro Information',
                'fieldset' => [
                    'invoice' => [
                        'title'   => 'Fatura',
                        'entries' => [
                            'customer-reference' => 'Cliente Referência',
                            'sales-person'       => 'Vendas Person',
                            'payment-reference'  => 'Pagamento Referência',
                            'recipient-bank'     => 'Recipient Banco',
                            'delivery-date'      => 'Entrega Data',
                        ],
                    ],

                    'accounting' => [
                        'title' => 'Contabilidade',

                        'fieldset' => [
                            'incoterm'          => 'Incoterm',
                            'incoterm-location' => 'Incoterm Localização',
                            'payment-method'    => 'Forma de pagamento',
                            'auto-post'         => 'Lançamento automático',
                            'checked'           => 'Checked',
                        ],
                    ],

                    'additional-information' => [
                        'title'   => 'Informações adicionais',
                        'entries' => [
                            'company'  => 'Empresa',
                            'currency' => 'Moeda',
                        ],
                    ],

                    'marketing' => [
                        'title'   => 'Marketing',
                        'entries' => [
                            'campaign' => 'Campaign',
                            'medium'   => 'Médio',
                            'source'   => 'Origem',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => 'Term & Conditions',
            ],
        ],
    ],
];
