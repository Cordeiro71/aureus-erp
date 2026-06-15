<?php

return [
    'title' => 'Pay',

    'form' => [
        'fields' => [
            'journal'              => 'Diário',
            'amount'               => 'Valor',
            'currency'             => 'Moeda',
            'payment-method-line'  => 'Forma de pagamento Linha',
            'payment-date'         => 'Pagamento Data',
            'partner-bank-account' => 'Parceiro Conta bancária',
            'communication'        => 'Memo',
        ],
    ],

    'notifications' => [
        'payment-failed' => [
            'title' => 'Pagamento Falhou',
        ],
    ],
];
