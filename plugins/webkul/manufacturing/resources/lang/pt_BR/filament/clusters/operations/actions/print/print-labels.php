<?php

return [
    'label' => 'Imprimir Labels',

    'form' => [
        'fields' => [
            'quantity'      => 'Quantidade',
            'format'        => 'Format',
            'quantity-type' => 'Quantidade Para Imprimir',

            'quantity-type-options' => [
                'operation' => 'Operação Quantidade',
                'custom'    => 'Personalizado Quantidade',
            ],

            'format-options' => [
                'dymo'       => 'Dymo',
                '2x7_price'  => '2x7 com preço',
                '4x7_price'  => '4x7 com preço',
                '4x12'       => '4x12',
                '4x12_price' => '4x12 com preço',
            ],
        ],
    ],
];
