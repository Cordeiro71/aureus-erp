<?php

return [
    'title' => 'My Alocação',

    'model-label' => 'My Alocação',

    'navigation' => [
        'title' => 'My Alocação',
    ],

    'form' => [
        'fields' => [
            'name'                => 'Nome',
            'name-placeholder'    => 'Folga Tipo (De validity iniciar para validity end/não limite)',
            'time-off-type'       => 'Folga Tipo',
            'allocation-type'     => 'Tipo de alocação',
            'validity-period'     => 'Validity Period',
            'date-from'           => 'Data De',
            'date-to'             => 'Data Para',
            'date-to-placeholder' => 'Não Limite',
            'allocation'          => 'Alocação',
            'allocation-suffix'   => 'Number de Dias',
            'reason'              => 'Reason',
        ],
    ],

    'table' => [
        'columns' => [
            'time-off-type'   => 'Folga Tipo',
            'amount'          => 'Valor',
            'allocation-type' => 'Tipo de alocação',
            'status'          => 'Status',
        ],

        'groups' => [
            'time-off-type'   => 'Folga Tipo',
            'employee-name'   => 'Funcionário Nome',
            'allocation-type' => 'Tipo de alocação',
            'status'          => 'Status',
            'start-date'      => 'Data de início',
        ],

        'actions' => [
            'approve' => [
                'title' => [
                    'validate' => 'Validate',
                    'approve'  => 'Aprovar',
                ],
                'notification' => [
                    'title' => 'Alocação aprovado aprovado',
                    'body'  => 'O Alocação aprovado foi aprovado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Alocação excluído',
                    'body'  => 'A Alocação foi excluído com sucesso.',
                ],
            ],

            'refused' => [
                'title'        => 'Recusar',
                'notification' => [
                    'title' => 'Alocação recusado',
                    'body'  => 'A Alocação foi recusada com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Alocações excluído',
                    'body'  => 'O Alocações foi excluído com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'allocation-details' => [
                'title'   => 'Detalhes da alocação',
                'entries' => [
                    'name'                => 'Nome',
                    'time-off-type'       => 'Folga Tipo',
                    'allocation-type'     => 'Tipo de alocação',
                ],
            ],

            'validity-period' => [
                'title'   => 'Validity Period',
                'entries' => [
                    'date-from' => 'Data De',
                    'date-to'   => 'Data Para',
                    'reason'    => 'Reason',
                ],
            ],
            'allocation-status' => [
                'title'   => 'Status da alocação',
                'entries' => [
                    'date-to-placeholder' => 'Não Limite',
                    'allocation'          => 'Number de Dia(s)',
                    'allocation-value'    => ':dias number de dias',
                    'state'               => 'State',
                ],
            ],
        ],
    ],
];
