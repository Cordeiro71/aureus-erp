<?php

return [
    'title' => 'Folga',

    'model-label' => 'My Folga',

    'navigation' => [
        'title' => 'My Folga',
    ],

    'form' => [
        'fields' => [
            'time-off-type'     => 'Folga Tipo',
            'date'              => 'Data',
            'dates'             => 'Datas',
            'request-date-from' => 'Request Data De',
            'request-date-to'   => 'Request Data Para',
            'description'       => 'Descrição',
            'period'            => 'Period',
            'half-day'          => 'Half Dia',
            'requested-days'    => 'Requested (Dias/Horas)',
            'description'       => 'Descrição',
            'attachment'        => 'Anexo',
            'day'               => ':dia dia',
            'days'              => ':dias dia(s)',
        ],
    ],

    'table' => [
        'columns' => [
            'employee-name'  => 'Funcionário',
            'time-off-type'  => 'Folga Tipo',
            'description'    => 'Descrição',
            'date-from'      => 'Data De',
            'date-to'        => 'Data Para',
            'duration'       => 'Duration',
            'status'         => 'Status',
        ],

        'groups' => [
            'employee-name' => 'Funcionário',
            'time-off-type' => 'Folga Tipo',
            'status'        => 'Status',
            'start-date'    => 'Data de início',
            'start-to'      => 'Data de término',
            'updated-at'    => 'Atualizado em',
            'created-at'    => 'Criado em',
        ],

        'actions' => [
            'approve' => [
                'title' => [
                    'validate' => 'Validate',
                    'approve'  => 'Aprovar',
                ],
                'notification' => [
                    'title' => 'Folga aprovado',
                    'body'  => 'A Folga foi aprovada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Folga excluído',
                    'body'  => 'A Folga foi excluído com sucesso.',
                ],
            ],

            'refused' => [
                'title'        => 'Recusar',
                'notification' => [
                    'title' => 'Folga recusado',
                    'body'  => 'A Folga foi recusada com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Hora Offs excluído',
                    'body'  => 'O Hora offs foi excluído com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'time-off-type'     => 'Folga Tipo',
            'date'              => 'Data',
            'dates'             => 'Datas',
            'request-date-from' => 'Request Data De',
            'request-date-to'   => 'Request Data Para',
            'description'       => 'Descrição',
            'period'            => 'Period',
            'half-day'          => 'Half Dia',
            'requested-days'    => 'Requested (Dias/Horas)',
            'description'       => 'Descrição',
            'attachment'        => 'Anexo',
            'day'               => ':dia dia',
            'days'              => ':dias dia(s)',
        ],
    ],
];
