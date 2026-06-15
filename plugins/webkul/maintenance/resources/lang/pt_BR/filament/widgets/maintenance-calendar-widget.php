<?php

return [
    'heading' => [
        'title' => 'Manutenção Calendário',
    ],

    'config' => [
        'button-text' => [
            'today' => 'Hoje',
            'year'  => 'Ano',
            'month' => 'Mês',
            'week'  => 'Semana',
            'list'  => 'List',
        ],
    ],

    'header-actions' => [
        'create' => [
            'label'         => 'Novo Request',
            'modal-heading' => 'Novo Solicitação de manutenção',
            'notification'  => [
                'success' => [
                    'title' => 'Solicitação de manutenção criado',
                    'body'  => 'A Solicitação de manutenção foi criada com sucesso.',
                ],
                'error' => [
                    'title' => 'Solicitação de manutenção could não be criado',
                    'body'  => 'Criar a manutenção estágio e equipe primeiro.',
                ],
            ],
        ],
    ],

    'view-action' => [
        'label' => 'Visualizar',
    ],

    'modal-actions' => [
        'edit' => [
            'label' => 'Editar',
        ],
    ],

    'form' => [
        'fields' => [
            'subject'      => 'Assunto',
            'scheduled-at' => 'Scheduled At',
        ],
    ],

    'infolist' => [
        'title'   => 'Solicitação de manutenção',
        'entries' => [
            'subject'          => 'Assunto',
            'date'             => 'Data',
            'time'             => 'Hora',
            'technician'       => 'Technician',
            'priority'         => 'Prioridade',
            'maintenance-type' => 'Manutenção Tipo',
            'stage'            => 'Estágio',
        ],
    ],
];
