<?php

return [
    'title' => 'Parceiros',

    'navigation' => [
        'title' => 'Parceiros',
    ],

    'form' => [
        'tabs' => [
            'sales-purchases' => [
                'fieldsets' => [
                    'sales' => [
                        'title' => 'Vendas',

                        'fields' => [
                            'sales-person'   => 'Vendas Person',
                            'payment-terms'  => 'Condições de pagamento',
                            'payment-method' => 'Forma de pagamento',
                        ],
                    ],

                    'purchase' => [
                        'title' => 'Compra',

                        'fields' => [
                            'payment-terms'  => 'Condições de pagamento',
                            'payment-method' => 'Forma de pagamento',
                        ],
                    ],

                    'fiscal-information' => [
                        'title' => 'Fiscal Information',

                        'fields' => [
                            'fiscal-position'    => 'Posição fiscal',
                        ],
                    ],
                ],
            ],

            'invoicing' => [
                'title'  => 'Invoicing',

                'fieldsets' => [
                    'customer-invoices' => [
                        'title' => 'Cliente Faturas',

                        'fields' => [
                            'invoice-sending-method'   => 'Fatura Sending Method',
                            'invoice-edi-format-store' => 'eInvoice Format',
                            'peppol-eas'               => 'Peppol Endereço',
                            'endpoint'                 => 'Endpoint',
                        ],
                    ],

                    'accounting-entries' => [
                        'title' => 'Lançamentos contábeis',

                        'fields' => [
                            'account-receivable' => 'Conta a receber',
                            'account-payable'    => 'Conta a pagar',
                        ],
                    ],

                    'automation' => [
                        'title' => 'Automação',

                        'fields' => [
                            'auto-post-bills'                => 'Lançar contas automaticamente',
                            'ignore-abnormal-invoice-amount' => 'Ignore Abnormal Fatura Valor',
                            'ignore-abnormal-invoice-date'   => 'Ignore Abnormal Fatura Data',
                        ],
                    ],
                ],
            ],

            'internal-notes' => [
                'title' => 'Interno Notas',
            ],
        ],
    ],

    'infolist' => [

        'tabs' => [
            'sales-purchases' => [
                'fieldsets' => [
                    'sales' => [
                        'title' => 'Vendas',

                        'entries' => [
                            'sales-person'   => 'Vendas Person',
                            'payment-terms'  => 'Condições de pagamento',
                            'payment-method' => 'Forma de pagamento',
                        ],
                    ],

                    'purchase' => [
                        'title' => 'Compra',

                        'entries' => [
                            'payment-terms'  => 'Condições de pagamento',
                            'payment-method' => 'Forma de pagamento',
                        ],
                    ],

                    'fiscal-information' => [
                        'title' => 'Fiscal Information',

                        'entries' => [
                            'fiscal-position'    => 'Posição fiscal',
                        ],
                    ],
                ],
            ],

            'invoicing' => [
                'title'  => 'Invoicing',

                'fieldsets' => [
                    'customer-invoices' => [
                        'title' => 'Cliente Faturas',

                        'entries' => [
                            'invoice-sending-method'   => 'Fatura Sending Method',
                            'invoice-edi-format-store' => 'eInvoice Format',
                            'peppol-eas'               => 'Peppol Endereço',
                            'endpoint'                 => 'Endpoint',
                        ],
                    ],

                    'accounting-entries' => [
                        'title' => 'Lançamentos contábeis',

                        'entries' => [
                            'account-receivable' => 'Conta a receber',
                            'account-payable'    => 'Conta a pagar',
                        ],
                    ],

                    'automation' => [
                        'title' => 'Automação',

                        'entries' => [
                            'auto-post-bills'                => 'Lançar contas automaticamente',
                            'ignore-abnormal-invoice-amount' => 'Ignore Abnormal Fatura Valor',
                            'ignore-abnormal-invoice-date'   => 'Ignore Abnormal Fatura Data',
                        ],
                    ],
                ],
            ],

            'internal-notes' => [
                'title' => 'Interno Notas',
            ],
        ],
    ],
];
