<?php

return [
    'title' => 'Criar Fatura',

    'modal' => [
        'heading' => 'Criar Fatura',
    ],

    'notification' => [
        'invoice-created' => [
            'title' => 'Fatura criado',
            'body'  => 'A Fatura foi criada com sucesso.',
        ],

        'no-invoiceable-lines' => [
            'title' => 'Não invoiceable linhas',
            'body'  => 'There is não invoiceable linha, please make sure aquele a quantidade has been recebido.',
        ],
    ],

    'form' => [
        'fields' => [
            'create-invoice' => 'Criar Fatura',
        ],
    ],
];
