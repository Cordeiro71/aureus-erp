<?php

return [
    'title' => 'Manage Padrão Contas',

    'form' => [
        'exchange-difference-entries' => [
            'label' => 'Exchange Difference Entries',

            'fields' => [
                'journal' => [
                    'label' => 'Diário',
                ],

                'gain' => [
                    'label' => 'Gain',
                ],

                'loss' => [
                    'label' => 'Loss',
                ],
            ],
        ],

        'bank-transfer-and-payments' => [
            'label' => 'Transferência bancária e pagamentos',

            'fields' => [
                'bank-suspense-account' => [
                    'label' => 'Conta transitória do banco',
                ],

                'transfer-account' => [
                    'label' => 'Transferência Conta',
                ],
            ],
        ],

        'product-accounts' => [
            'label' => 'Produto Contas',

            'fields' => [
                'income-account' => [
                    'label' => 'Income Conta',
                ],

                'expense-account' => [
                    'label' => 'Despesa Conta',
                ],
            ],
        ],
    ],
];
