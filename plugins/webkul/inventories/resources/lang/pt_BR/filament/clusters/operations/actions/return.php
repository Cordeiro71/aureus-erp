<?php

return [
    'label' => 'Return',

    'modal' => [
        'form' => [
            'columns' => [
                'product'  => 'Produto',
                'quantity' => 'Quantidade',
                'uom'      => 'UOM',
            ],
        ],
    ],

    'notification' => [
        'no-products' => [
            'body' => 'Não produtos para return (only linhas in Concluído state e não fully devolvido yet can be devolvido).',
        ],
        'no-quantities' => [
            'body' => 'Please specify at least one non-zero quantidade.',
        ],
    ],
];
