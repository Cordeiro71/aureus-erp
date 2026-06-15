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
                    'vendor-credit-note' => 'Fornecedor Nota de crédito',
                    'vendor'             => 'Fornecedor',
                    'bill-date'          => 'Data da conta',
                    'bill-reference'     => 'Referência da conta',
                    'accounting-date'    => 'Data contábil',
                    'payment-reference'  => 'Pagamento Referência',
                    'recipient-bank'     => 'Recipient Banco',
                    'due-date'           => 'Data de vencimento',
                    'payment-term'       => 'Condição de pagamento',
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
                    'accounting' => [
                        'title' => 'Contabilidade',

                        'fields' => [
                            'incoterm'          => 'Incoterm',
                            'incoterm-location' => 'Incoterm Localização',
                        ],
                    ],

                    'secured' => [
                        'title'  => 'Secured',
                        'fields' => [
                            'payment-method' => 'Forma de pagamento',
                            'auto-post'      => 'Lançamento automático',
                            'checked'        => 'Checked',
                        ],
                    ],

                    'additional-information' => [
                        'title'  => 'Informações adicionais',
                        'fields' => [
                            'company'  => 'Empresa',
                            'currency' => 'Moeda',
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
                    'vendor-invoice'    => 'Fornecedor Fatura',
                    'vendor'            => 'Fornecedor',
                    'bill-date'         => 'Data da conta',
                    'bill-reference'    => 'Referência da conta',
                    'accounting-date'   => 'Data contábil',
                    'payment-reference' => 'Pagamento Referência',
                    'recipient-bank'    => 'Recipient Banco',
                    'due-date'          => 'Data de vencimento',
                    'payment-term'      => 'Condição de pagamento',
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

                        'entries' => [
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
                    'accounting' => [
                        'title' => 'Contabilidade',

                        'entries' => [
                            'incoterm'          => 'Incoterm',
                            'incoterm-location' => 'Incoterm Localização',
                        ],
                    ],

                    'secured' => [
                        'title'   => 'Secured',
                        'entries' => [
                            'payment-method' => 'Forma de pagamento',
                            'auto-post'      => 'Lançamento automático',
                            'checked'        => 'Checked',
                        ],
                    ],

                    'additional-information' => [
                        'title'   => 'Informações adicionais',
                        'entries' => [
                            'company'  => 'Empresa',
                            'currency' => 'Moeda',
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
