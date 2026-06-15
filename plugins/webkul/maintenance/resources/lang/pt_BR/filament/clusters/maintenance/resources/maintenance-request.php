<?php

return [
    'navigation' => [
        'group' => 'Manutenção',
        'title' => 'Manutenção Requests',
    ],

    'form' => [
        'sections' => [
            'request' => [
                'title'  => 'Request',
                'fields' => [
                    'name'                      => 'Request',
                    'name-placeholder'          => 'e.g. Screen não working',
                    'equipment'                 => 'Equipamento',
                    'category'                  => 'Categoria',
                    'requested-at'              => 'Request Data',
                    'requested-at-hint-tooltip' => 'The data the solicitação de manutenção was reported.',
                    'maintenance-type'          => 'Manutenção Tipo',
                    'recurrent'                 => 'Recurrent',
                    'repeat-every'              => 'Repeat Every',
                    'maintenance-type-options'  => [
                        'corrective' => 'Corrective',
                        'preventive' => 'Preventive',
                    ],
                ],
                'tabs' => [
                    'notes' => [
                        'title'  => 'Notas',
                        'fields' => [
                            'description'             => 'Interno Notas',
                            'description-placeholder' => 'Interno notas',
                        ],
                    ],
                    'instructions' => [
                        'title'  => 'Instructions',
                        'fields' => [
                            'instruction-type'         => 'Instruction Tipo',
                            'instruction-type-options' => [
                                'pdf'          => 'PDF',
                                'google-slide' => 'Google Slide',
                                'text'         => 'Texto',
                            ],
                            'instruction-pdf'              => 'PDF',
                            'instruction-google-slide'     => 'Google Slide',
                            'instruction-text'             => 'Descrição',
                            'instruction-text-placeholder' => 'Descrição',
                        ],
                    ],
                ],
            ],

            'settings' => [
                'title'  => 'Configurações',
                'fields' => [
                    'team'                      => 'Equipe',
                    'responsible'               => 'Responsible',
                    'scheduled-at'              => 'Data programada',
                    'scheduled-at-hint-tooltip' => 'The data e hora este manutenção work is planned para iniciar.',
                    'duration'                  => 'Duration',
                    'duration-hint-tooltip'     => 'Expected manutenção duration.',
                    'duration-suffix'           => 'horas',
                    'priority'                  => 'Prioridade',
                    'company'                   => 'Empresa',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Subjects',
            'creator'    => 'Criado por Usuário',
            'technician' => 'Technician',
            'category'   => 'Categoria',
            'stage'      => 'Estágio',
            'company'    => 'Empresa',
        ],

        'groups' => [
            'stage'       => 'Estágio',
            'assigned-to' => 'Atribuído a',
            'category'    => 'Categoria',
            'created-by'  => 'Criado por',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Solicitação de manutenção restaurado',
                    'body'  => 'A Solicitação de manutenção foi restaurada com sucesso.',
                ],
            ],
            'delete' => [
                'notification' => [
                    'title' => 'Solicitação de manutenção arquivado',
                    'body'  => 'A Solicitação de manutenção foi arquivada com sucesso.',
                ],
            ],
            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Solicitação de manutenção excluído',
                        'body'  => 'The solicitação de manutenção has been permanently deleted.',
                    ],
                    'error' => [
                        'title' => 'Solicitação de manutenção could não be excluído',
                        'body'  => 'Este solicitação de manutenção is referenced por outro record.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Manutenção requests restaurado',
                    'body'  => 'The selected manutenção requests have been restored successfully.',
                ],
            ],
            'delete' => [
                'notification' => [
                    'title' => 'Manutenção requests arquivado',
                    'body'  => 'The selected manutenção requests have been arquivado successfully.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'request' => [
                'title'   => 'Request',
                'entries' => [
                    'name'                     => 'Request',
                    'equipment'                => 'Equipamento',
                    'category'                 => 'Categoria',
                    'requested-at'             => 'Request Data',
                    'maintenance-type'         => 'Manutenção Tipo',
                    'instruction-type'         => 'Instruction Tipo',
                    'instruction-pdf'          => 'PDF',
                    'instruction-google-slide' => 'Google Slide',
                    'description'              => 'Interno Notas',
                    'instruction-text'         => 'Descrição',
                ],
            ],

            'settings' => [
                'title'   => 'Configurações',
                'entries' => [
                    'team'            => 'Equipe',
                    'responsible'     => 'Responsible',
                    'scheduled-at'    => 'Data programada',
                    'duration'        => 'Duration',
                    'duration-suffix' => 'horas',
                    'priority'        => 'Prioridade',
                    'company'         => 'Empresa',
                ],
            ],
        ],
    ],
];
