<?php

return [
    'navigation' => [
        'title' => 'Operações',
        'group' => 'Configuração',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Geral',
                'fields' => [
                    'name'              => 'Operação',
                    'name-placeholder'  => 'eg. Cutting',
                    'bill-of-material'  => 'Lista de materiais',
                    'work-center'       => 'Centro de trabalho',
                    'apply-on-variants' => 'Aplicar nas variantes',
                    'company'           => 'Empresa',
                    'blocked-by'        => 'Bloqueado Por',
                ],
            ],
            'settings' => [
                'title'  => 'Configurações',
                'fields' => [
                    'time-mode'                  => 'Duration Computation',
                    'time-mode-batch'            => 'Baseado em',
                    'time-mode-batch-prefix'     => 'último',
                    'time-mode-batch-suffix'     => 'ordens de trabalho',
                    'manual-cycle-time'          => 'Padrão Duration',
                    'manual-cycle-time-suffix'   => 'minutos',
                ],
            ],
            'worksheet' => [
                'title'  => 'Work Sheet',
                'fields' => [
                    'worksheet'                => 'Worksheet',
                    'pdf'                      => 'PDF',
                    'google-slide'             => 'Google Slide',
                    'google-slide-placeholder' => 'Google Slide Link',
                    'description'              => 'Descrição',
                    'description-placeholder'  => 'Descrição de the operação...',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'              => 'Operação',
            'bill-of-material'  => 'Lista de materiais',
            'work-center'       => 'Centro de trabalho',
            'time-mode'         => 'Duration Computation',
            'manual-cycle-time' => 'Padrão Duration',
            'worksheet-type'    => 'Worksheet',
            'deleted-at'        => 'Excluído em',
            'created-at'        => 'Criado em',
            'updated-at'        => 'Atualizado em',
        ],
        'filters' => [
            'work-center'    => 'Centro de trabalho',
            'time-mode'      => 'Duration Computation',
            'worksheet-type' => 'Worksheet',
        ],
        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Operação restaurado',
                    'body'  => 'A Operação foi restaurada com sucesso.',
                ],
            ],
            'delete' => [
                'notification' => [
                    'title' => 'Operação arquivado',
                    'body'  => 'A Operação foi arquivada com sucesso.',
                ],
            ],
            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Operação excluído',
                        'body'  => 'The operação has been permanently deleted.',
                    ],
                    'error' => [
                        'title' => 'Operação could não be excluído',
                        'body'  => 'The operação cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],
        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Operações restaurado',
                    'body'  => 'The selected operações have been restored successfully.',
                ],
            ],
            'delete' => [
                'notification' => [
                    'title' => 'Operações arquivado',
                    'body'  => 'The selected operações have been arquivado successfully.',
                ],
            ],
            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Operações excluído',
                        'body'  => 'The selected operações have been permanently deleted.',
                    ],
                    'error' => [
                        'title' => 'Operações could não be excluído',
                        'body'  => 'One ou more selected operações are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'Informações gerais',
                'entries' => [
                    'name'              => 'Operação',
                    'bill-of-material'  => 'Lista de materiais',
                    'work-center'       => 'Centro de trabalho',
                    'apply-on-variants' => 'Aplicar nas variantes',
                    'company'           => 'Empresa',
                ],
            ],
            'settings' => [
                'title'   => 'Configurações',
                'entries' => [
                    'time-mode'                => 'Duration Computation',
                    'time-mode-batch'          => 'Baseado em',
                    'manual-cycle-time'        => 'Padrão Duration',
                    'manual-cycle-time-suffix' => 'minutos',
                ],
            ],
            'worksheet' => [
                'title'   => 'Work Sheet',
                'entries' => [
                    'worksheet'    => 'Worksheet',
                    'pdf'          => 'PDF',
                    'google-slide' => 'Google Slide',
                    'description'  => 'Descrição',
                ],
            ],
            'record-information' => [
                'title'   => 'Record Information',
                'entries' => [
                    'created-by'   => 'Criado por',
                    'created-at'   => 'Criado em',
                    'last-updated' => 'Último atualizado',
                ],
            ],
        ],
    ],
];
