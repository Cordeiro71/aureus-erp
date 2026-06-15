<?php

return [
    'navigation' => [
        'title' => 'Projetos',
        'group' => 'Projeto',
    ],

    'global-search' => [
        'project-manager' => 'Projeto Gerente',
        'customer'        => 'Cliente',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Geral',

                'fields' => [
                    'name'             => 'Nome',
                    'name-placeholder' => 'Projeto Nome...',
                    'description'      => 'Descrição',
                ],
            ],

            'additional' => [
                'title' => 'Informações adicionais',

                'fields' => [
                    'project-manager'             => 'Projeto Gerente',
                    'customer'                    => 'Cliente',
                    'start-date'                  => 'Data de início',
                    'end-date'                    => 'Data de término',
                    'allocated-hours'             => 'Allocated Horas',
                    'allocated-hours-helper-text' => 'In horas (Eg. 1.5 horas means 1 hora 30 minutos)',
                    'tags'                        => 'Etiquetas',
                    'company'                     => 'Empresa',
                ],
            ],

            'settings' => [
                'title' => 'Configurações',

                'fields' => [
                    'visibility'                   => 'Visibility',
                    'visibility-hint-tooltip'      => 'Permita que funcionários acessem seu projeto ou tarefas adicionando-os como seguidores. eles terão acesso automático a quaisquer tarefas atribuídas a eles..',
                    'private-description'          => 'Invited interno usuários only.',
                    'internal-description'         => 'Todos os usuários internos podem ver.',
                    'public-description'           => 'Invited portal usuários e todos interno usuários.',
                    'time-management'              => 'Hora Management',
                    'allow-timesheets'             => 'Permitir planilhas de horas',
                    'allow-timesheets-helper-text' => 'Registro hora ligado tarefas e track progresso',
                    'task-management'              => 'Tarefa Management',
                    'allow-milestones'             => 'Permitir marcos',
                    'allow-milestones-helper-text' => 'Monitor key marcos aquele are essential para achieving sucesso.',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'            => 'Nome',
            'customer'        => 'Cliente',
            'start-date'      => 'Data de início',
            'end-date'        => 'Data de término',
            'planned-date'    => 'Planned Data',
            'remaining-hours' => 'Remaining Horas',
            'project-manager' => 'Projeto Gerente',
        ],

        'groups' => [
            'stage'           => 'Estágio',
            'project-manager' => 'Projeto Gerente',
            'customer'        => 'Cliente',
            'created-at'      => 'Criado em',
        ],

        'filters' => [
            'name'             => 'Nome',
            'visibility'       => 'Visibility',
            'start-date'       => 'Data de início',
            'end-date'         => 'Data de término',
            'allow-timesheets' => 'Permitir planilhas de horas',
            'allow-milestones' => 'Permitir marcos',
            'allocated-hours'  => 'Allocated Horas',
            'created-at'       => 'Criado em',
            'updated-at'       => 'Atualizado em',
            'stage'            => 'Estágio',
            'customer'         => 'Cliente',
            'project-manager'  => 'Projeto Gerente',
            'company'          => 'Empresa',
            'creator'          => 'Creator',
            'tags'             => 'Etiquetas',
        ],

        'actions' => [
            'tasks'      => ':contagem Tarefas',
            'milestones' => ':concluído marcos concluído out de :todos',

            'restore' => [
                'notification' => [
                    'title' => 'Projeto restaurado',
                    'body'  => 'O Projeto foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Projeto excluído',
                    'body'  => 'O Projeto foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [

                'notification' => [

                    'success' => [
                        'title' => 'Projeto permanently excluído',
                        'body'  => 'O Projeto foi permanently deleted com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Projeto cannot be permanently excluído',
                        'body'  => 'The projeto is associated com outro records.',
                    ],

                ],
            ],

        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Geral',

                'entries' => [
                    'name'             => 'Nome',
                    'name-placeholder' => 'Projeto Nome...',
                    'description'      => 'Descrição',
                ],
            ],

            'additional' => [
                'title' => 'Informações adicionais',

                'entries' => [
                    'project-manager'        => 'Projeto Gerente',
                    'customer'               => 'Cliente',
                    'project-timeline'       => 'Projeto Timeline',
                    'allocated-hours'        => 'Allocated Horas',
                    'allocated-hours-suffix' => 'horas',
                    'remaining-hours'        => 'Remaining Horas',
                    'remaining-hours-suffix' => 'horas',
                    'current-stage'          => 'Atual Estágio',
                    'tags'                   => 'Etiquetas',
                ],
            ],

            'statistics' => [
                'title' => 'Estatísticas',

                'entries' => [
                    'total-tasks'         => 'Total Tarefas',
                    'milestones-progress' => 'Marcos Progresso',
                ],
            ],

            'record-information' => [
                'title' => 'Record Information',

                'entries' => [
                    'created-at'   => 'Criado em',
                    'created-by'   => 'Criado por',
                    'last-updated' => 'Último atualizado',
                ],
            ],

            'settings' => [
                'title' => 'Projeto Configurações',

                'entries' => [
                    'visibility'         => 'Visibility',
                    'timesheets-enabled' => 'Planilhas de horas Ativado',
                    'milestones-enabled' => 'Marcos Ativado',
                ],
            ],
        ],
    ],
];
