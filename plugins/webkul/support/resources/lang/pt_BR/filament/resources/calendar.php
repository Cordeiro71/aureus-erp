<?php

return [
    'title' => 'Working Schedules',

    'navigation' => [
        'title' => 'Working Schedules',
        'group' => 'Funcionário',
    ],

    'groups' => [
        'status'     => 'Status',
        'created-by' => 'Criado por',
        'created-at' => 'Criado em',
        'updated-at' => 'Atualizado em',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Informações gerais',
                'fields' => [
                    'name'                  => 'Nome',
                    'schedule-name'         => 'Schedule Nome',
                    'schedule-name-tooltip' => 'Please write descriptive working schedule nome.',
                    'timezone'              => 'Fuso horário',
                    'timezone-tooltip'      => 'Please selecionar the fuso horário para the working schedule.',
                    'company'               => 'Empresa',
                ],
            ],

            'configuration' => [
                'title'  => 'Work Horas Configuração',
                'fields' => [
                    'hours-per-day'                   => 'Horas Por Dia',
                    'hours-per-day-suffix'            => 'Horas',
                    'full-time-required-hours'        => 'Full Hora Obrigatório Horas',
                    'full-time-required-hours-suffix' => 'Horas por semana',
                ],
            ],

            'flexibility' => [
                'title'  => 'Flexibility',
                'fields' => [
                    'status'                     => 'Status',
                    'two-weeks-calendar'         => 'Two Semanas Calendário',
                    'two-weeks-calendar-tooltip' => 'Ativar alternating two-semana work schedule.',
                    'flexible-hours'             => 'Flexible Horas',
                    'flexible-hours-tooltip'     => 'Permita que os funcionários tenham horários de trabalho flexíveis.',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'             => 'ID',
            'name'           => 'Schedule Nome',
            'timezone'       => 'Fuso horário',
            'company'        => 'Empresa',
            'flexible-hours' => 'Flexible Horas',
            'status'         => 'Status',
            'daily-hours'    => 'Daily Horas',
            'created-by'     => 'Criado por',
            'created-at'     => 'Criado em',
            'updated-at'     => 'Atualizado em',
        ],

        'filters' => [
            'company'                  => 'Empresa',
            'is-active'                => 'Status',
            'two-week-calendar'        => 'Two Semanas Calendário',
            'flexible-hours'           => 'Flexible Horas',
            'timezone'                 => 'Fuso horário',
            'name'                     => 'Schedule Nome',
            'attendance'               => 'Frequência',
            'created-by'               => 'Criado por',
            'daily-hours'              => 'Daily Horas',
            'full-time-required-hours' => 'Full Hora Obrigatório Horas',
            'updated-at'               => 'Atualizado em',
            'created-at'               => 'Criado em',
        ],

        'groups' => [
            'name'           => 'Schedule Nome',
            'status'         => 'Status',
            'timezone'       => 'Fuso horário',
            'flexible-hours' => 'Flexible Horas',
            'daily-hours'    => 'Daily Horas',
            'created-by'     => 'Criado por',
            'created-at'     => 'Criado em',
            'updated-at'     => 'Atualizado em',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Calendário Plan restaurado',
                    'body'  => 'O Calendário plan foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Calendário Plan excluído',
                    'body'  => 'O Calendário plan foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Calendário Plan excluído definitivamente',
                    'body'  => 'O Calendário plan foi excluído definitivamente com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Calendário Plans restaurado',
                    'body'  => 'O Calendário plans foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Calendário Plans excluído',
                    'body'  => 'O Calendário plans foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Calendário Plans excluído definitivamente',
                    'body'  => 'O Calendário plans foi excluído definitivamente com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'Informações gerais',
                'entries' => [
                    'name'                  => 'Nome',
                    'schedule-name'         => 'Schedule Nome',
                    'schedule-name-tooltip' => 'Please write descriptive working schedule nome.',
                    'timezone'              => 'Fuso horário',
                    'timezone-tooltip'      => 'Please selecionar the fuso horário para the working schedule.',
                    'company'               => 'Empresa',
                ],
            ],

            'configuration' => [
                'title'   => 'Work Horas Configuração',
                'entries' => [
                    'hours-per-day'                   => 'Horas Por Dia',
                    'hours-per-day-suffix'            => 'horas',
                    'full-time-required-hours'        => 'Full Hora Obrigatório Horas',
                    'full-time-required-hours-suffix' => 'horas por semana',
                ],
            ],

            'flexibility' => [
                'title'   => 'Flexibility',
                'entries' => [
                    'status'                     => 'Status',
                    'two-weeks-calendar'         => 'Two Semanas Calendário',
                    'two-weeks-calendar-tooltip' => 'Ativar alternating two-semana work schedule.',
                    'flexible-hours'             => 'Flexible Horas',
                    'flexible-hours-tooltip'     => 'Permita que os funcionários tenham horários de trabalho flexíveis.',
                ],
            ],
        ],
    ],
];
