<?php

return [
    'title' => 'Lançamentos contábeis',

    'navigation' => [
        'title' => 'Lançamentos contábeis',
    ],

    'record-sub-navigation' => [
        'payment' => 'Pagamento',
    ],

    'global-search' => [
        'number'   => 'Number',
        'partner'  => 'Parceiro',
        'date'     => 'Fatura Data',
        'due-date' => 'Fatura Data de vencimento',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => 'Geral',

                'fields' => [
                    'reference'       => 'Referência',
                    'accounting-date' => 'Data contábil',
                    'journal'         => 'Diário',
                ],
            ],
        ],

        'tabs' => [
            'lines' => [
                'title' => 'Diário Itens',

                'repeater' => [
                    'title'       => 'Itens',
                    'add-item'    => 'Adicionar item',

                    'columns' => [
                        'account'                  => 'Conta',
                        'partner'                  => 'Parceiro',
                        'label'                    => 'Rótulo',
                        'amount-currency'          => 'Valor (moeda)',
                        'currency'                 => 'Moeda',
                        'taxes'                    => 'Impostos',
                        'debit'                    => 'Débito',
                        'credit'                   => 'Crédito',
                        'discount-amount-currency' => 'Desconto Valor (Moeda)',
                    ],

                    'fields' => [
                        'account'                  => 'Conta',
                        'partner'                  => 'Parceiro',
                        'label'                    => 'Rótulo',
                        'amount-currency'          => 'Valor (moeda)',
                        'currency'                 => 'Moeda',
                        'taxes'                    => 'Impostos',
                        'debit'                    => 'Débito',
                        'credit'                   => 'Crédito',
                        'discount-amount-currency' => 'Desconto Valor (Moeda)',
                    ],
                ],
            ],

            'other-information' => [
                'title'    => 'Outro Information',

                'fields' => [
                    'checked'         => 'Checked',
                    'company'         => 'Empresa',
                    'fiscal-position' => 'Posição fiscal',
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
            'invoice-date' => 'Fatura Data',
            'date'         => 'Data',
            'number'       => 'Number',
            'partner'      => 'Parceiro',
            'reference'    => 'Referência',
            'journal'      => 'Diário',
            'company'      => 'Empresa',
            'total'        => 'Total',
            'state'        => 'State',
            'checked'      => 'Checked',
        ],

        'summarizers' => [
            'total' => 'Total',
        ],

        'groups' => [
            'partner'        => 'Parceiro',
            'journal'        => 'Diário',
            'state'          => 'State',
            'payment-method' => 'Forma de pagamento',
            'date'           => 'Data',
            'invoice-date'   => 'Fatura Data',
            'company'        => 'Empresa',
        ],

        'filters' => [
            'number'                       => 'Number',
            'invoice-partner-display-name' => 'Fatura Parceiro Display Nome',
            'invoice-date'                 => 'Fatura Data',
            'invoice-due-date'             => 'Fatura Data de vencimento',
            'invoice-origin'               => 'Fatura Origem',
            'reference'                    => 'Referência',
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
                    'number'          => 'Number',
                    'reference'       => 'Referência',
                    'accounting-date' => 'Data contábil',
                    'journal'         => 'Diário',
                ],
            ],
        ],

        'tabs' => [
            'lines' => [
                'title' => 'Diário Itens',

                'repeater' => [
                    'entries' => [
                        'account'  => 'Conta',
                        'partner'  => 'Parceiro',
                        'label'    => 'Rótulo',
                        'currency' => 'Moeda',
                        'taxes'    => 'Impostos',
                        'debit'    => 'Débito',
                        'credit'   => 'Crédito',
                    ],
                ],
            ],

            'other-information' => [
                'title' => 'Outro Information',

                'fieldset' => [
                    'accounting' => [
                        'title' => 'Contabilidade',

                        'entries' => [
                            'company'         => 'Empresa',
                            'fiscal-position' => 'Posição fiscal',
                            'checked'         => 'Checked',
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
