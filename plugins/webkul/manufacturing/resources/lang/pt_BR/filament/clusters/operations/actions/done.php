<?php

return [
    'label'         => 'Produce Todos',
    'partial-label' => 'Produce',

    'modal' => [
        'consumption-warning' => [
            'heading'     => 'Consumption Aviso',
            'description' => 'Some produtos consumed different quantidade than expected. Do you want para validate the manufatura pedido com the atual quantidades?',

            'form' => [
                'product'    => 'Produto',
                'to-consume' => 'Para Consume',
                'consumed'   => 'Consumed',
                'uom'        => 'Unidade de medida',
            ],

            'actions' => [
                'confirm' => [
                    'label' => 'Confirmar',
                ],

                'set-quantities' => [
                    'label' => 'Set Quantidades e Confirmar',
                ],
            ],
        ],

        'produced-warning' => [
            'heading'     => 'Produced is different than expected',
            'description' => 'The quantidade produced is different than expected. Do you want para confirmar the manufatura pedido com the atual quantidade?',
        ],
    ],

    'notification' => [
        'success' => [
            'title' => 'Manufatura pedido concluído',
            'body'  => 'O Manufatura pedido foi completed com sucesso.',
        ],
    ],
];
