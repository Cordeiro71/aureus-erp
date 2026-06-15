<?php

return [
    'title' => 'Fatura',

    'navigation' => [
        'title' => 'Faturas',
        'group' => 'Faturas',
    ],

    'global-search' => [
        'vendor'   => 'Fornecedor',
        'date'     => 'Data',
        'due-date' => 'Data de vencimento',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => 'Geral',
                'fields' => [
                    'vendor-bill'       => 'Fornecedor Conta a pagar',
                    'vendor'            => 'Fornecedor',
                    'bill-date'         => 'Data da conta',
                    'bill-reference'    => 'Referência da conta',
                    'accounting-date'   => 'Data contábil',
                    'payment-reference' => 'Pagamento Referência',
                    'recipient-bank'    => 'Recipient Banco',
                    'due-date'          => 'Data de vencimento',
                    'payment-term'      => 'Condição de pagamento',
                    'journal'           => 'Diário',
                    'currency'          => 'Moeda',
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

                        'columns' => [
                            'product'             => 'Produto',
                            'quantity'            => 'Quantidade',
                            'unit'                => 'Unidade',
                            'taxes'               => 'Impostos',
                            'discount-percentage' => 'Desconto Porcentagem',
                            'unit-price'          => 'Unidade Preço',
                            'sub-total'           => 'Sub Total',
                        ],

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
                            'company'                 => 'Empresa',
                            'incoterm'                => 'Incoterm',
                            'incoterm-location'       => 'Incoterm Localização',
                            'payment-method'          => 'Forma de pagamento',
                            'fiscal-position'         => 'Posição fiscal',
                            'fiscal-position-tooltip' => 'Fiscal cargos are used para adapt impostos e contas baseado em the cliente localização.',
                            'cash-rounding'           => 'Cash Rounding Method',
                            'cash-rounding-tooltip'   => 'Specifies the smallest cash-payable unidade de the moeda.',
                            'auto-post'               => 'Lançamento automático',
                            'checked'                 => 'Checked',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => 'Term & Conditions',
            ],
        ],
    ],

    'table' => [
        'total'   => 'Total',
        'columns' => [
            'number'           => 'Number',
            'state'            => 'State',
            'customer'         => 'Cliente',
            'bill-date'        => 'Data da conta',
            'checked'          => 'Checked',
            'accounting-date'  => 'Contabilidade',
            'due-date'         => 'Data de vencimento',
            'source-document'  => 'Origem Document',
            'reference'        => 'Referência',
            'sales-person'     => 'Vendas Person',
            'tax-excluded'     => 'Imposto Excluded',
            'tax'              => 'Imposto',
            'total'            => 'Total',
            'amount-due'       => 'Valor devido',
            'bill-currency'    => 'Moeda da conta',
        ],

        'summarizers' => [
            'total' => 'Total',
        ],

        'groups' => [
            'name'                         => 'Nome',
            'bill-partner-display-name'    => 'Nome de exibição do parceiro da conta',
            'bill-date'                    => 'Data da conta',
            'checked'                      => 'Checked',
            'date'                         => 'Data',
            'bill-due-date'                => 'Data de vencimento da conta',
            'bill-origin'                  => 'Origem da conta',
            'sales-person'                 => 'Vendas Person',
            'currency'                     => 'Moeda',
            'created-at'                   => 'Criado em',
            'updated-at'                   => 'Atualizado em',
        ],

        'filters' => [
            'number'                    => 'Number',
            'bill-partner-display-name' => 'Nome de exibição do parceiro da conta',
            'bill-date'                 => 'Data da conta',
            'bill-due-date'             => 'Data de vencimento da conta',
            'bill-origin'               => 'Origem da conta',
            'reference'                 => 'Referência',
            'payment-reference'         => 'Pagamento Referência',
            'narration'                 => 'Narration',
            'partner'                   => 'Parceiro',
            'journal'                   => 'Diário',
            'fiscal-position'           => 'Posição fiscal',
            'currency'                  => 'Moeda',
            'company'                   => 'Empresa',
            'date'                      => 'Data contábil',
            'delivery-date'             => 'Entrega Data',
            'amount-untaxed'            => 'Sem impostos Valor',
            'amount-tax'                => 'Imposto Valor',
            'amount-total'              => 'Total Valor',
            'amount-residual'           => 'Valor devido',
            'checked'                   => 'Checked',
            'posted-before'             => 'Lançado Antes',
            'is-move-sent'              => 'Enviado',
            'created-at'                => 'Criado em',
            'updated-at'                => 'Atualizado em',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Pagamento excluído',
                    'body'  => 'O Pagamento foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Pagamentos excluído',
                    'body'  => 'O Pagamentos foi excluído com sucesso.',
                ],
            ],
        ],

        'toolbar-actions' => [
            'export' => [
                'label' => 'Exportar',
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
                    'journal'           => 'Diário',
                    'currency'          => 'Moeda',
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
                            'company'           => 'Empresa',
                            'incoterm'          => 'Incoterm',
                            'incoterm-location' => 'Incoterm Localização',
                            'payment-method'    => 'Forma de pagamento',
                            'checked'           => 'Checked',
                            'fiscal-position'   => 'Posição fiscal',
                            'cash-rounding'     => 'Cash Rounding Method',
                            'checked'           => 'Checked',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => 'Term & Conditions',
            ],

            'journal-items' => [
                'title' => 'Diário Itens',

                'repeater' => [
                    'entries' => [
                        'account'  => 'Conta',
                        'partner'  => 'Parceiro',
                        'label'    => 'Rótulo',
                        'due-date' => 'Data de vencimento',
                        'currency' => 'Moeda',
                        'taxes'    => 'Impostos',
                        'debit'    => 'Débito',
                        'credit'   => 'Crédito',
                    ],
                ],
            ],
        ],
    ],
];
