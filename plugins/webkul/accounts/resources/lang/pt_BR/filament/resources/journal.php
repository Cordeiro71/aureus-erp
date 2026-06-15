<?php

return [
    'form' => [
        'tabs' => [
            'journal-entries' => [
                'title' => 'Lançamentos contábeis',

                'field-set' => [
                    'accounting-information' => [
                        'title'  => 'Informações contábeis',
                        'fields' => [
                            'dedicated-credit-note-sequence' => 'Dedicated Nota de crédito Sequence',
                            'dedicated-payment-sequence'     => 'Dedicated Pagamento Sequence',
                            'sort-code-placeholder'          => 'Enter the diário code',
                            'sort-code'                      => 'Ordenar',
                            'currency'                       => 'Moeda',
                            'color'                          => 'Cor',
                            'default-account'                => 'Padrão Conta',
                            'profit-account'                 => 'Profit Conta',
                            'loss-account'                   => 'Loss Conta',
                            'suspense-account'               => 'Suspense Conta',
                            'bank-account'                   => 'Conta bancária',
                        ],
                    ],

                    'bank-account-number' => [
                        'title' => 'Número da conta bancária',
                    ],
                ],
            ],

            'incoming-payments' => [
                'title'            => 'Entrada Pagamentos',
                'add-action-label' => 'Adicionar linha',

                'fields' => [
                    'payment-method'             => 'Forma de pagamento',
                    'display-name'               => 'Display Nome',
                    'account-number'             => 'Outstanding Recibos Contas',
                    'relation-notes'             => 'Relation Notas',
                    'relation-notes-placeholder' => 'Enter any relation detalhes',
                ],
            ],

            'outgoing-payments' => [
                'title'            => 'Saída Pagamentos',
                'add-action-label' => 'Adicionar linha',

                'fields' => [
                    'payment-method'             => 'Forma de pagamento',
                    'display-name'               => 'Display Nome',
                    'account-number'             => 'Outstanding Pagamentos Contas',
                    'relation-notes'             => 'Relation Notas',
                    'relation-notes-placeholder' => 'Enter any relation detalhes',
                ],
            ],

            'advanced-settings' => [
                'title'  => 'Configurações avançadas',

                'fields' => [
                    'allowed-accounts'       => 'Contas permitidas',
                    'control-access'         => 'Control Access',
                    'payment-communication'  => 'Pagamento Communication',
                    'auto-check-on-post'     => 'Verificação automática ao lançar',
                    'communication-type'     => 'Communication Tipo',
                    'communication-standard' => 'Communication Standard',
                ],
            ],
        ],

        'general' => [
            'title' => 'Informações gerais',

            'fields' => [
                'name'    => 'Nome',
                'type'    => 'Tipo',
                'company' => 'Empresa',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Nome',
            'type'       => 'Tipo',
            'code'       => 'Code',
            'currency'   => 'Moeda',
            'created-by' => 'Criado por',
            'status'     => 'Status',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Diário excluído',
                        'body'  => 'O Diário foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Diário deletion falhou',
                        'body'  => 'The diário cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Diário excluído',
                        'body'  => 'O Diário foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Diários deletion falhou',
                        'body'  => 'The diários cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'tabs' => [
            'journal-entries' => [
                'title' => 'Lançamentos contábeis',

                'field-set' => [
                    'accounting-information' => [
                        'title'   => 'Informações contábeis',

                        'entries' => [
                            'dedicated-credit-note-sequence' => 'Dedicated Nota de crédito Sequence',
                            'dedicated-payment-sequence'     => 'Dedicated Pagamento Sequence',
                            'sort-code-placeholder'          => 'Enter the diário code',
                            'sort-code'                      => 'Ordenar',
                            'currency'                       => 'Moeda',
                            'color'                          => 'Cor',
                            'default-account'                => 'Padrão Conta',
                            'profit-account'                 => 'Profit Conta',
                            'loss-account'                   => 'Loss Conta',
                            'suspense-account'               => 'Suspense Conta',
                        ],
                    ],

                    'bank-account-number' => [
                        'title' => 'Número da conta bancária',

                        'entries' => [
                            'account-number' => 'Número da conta',
                        ],
                    ],
                ],
            ],

            'incoming-payments' => [
                'title' => 'Entrada Pagamentos',

                'entries' => [
                    'payment-method'             => 'Forma de pagamento',
                    'display-name'               => 'Display Nome',
                    'account-number'             => 'Outstanding Recibos Contas',
                    'relation-notes'             => 'Relation Notas',
                    'relation-notes-placeholder' => 'Enter any relation detalhes',
                ],
            ],

            'outgoing-payments' => [
                'title' => 'Saída Pagamentos',

                'entries' => [
                    'payment-method'             => 'Forma de pagamento',
                    'display-name'               => 'Display Nome',
                    'account-number'             => 'Outstanding Pagamentos Contas',
                    'relation-notes'             => 'Relation Notas',
                    'relation-notes-placeholder' => 'Enter any relation detalhes',
                ],
            ],

            'advanced-settings' => [
                'title'   => 'Configurações avançadas',

                'allowed-accounts' => [
                    'title' => 'Contas permitidas',

                    'entries' => [
                        'allowed-accounts'       => 'Contas permitidas',
                        'control-access'         => 'Control Access',
                        'auto-check-on-post'     => 'Verificação automática ao lançar',
                    ],
                ],

                'payment-communication'  => [
                    'title' => 'Pagamento Communication',

                    'entries' => [
                        'communication-type'     => 'Communication Tipo',
                        'communication-standard' => 'Communication Standard',
                    ],
                ],
            ],
        ],

        'general' => [
            'title' => 'Informações gerais',

            'entries' => [
                'name'    => 'Nome',
                'type'    => 'Tipo',
                'company' => 'Empresa',
            ],
        ],
    ],

];
