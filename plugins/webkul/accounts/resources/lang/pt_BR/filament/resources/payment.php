<?php

return [
    'title' => 'Pagamento',

    'navigation' => [
        'title' => 'Pagamentos',
        'group' => 'Faturas',
    ],

    'global-search' => [
        'partner' => 'Parceiro',
        'amount'  => 'Valor',
        'date'    => 'Data',
    ],

    'form' => [
        'sections' => [
            'fields' => [
                'payment-type'          => 'Pagamento Tipo',
                'memo'                  => 'Memo',
                'date'                  => 'Data',
                'amount'                => 'Valor',
                'currency'              => 'Moeda',
                'payment-method'        => 'Forma de pagamento',
                'customer'              => 'Cliente',
                'vendor'                => 'Fornecedor',
                'journal'               => 'Diário',
                'customer-bank-account' => 'Cliente Conta bancária',
                'vendor-bank-account'   => 'Fornecedor Conta bancária',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'            => 'Nome',
            'date'            => 'Data',
            'journal'         => 'Diário',
            'payment-method'  => 'Forma de pagamento',
            'partner'         => 'Parceiro',
            'amount-currency' => 'Valor (moeda)',
            'amount'          => 'Valor',
            'state'           => 'State',
            'company'         => 'Empresa',
            'currency'        => 'Moeda',
            'created-by'      => 'Criado por',
        ],

        'groups' => [
            'name'                             => 'Nome',
            'company'                          => 'Empresa',
            'journal'                          => 'Diário',
            'partner'                          => 'Parceiro',
            'payment-method-line'              => 'Forma de pagamento Linha',
            'payment-method'                   => 'Forma de pagamento',
            'partner-bank-account'             => 'Parceiro Conta bancária',
            'created-at'                       => 'Criado em',
            'updated-at'                       => 'Atualizado em',
        ],

        'filters' => [
            'company'                          => 'Empresa',
            'journal'                          => 'Diário',
            'customer-bank-account'            => 'Cliente Conta bancária',
            'payment-method'                   => 'Forma de pagamento',
            'currency'                         => 'Moeda',
            'partner'                          => 'Parceiro',
            'payment-method-line'              => 'Forma de pagamento Linha',
            'created-at'                       => 'Criado em',
            'updated-at'                       => 'Atualizado em',
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
        'sections' => [
            'payment-information' => [
                'title'   => 'Pagamento Information',
                'entries' => [
                    'state'                 => 'State',
                    'vendor'                => 'Fornecedor',
                    'customer'              => 'Cliente',
                    'payment-type'          => 'Pagamento Tipo',
                    'journal'               => 'Diário',
                    'customer-bank-account' => 'Cliente Conta bancária',
                    'vendor-bank-account'   => 'Fornecedor Conta bancária',
                    'amount'                => 'Valor',
                    'payment-method'        => 'Forma de pagamento',
                    'date'                  => 'Data',
                    'memo'                  => 'Memo',
                ],
            ],
        ],
    ],

];
