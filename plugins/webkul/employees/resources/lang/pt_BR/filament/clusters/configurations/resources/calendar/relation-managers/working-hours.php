<?php

return [
    'modal' => [
        'title' => 'Working Horas',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Informações gerais',
                'fields' => [
                    'attendance-name' => 'Nome da frequência',
                    'attendance-name' => 'Nome da frequência',
                    'day-of-week'     => 'Dia de Semana',
                ],
            ],

            'timing-information' => [
                'title' => 'Timing Information',

                'fields' => [
                    'day-period' => 'Dia Periods',
                    'week-type'  => 'Semana Tipo',
                    'work-from'  => 'Work De',
                    'work-to'    => 'Work Para',
                ],
            ],

            'date-information' => [
                'title' => 'Data Information',

                'fields' => [
                    'starting-date' => 'Starting Data',
                    'ending-date'   => 'Ending Data',
                ],
            ],

            'additional-information' => [
                'title' => 'Informações adicionais',

                'fields' => [
                    'durations-days' => 'Duration (Dias)',
                    'display-type'   => 'Display Tipo',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'          => 'Nome da frequência',
            'day-of-week'   => 'Dia de Semana',
            'day-period'    => 'Dia Periods',
            'work-from'     => 'Work De',
            'work-to'       => 'Work Para',
            'starting-date' => 'Starting Data',
            'ending-date'   => 'Ending Data',
            'display-type'  => 'Display Tipo',
            'created-by'    => 'Criado por',
            'created-at'    => 'Criado em',
            'updated-at'    => 'Atualizado em',
        ],

        'groups' => [
            'activity-type' => 'Atividade Tipo',
            'assignment'    => 'Assignment',
            'assigned-to'   => 'Atribuído a',
            'interval'      => 'Interval',
            'delay-unit'    => 'Delay Unidade',
            'delay-from'    => 'Delay De',
            'created-by'    => 'Criado por',
            'created-at'    => 'Criado em',
            'updated-at'    => 'Atualizado em',
        ],

        'filters' => [
            'display-type' => 'Display Tipo',
            'day-of-week'  => 'Dia de Semana',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Working Horas atualizado',
                    'body'  => 'O Working horas foi atualizado com sucesso.',
                ],
            ],

            'create' => [
                'notification' => [
                    'title' => 'Working Horas criado',
                    'body'  => 'O Working horas foi criado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Working Horas excluído',
                    'body'  => 'O Working horas foi excluído com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Working Horas restaurado',
                    'body'  => 'O Working horas foi restaurado com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Working Horas excluído',
                    'body'  => 'O Working horas foi excluído com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Working Horas excluído',
                    'body'  => 'O Working horas foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Working Horas excluído',
                    'body'  => 'O Working horas foi excluído com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Informações gerais',

                'entries' => [
                    'name'        => 'Nome da frequência',
                    'day-of-week' => 'Dia de Semana',
                ],
            ],

            'timing-information' => [
                'title' => 'Timing Information',

                'entries' => [
                    'day-period' => 'Dia Periods',
                    'week-type'  => 'Semana Tipo',
                    'work-from'  => 'Work De',
                    'work-to'    => 'Work Para',
                ],
            ],

            'date-information' => [
                'title' => 'Data Information',

                'entries' => [
                    'starting-date' => 'Starting Data',
                    'ending-date'   => 'Ending Data',
                ],
            ],

            'additional-information' => [
                'title' => 'Informações adicionais',

                'entries' => [
                    'durations-days' => 'Duration (Dias)',
                    'display-type'   => 'Display Tipo',
                ],
            ],
        ],

        'note' => 'Nota',
    ],
];
