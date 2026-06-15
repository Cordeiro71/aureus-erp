<?php

return [
    'form' => [
        'fields' => [
            'tax-source'      => 'Imposto Origem',
            'tax-destination' => 'Imposto Destino',
        ],
    ],

    'table' => [
        'columns' => [
            'tax-source'      => 'Imposto Origem',
            'tax-destination' => 'Imposto Destino',
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

    'infolist' => [
        'entries' => [
            'tax-source'      => 'Imposto Origem',
            'tax-destination' => 'Imposto Destino',
        ],
    ],
];
