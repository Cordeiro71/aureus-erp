<?php

return [
    'title' => 'Fatura',

    'navigation' => [
        'title' => 'Faturas',
        'group' => 'Faturas',
    ],

    'global-search' => [
        'customer' => 'Cliente',
        'date'     => 'Data',
        'due-date' => 'Data de vencimento',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => 'Geral',

                'fields' => [
                    'customer-invoice' => 'Cliente Fatura',
                    'customer'         => 'Cliente',
                    'invoice-date'     => 'Fatura Data',
                    'due-date'         => 'Data de vencimento',
                    'payment-term'     => 'Condição de pagamento',
                    'journal'          => 'Diário',
                    'currency'         => 'Moeda',
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
                            'discount-percentage' => 'Desconto',
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
                            'company'                 => 'Empresa',
                            'incoterm'                => 'Incoterm',
                            'incoterm-location'       => 'Incoterm Localização',
                            'fiscal-position'         => 'Posição fiscal',
                            'fiscal-position-tooltip' => 'Fiscal cargos are used para adapt impostos e contas baseado em the cliente localização.',
                            'cash-rounding'           => 'Cash Rounding Method',
                            'cash-rounding-tooltip'   => 'Specifies the smallest cash-payable unidade de the moeda.',
                            'payment-method'          => 'Forma de pagamento',
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
            'created-by'       => 'Criado por',
            'customer'         => 'Cliente',
            'invoice-date'     => 'Fatura Data',
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
            'invoice-currency' => 'Fatura Moeda',
        ],

        'summarizers' => [
            'total' => 'Total',
        ],

        'groups' => [
            'name'                         => 'Nome',
            'invoice-partner-display-name' => 'Fatura Parceiro Display Nome',
            'invoice-date'                 => 'Fatura Data',
            'checked'                      => 'Checked',
            'date'                         => 'Data',
            'invoice-due-date'             => 'Fatura Data de vencimento',
            'invoice-origin'               => 'Fatura Origem',
            'sales-person'                 => 'Vendas Person',
            'currency'                     => 'Moeda',
            'created-at'                   => 'Criado em',
            'updated-at'                   => 'Atualizado em',
        ],

        'filters' => [
            'number'                       => 'Number',
            'invoice-partner-display-name' => 'Fatura Parceiro Display Nome',
            'invoice-date'                 => 'Fatura Data',
            'invoice-due-date'             => 'Fatura Data de vencimento',
            'invoice-origin'               => 'Fatura Origem',
            'reference'                    => 'Referência',
            'payment-reference'            => 'Pagamento Referência',
            'narration'                    => 'Narration',
            'partner'                      => 'Parceiro',
            'journal'                      => 'Diário',
            'fiscal-position'              => 'Posição fiscal',
            'currency'                     => 'Moeda',
            'company'                      => 'Empresa',
            'date'                         => 'Data contábil',
            'delivery-date'                => 'Entrega Data',
            'amount-untaxed'               => 'Sem impostos Valor',
            'amount-tax'                   => 'Imposto Valor',
            'amount-total'                 => 'Total Valor',
            'amount-residual'              => 'Valor devido',
            'checked'                      => 'Checked',
            'posted-before'                => 'Lançado Antes',
            'is-move-sent'                 => 'Enviado',
            'created-at'                   => 'Criado em',
            'updated-at'                   => 'Atualizado em',
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
                    'customer-invoice' => 'Cliente Fatura',
                    'customer'         => 'Cliente',
                    'invoice-date'     => 'Fatura Data',
                    'due-date'         => 'Data de vencimento',
                    'payment-term'     => 'Condição de pagamento',
                    'journal'          => 'Diário',
                    'currency'         => 'Moeda',
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

                        'entries' => [
                            'company'           => 'Empresa',
                            'incoterm'          => 'Incoterm',
                            'incoterm-location' => 'Incoterm Localização',
                            'payment-method'    => 'Forma de pagamento',
                            'cash-rounding'     => 'Cash Rounding Method',
                            'fiscal-position'   => 'Posição fiscal',
                            'auto-post'         => 'Lançamento automático',
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
                        'currency' => 'Moeda',
                        'due-date' => 'Data de vencimento',
                        'taxes'    => 'Impostos',
                        'debit'    => 'Débito',
                        'credit'   => 'Crédito',
                    ],
                ],
            ],
        ],
    ],

];
