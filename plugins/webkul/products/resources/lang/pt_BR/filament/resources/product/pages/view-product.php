<?php

return [
    'header-actions' => [
        'print' => [
            'label' => 'Imprimir Labels',

            'form' => [
                'fields' => [
                    'quantity' => 'Number de Labels',
                    'format'   => 'Format',

                    'format-options' => [
                        'dymo'       => 'Dymo',
                        '2x7_price'  => '2x7 com preço',
                        '4x7_price'  => '4x7 com preço',
                        '4x12'       => '4x12',
                        '4x12_price' => '4x12 com preço',
                    ],
                ],
            ],
        ],

        'delete' => [
            'notification' => [
                'title' => 'Produto excluído',
                'body'  => 'O Produto foi excluído com sucesso.',
            ],
        ],
    ],
];
