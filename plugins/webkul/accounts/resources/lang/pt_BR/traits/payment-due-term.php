<?php

return [
    'form' => [
        'value'                  => 'Valor',
        'due'                    => 'Due',
        'delay-due'              => 'Delay Due',
        'delay-type'             => 'Delay Tipo',
        'days-on-the-next-month' => 'Dias ligado the próximo mês',
        'days'                   => 'Dias',
        'payment-term'           => 'Condição de pagamento',
    ],

    'table' => [
        'columns' => [
            'due'          => 'Due',
            'value'        => 'Valor',
            'value-amount' => 'Valor Valor',
            'after'        => 'Depois',
            'delay-type'   => 'Delay Tipo',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Pagamento Due Term atualizado',
                    'body'  => 'O Pagamento due term foi atualizado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Pagamento Due Term excluído',
                    'body'  => 'O Pagamento due term foi excluído com sucesso.',
                ],
            ],
        ],

        'header-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Pagamento Due Term criado',
                    'body'  => 'O Pagamento due term foi criado com sucesso.',
                ],
            ],
        ],
    ],
];
