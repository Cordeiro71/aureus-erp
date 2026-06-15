<?php

return [
    'heading' => [
        'title' => 'Folga Visão geral',
    ],

    'modal-actions' => [
        'edit' => [
            'title'        => 'Editar',
            'notification' => [
                'title' => 'Folga atualizado',
                'body'  => 'O Folga request foi atualizado com sucesso.',
            ],
        ],

        'delete' => [
            'title' => 'Excluir',
        ],
    ],

    'view-action' => [
        'title'       => 'Visualizar',
        'description' => 'Visualizar Folga Request',
    ],

    'header-actions' => [
        'create' => [
            'title'       => 'Novo Folga',
            'description' => 'Criar Folga Request',

            'notification' => [
                'title' => 'Folga criado',
                'body'  => 'O Folga request foi criado com sucesso.',
            ],

            'employee-not-found' => [
                'notification' => [
                    'title' => 'Funcionário Não Found',
                    'body'  => 'Please adicionar an funcionário para your perfil antes creating a folga request.',
                ],
            ],
        ],
    ],

    'form' => [
        'fields' => [
            'time-off-type'     => 'Folga Tipo',
            'request-date-from' => 'Request Data De',
            'request-date-to'   => 'Request Data Para',
            'period'            => 'Period',
            'half-day'          => 'Half Dia',
            'requested-days'    => 'Requested (Dias/Horas)',
            'description'       => 'Descrição',
        ],
    ],

    'infolist' => [
        'entries' => [
            'time-off-type'           => 'Folga Tipo',
            'request-date-from'       => 'Request Data De',
            'request-date-to'         => 'Request Data Para',
            'description'             => 'Descrição',
            'description-placeholder' => 'Não descrição provided',
            'duration'                => 'Duration',
            'status'                  => 'Status',
        ],
    ],
];
