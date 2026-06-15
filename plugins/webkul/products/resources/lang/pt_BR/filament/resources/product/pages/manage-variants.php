<?php

return [
    'title' => 'Variantes',

    'form' => [
        'date'                   => 'Data',
        'employee'               => 'Funcionário',
        'description'            => 'Descrição',
        'time-spent'             => 'Hora Spent',
        'time-spent-helper-text' => 'Hora spent in horas (Eg. 1.5 horas means 1 hora 30 minutos)',
    ],

    'table' => [
        'columns' => [
            'date'                   => 'Data',
            'employee'               => 'Funcionário',
            'description'            => 'Descrição',
            'time-spent'             => 'Hora Spent',
            'time-spent-on-subtasks' => 'Hora Spent ligado Subtasks',
            'total-time-spent'       => 'Total Hora Spent',
            'remaining-time'         => 'Remaining Hora',
            'variant-values'         => 'Variante Valores',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Variante excluído',
                    'body'  => 'O Variante foi excluído com sucesso.',
                ],
            ],

            'view' => [
                'extra-footer-actions' => [
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
                ],
            ],
        ],
    ],
];
