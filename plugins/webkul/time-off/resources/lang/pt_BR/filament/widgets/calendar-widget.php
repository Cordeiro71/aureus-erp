<?php

return [
    'heading' => [
        'title' => 'Folga Requests',
    ],

    'modal-actions' => [
        'edit' => [
            'title'                         => 'Editar',
            'duration-display'              => ':contagem dia útil|:contagem dias úteis',
            'duration-display-with-weekend' => ':contagem dia útil (+ :fim de semana fim de semana dia)|:contagem dias úteis (+ :fim de semana fim de semana dias)',

            'notification' => [
                'title' => 'Folga atualizado',
                'body'  => 'O Your folga request foi atualizado com sucesso.',
            ],
        ],

        'delete' => [
            'title' => 'Excluir',
        ],
    ],

    'config' => [
        'button-text' => [
            'today' => 'Hoje',
            'month' => 'Mês',
            'week'  => 'Semana',
            'list'  => 'List',
        ],
    ],

    'view-action' => [
        'title'       => 'Visualizar',
        'description' => 'Visualizar Folga Request',
    ],

    'notifications' => [
        'employee-not-found' => [
            'title' => 'Funcionário Não Found',
            'body'  => 'Please adicionar an funcionário para your perfil antes requesting folga.',
        ],

        'error' => [
            'title' => 'Something went wrong',
            'body'  => 'We could não process your folga request. Please try again.',
        ],
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

            'success' => [
                'notification' => [
                    'title' => 'Folga criado',
                    'body'  => 'O Your folga request foi criado com sucesso.',
                ],
            ],
        ],
    ],

    'form' => [
        'title'       => 'Folga Request',
        'description' => 'Criar ou editar your folga request com the seguinte detalhes:',

        'fields' => [
            'time-off-type'             => 'Folga Tipo',
            'time-off-type-placeholder' => 'Selecionar a folga tipo',
            'time-off-type-helper'      => 'Selecionar the tipo de folga you are requesting.',
            'request-date-from'         => 'Request Data De',
            'request-date-to'           => 'Request Data Para',
            'period'                    => 'Period',
            'half-day'                  => 'Half Dia',
            'half-day-helper'           => 'Toggle para half-dia licença.',
            'requested-days'            => 'Requested (Dias/Horas)',
            'description'               => 'Descrição',
            'description-placeholder'   => 'Não descrição provided',
            'description-helper'        => 'Provide a brief descrição de your folga request.',
            'duration'                  => 'Duration',
            'please-select-dates'       => 'Please selecionar the request data de e para.',
        ],
    ],

    'infolist' => [
        'title'       => 'Folga Detalhes',
        'description' => 'Here are the detalhes de your folga request:',
        'entries'     => [
            'time-off-type'           => 'Folga Tipo',
            'request-date-from'       => 'Request Data De',
            'request-date-to'         => 'Request Data Para',
            'description'             => 'Descrição',
            'description-placeholder' => 'Não descrição provided',
            'duration'                => 'Duration',
            'status'                  => 'Status',
        ],
    ],

    'events' => [
        'title' => ':nome Ligado :status: :dias dia(s)',
    ],
];
