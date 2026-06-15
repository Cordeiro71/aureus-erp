<?php

return [
    'label' => 'Criar Conta a pagar',

    'action' => [
        'notification' => [
            'warning' => [
                'title' => 'Não invoiceable linhas',
                'body'  => 'There is não invoiceable linha, please make sure aquele a quantidade has been recebido.',
            ],

            'success' => [
                'title' => 'Conta a pagar criado',
                'body'  => 'O Conta a pagar foi criado com sucesso.',
            ],
        ],
    ],
];
