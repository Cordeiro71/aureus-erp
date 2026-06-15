<?php

return [
    'title' => 'Planilhas de horas',

    'form' => [
        'date'                   => 'Data',
        'employee'               => 'Funcionário',
        'description'            => 'Descrição',
        'time-spent'             => 'Hora Spent',
        'time-spent-helper-text' => 'Hora spent in horas (Eg. 1.5 horas means 1 hora 30 minutos)',
    ],

    'table' => [
        'header-actions' => [
            'create' => [
                'label' => 'Adicionar planilha de horas',

                'notification' => [
                    'title' => 'Planilha de horas criado',
                    'body'  => 'O Planilha de horas foi criado com sucesso.',
                ],
            ],
        ],

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
            'edit' => [
                'notification' => [
                    'title' => 'Planilha de horas atualizado',
                    'body'  => 'O Planilha de horas foi atualizado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Planilha de horas excluído',
                    'body'  => 'O Planilha de horas foi excluído com sucesso.',
                ],
            ],
        ],
    ],
];
