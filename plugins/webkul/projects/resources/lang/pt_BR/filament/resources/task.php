<?php

return [
    'title' => 'Tarefas',

    'navigation' => [
        'title' => 'Tarefas',
        'group' => 'Projeto',
    ],

    'global-search' => [
        'project'   => 'Projeto',
        'customer'  => 'Cliente',
        'milestone' => 'Marco',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Geral',

                'fields' => [
                    'title'             => 'Título',
                    'title-placeholder' => 'Tarefa Título...',
                    'tags'              => 'Etiquetas',
                    'name'              => 'Nome',
                    'color'             => 'Cor',
                    'description'       => 'Descrição',
                    'project'           => 'Projeto',
                    'status'            => 'Status',
                    'start_date'        => 'Data de início',
                    'end_date'          => 'Data de término',
                ],
            ],

            'additional' => [
                'title' => 'Informações adicionais',
            ],

            'settings' => [
                'title' => 'Configurações',

                'fields' => [
                    'project'                     => 'Projeto',
                    'milestone'                   => 'Marco',
                    'milestone-hint-text'         => 'Entregue automaticamente seus serviços ao alcançar um marco, vinculando-o a um item do pedido de venda.',
                    'name'                        => 'Nome',
                    'deadline'                    => 'Prazo',
                    'is-completed'                => 'Is Concluído',
                    'customer'                    => 'Cliente',
                    'assignees'                   => 'Responsáveis',
                    'allocated-hours'             => 'Allocated Horas',
                    'allocated-hours-helper-text' => 'In horas (Eg. 1.5 horas means 1 hora 30 minutos)',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'                  => 'ID',
            'priority'            => 'Prioridade',
            'state'               => 'State',
            'new-state'           => 'Novo State',
            'update-state'        => 'Atualizar State',
            'title'               => 'Título',
            'project'             => 'Projeto',
            'project-placeholder' => 'Privado Tarefa',
            'milestone'           => 'Marco',
            'customer'            => 'Cliente',
            'assignees'           => 'Responsáveis',
            'allocated-time'      => 'Allocated Hora',
            'time-spent'          => 'Hora Spent',
            'time-remaining'      => 'Hora Remaining',
            'progress'            => 'Progresso',
            'deadline'            => 'Prazo',
            'tags'                => 'Etiquetas',
            'stage'               => 'Estágio',
        ],

        'groups' => [
            'state'      => 'State',
            'project'    => 'Projeto',
            'milestone'  => 'Marco',
            'customer'   => 'Cliente',
            'deadline'   => 'Prazo',
            'stage'      => 'Estágio',
            'created-at' => 'Criado em',
        ],

        'filters' => [
            'title'             => 'Título',
            'priority'          => 'Prioridade',
            'low'               => 'Low',
            'high'              => 'High',
            'state'             => 'State',
            'tags'              => 'Etiquetas',
            'allocated-hours'   => 'Allocated Horas',
            'total-hours-spent' => 'Total Horas Spent',
            'remaining-hours'   => 'Remaining Horas',
            'overtime'          => 'Overtime',
            'progress'          => 'Progresso',
            'deadline'          => 'Prazo',
            'created-at'        => 'Criado em',
            'updated-at'        => 'Atualizado em',
            'assignees'         => 'Responsáveis',
            'customer'          => 'Cliente',
            'project'           => 'Projeto',
            'stage'             => 'Estágio',
            'milestone'         => 'Marco',
            'company'           => 'Empresa',
            'creator'           => 'Creator',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Tarefa restaurado',
                    'body'  => 'A Tarefa foi restaurada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Tarefa excluído',
                    'body'  => 'A Tarefa foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Tarefa excluído definitivamente',
                    'body'  => 'A Tarefa foi excluído definitivamente com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Tarefas restaurado',
                    'body'  => 'O Tarefas foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Tarefas excluído',
                    'body'  => 'O Tarefas foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Tarefas excluído definitivamente',
                    'body'  => 'O Tarefas foi excluído definitivamente com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Geral',

                'entries' => [
                    'title'       => 'Título',
                    'state'       => 'State',
                    'tags'        => 'Etiquetas',
                    'priority'    => 'Prioridade',
                    'description' => 'Descrição',
                ],
            ],

            'project-information' => [
                'title' => 'Projeto Information',

                'entries' => [
                    'project'   => 'Projeto',
                    'milestone' => 'Marco',
                    'customer'  => 'Cliente',
                    'assignees' => 'Responsáveis',
                    'deadline'  => 'Prazo',
                    'stage'     => 'Estágio',
                ],
            ],

            'time-tracking' => [
                'title' => 'Hora Tracking',

                'entries' => [
                    'allocated-time'        => 'Allocated Hora',
                    'time-spent'            => 'Hora Spent',
                    'time-spent-suffix'     => 'horas',
                    'time-remaining'        => 'Hora Remaining',
                    'time-remaining-suffix' => 'horas',
                    'progress'              => 'Progresso',
                ],
            ],

            'additional-information' => [
                'title' => 'Informações adicionais',
            ],

            'record-information' => [
                'title' => 'Record Information',

                'entries' => [
                    'created-at'   => 'Criado em',
                    'created-by'   => 'Criado por',
                    'last-updated' => 'Último atualizado',
                ],
            ],

            'statistics' => [
                'title' => 'Estatísticas',

                'entries' => [
                    'sub-tasks'         => 'Subtarefas',
                    'timesheet-entries' => 'Planilha de horas Entries',
                ],
            ],
        ],
    ],
];
