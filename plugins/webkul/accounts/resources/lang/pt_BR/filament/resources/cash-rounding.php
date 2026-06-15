<?php

return [
    'form' => [
        'fields' => [
            'name'               => 'Nome',
            'rounding-precision' => 'Rounding Precisão',
            'rounding-strategy'  => 'Rounding Strategy',
            'profit-account'     => 'Profit Conta',
            'loss-account'       => 'Loss Conta',
            'rounding-method'    => 'Rounding Method',
        ],
    ],

    'table' => [
        'columns' => [
            'name'                 => 'Nome',
            'rounding-strategy'    => 'Rounding Strategy',
            'rounding-method'      => 'Rounding Method',
            'created-by'           => 'Criado por',
            'profit-account'       => 'Profit Conta',
            'loss-account'         => 'Loss Conta',
        ],

        'groups' => [
            'name'              => 'Nome',
            'rounding-strategy' => 'Rounding Strategy',
            'rounding-method'   => 'Rounding Method',
            'created-by'        => 'Criado por',
            'profit-account'    => 'Profit Conta',
            'loss-account'      => 'Loss Conta',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Cash Rounding excluído',
                    'body'  => 'O Cash rounding foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Cash Rounding excluído',
                    'body'  => 'O Cash rounding foi excluído com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'               => 'Nome',
            'rounding-precision' => 'Rounding Precisão',
            'rounding-strategy'  => 'Rounding Strategy',
            'profit-account'     => 'Profit Conta',
            'loss-account'       => 'Loss Conta',
            'rounding-method'    => 'Rounding Method',
        ],
    ],
];
