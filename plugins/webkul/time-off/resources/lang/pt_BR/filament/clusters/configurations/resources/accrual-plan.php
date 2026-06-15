<?php

return [
    'title'      => 'Plano de provisão',
    'navigation' => [
        'title' => 'Plano de provisão',
    ],

    'form' => [
        'fields' => [
            'name'                    => 'Título',
            'is-based-on-worked-time' => 'Is Baseado em Worked Hora',
            'accrued-gain-time'       => 'Accrued Gain Hora',
            'carry-over-time'         => 'Carry Over Hora',
            'carry-over-date'         => 'Carry Over Data',
            'status'                  => 'Status',
        ],
    ],

    'table' => [
        'columns' => [
            'name'   => 'Nome',
            'levels' => 'Levels',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Plano de provisão excluído',
                    'body'  => 'O Plano de provisão foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Plano de provisão excluído',
                    'body'  => 'O Plano de provisão foi excluído com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'basic-information' => 'Informações básicas',
        ],

        'entries' => [
            'name'                    => 'Nome',
            'is-based-on-worked-time' => 'Is Baseado em Worked Hora',
            'accrued-gain-time'       => 'Accrued Gain Hora',
            'carry-over-time'         => 'Carry Over Hora',
            'carry-over-day'          => 'Carry Over Dia',
            'carry-over-month'        => 'Carry Over Mês',
        ],
    ],
];
