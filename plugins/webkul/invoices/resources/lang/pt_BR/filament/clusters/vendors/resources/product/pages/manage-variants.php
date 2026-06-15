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
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Variante excluído',
                    'body'  => 'O Variante foi excluído com sucesso.',
                ],
            ],
        ],
    ],
];
