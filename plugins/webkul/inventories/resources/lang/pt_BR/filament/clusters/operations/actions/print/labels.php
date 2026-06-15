<?php

return [
    'label' => 'Labels',

    'form' => [
        'fields' => [
            'type'          => 'Tipo De Labels',
            'quantity'      => 'Quantidade',
            'format'        => 'Format',
            'layout'        => 'Layout De Labels',
            'quantity-type' => 'Quantidade Para Imprimir',
            'quantity'      => 'Quantidade',

            'quantity-type-options' => [
                'operation' => 'Operação Quantidade',
                'custom'    => 'Personalizado Quantidade',
                'per-slot'  => 'One por lote/SN',
                'per-unit'  => 'One por unidade',
            ],

            'type-options' => [
                'product' => 'Produto Labels',
                'lot'     => 'Lote/SN Labels',
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
