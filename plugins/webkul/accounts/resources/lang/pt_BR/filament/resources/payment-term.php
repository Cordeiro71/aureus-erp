<?php

return [
    'form' => [
        'sections' => [
            'fields' => [
                'payment-term'         => 'Condição de pagamento',
                'early-discount'       => 'Early Desconto',
                'discount-days-prefix' => 'if pago within',
                'discount-days-suffix' => 'dias',
                'reduced-tax'          => 'Reduced imposto',
                'note'                 => 'Nota',
                'status'               => 'Status',
            ],
        ],

        'tabs' => [
            'due-terms' => [
                'title' => 'Due Terms',

                'repeater' => [
                    'due-terms' => [
                        'fields' => [
                            'value'                  => 'Valor',
                            'due'                    => 'Due',
                            'delay-type'             => 'Delay Tipo',
                            'days-on-the-next-month' => 'Dias ligado the próximo mês',
                            'days'                   => 'Dias',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'payment-term' => 'Condição de pagamento',
            'company'      => 'Empresa',
            'created-at'   => 'Criado em',
            'updated-at'   => 'Atualizado em',
        ],

        'groups' => [
            'company-name'        => 'Empresa Nome',
            'discount-days'       => 'Desconto Dias',
            'early-pay-discount'  => 'Early Pay Desconto',
            'payment-term'        => 'Condição de pagamento',
            'display-on-invoice'  => 'Display ligado Fatura',
            'early-discount'      => 'Early Desconto',
            'discount-percentage' => 'Desconto Porcentagem',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Condição de pagamento restaurado',
                    'body'  => 'O Condição de pagamento foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Condição de pagamento excluído',
                    'body'  => 'O Condição de pagamento foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Condição de pagamento excluído definitivamente',
                        'body'  => 'O Condição de pagamento foi excluído definitivamente com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Condição de pagamento force deletion falhou',
                        'body'  => 'The condição de pagamento could não be excluído definitivamente because it is associated lançamentos contábeis.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Condições de pagamento restaurado',
                    'body'  => 'O Condições de pagamento foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Condições de pagamento excluído',
                    'body'  => 'O Condições de pagamento foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Condições de pagamento excluído definitivamente',
                        'body'  => 'O Condições de pagamento foi excluído definitivamente com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Condições de pagamento force deletion falhou',
                        'body'  => 'The condições de pagamento could não be excluído definitivamente because they have associated lançamentos contábeis.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'payment-term'         => 'Condição de pagamento',
                'early-discount'       => 'Early Desconto',
                'discount-percentage'  => 'Desconto Porcentagem',
                'discount-days-prefix' => 'if pago within',
                'discount-days-suffix' => 'dias',
                'reduced-tax'          => 'Reduced imposto',
                'note'                 => 'Nota',
                'status'               => 'Status',
            ],
        ],

        'tabs' => [
            'due-terms' => [
                'title' => 'Due Terms',

                'repeater' => [
                    'due-terms' => [
                        'entries' => [
                            'value'                  => 'Valor',
                            'due'                    => 'Due',
                            'delay-type'             => 'Delay Tipo',
                            'days-on-the-next-month' => 'Dias ligado the próximo mês',
                            'days'                   => 'Dias',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
