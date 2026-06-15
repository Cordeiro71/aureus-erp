<?php

return [
    'navigation' => [
        'title' => 'Centros de trabalho',
        'group' => 'Configuração',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Geral',
                'fields' => [
                    'name'                     => 'Nome',
                    'name-placeholder'         => 'eg. Assembly Linha 1',
                    'code'                     => 'Code',
                    'code-placeholder'         => 'eg. AL1',
                    'working-state'            => 'Working State',
                    'color'                    => 'Cor',
                    'tags'                     => 'Etiqueta',
                    'alternative-work-centers' => 'Centros de trabalho alternativos',
                    'company'                  => 'Empresa',
                    'calendar'                 => 'Working Horas',
                ],
            ],

            'information' => [
                'title'     => 'Informações gerais',
                'fieldsets' => [
                    'production-information' => 'Produção Information',
                    'costing-information'    => 'Costing Information',
                ],
                'fields' => [
                    'default-capacity' => 'Padrão Capacidade',
                    'time-efficiency'  => 'Hora Efficiency',
                    'oee-target'       => 'OEE Target',
                    'costs-per-hour'   => 'Custo por Hora',
                    'cost-suffix'      => 'por hora',
                    'setup-time'       => 'Setup Hora',
                    'cleanup-time'     => 'Cleanup Hora',
                    'time-suffix'      => 'minutos',
                ],
            ],

            'description' => [
                'title'  => 'Descrição',
                'fields' => [
                    'note'             => 'Descrição',
                    'note-placeholder' => 'Descrição de the centro de trabalho...',
                ],
            ],

            'specific-capacity' => [
                'title'  => 'Specific Capacidade',
                'fields' => [
                    'records' => 'Specific Capacidade',
                ],
                'columns' => [
                    'product'      => 'Produto',
                    'product-uom'  => 'UOM',
                    'capacity'     => 'Capacidade',
                    'setup-time'   => 'Setup Hora',
                    'cleanup-time' => 'Cleanup Hora',
                ],
                'actions' => [
                    'add' => 'Adicionar uma linha',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'             => 'Nome',
            'code'             => 'Code',
            'company'          => 'Empresa',
            'calendar'         => 'Working Horas',
            'working-state'    => 'Working State',
            'default-capacity' => 'Capacidade',
            'time-efficiency'  => 'Efficiency',
            'costs-per-hour'   => 'Custo por Hora',
            'deleted-at'       => 'Excluído em',
            'created-at'       => 'Criado em',
            'updated-at'       => 'Atualizado em',
        ],

        'groups' => [
            'company' => 'Empresa',
        ],

        'filters' => [
            'company'       => 'Empresa',
            'working-state' => 'Working State',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Centro de trabalho restaurado',
                    'body'  => 'O Centro de trabalho foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Centro de trabalho arquivado',
                    'body'  => 'O Centro de trabalho foi arquivado com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Centro de trabalho excluído',
                        'body'  => 'The centro de trabalho has been permanently deleted.',
                    ],

                    'error' => [
                        'title' => 'Centro de trabalho could não be excluído',
                        'body'  => 'The centro de trabalho cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Centros de trabalho restaurado',
                    'body'  => 'The selected centros de trabalho have been restored successfully.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Centros de trabalho arquivado',
                    'body'  => 'The selected centros de trabalho have been arquivado successfully.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Centros de trabalho excluído',
                        'body'  => 'The selected centros de trabalho have been permanently deleted.',
                    ],

                    'error' => [
                        'title' => 'Centros de trabalho could não be excluído',
                        'body'  => 'One ou more selected centros de trabalho are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Informações gerais',

                'entries' => [
                    'name'                     => 'Centro de trabalho Nome',
                    'code'                     => 'Code',
                    'working-state'            => 'Working State',
                    'tags'                     => 'Etiqueta',
                    'alternative-work-centers' => 'Centros de trabalho alternativos',
                    'company'                  => 'Empresa',
                    'calendar'                 => 'Working Horas',
                ],
            ],

            'information' => [
                'title'     => 'Informações gerais',
                'fieldsets' => [
                    'production-information' => 'Produção Information',
                    'costing-information'    => 'Costing Information',
                ],

                'entries' => [
                    'default-capacity' => 'Padrão Capacidade',
                    'time-efficiency'  => 'Hora Efficiency',
                    'oee-target'       => 'OEE Target',
                    'costs-per-hour'   => 'Custo por Hora',
                    'cost-suffix'      => 'por centro de trabalho',
                    'setup-time'       => 'Setup Hora',
                    'cleanup-time'     => 'Cleanup Hora',
                    'time-suffix'      => 'minutos',
                ],
            ],

            'description' => [
                'title'   => 'Descrição',
                'entries' => [
                    'note' => 'Descrição',
                ],
            ],

            'specific-capacity' => [
                'title'   => 'Specific Capacidades',
                'columns' => [
                    'product'      => 'Produto',
                    'product-uom'  => 'UOM',
                    'capacity'     => 'Capacidade',
                    'setup-time'   => 'Setup Hora',
                    'cleanup-time' => 'Cleanup Hora',
                ],
            ],

            'record-information' => [
                'title' => 'Record Information',

                'entries' => [
                    'created-by'   => 'Criado por',
                    'created-at'   => 'Criado em',
                    'last-updated' => 'Último atualizado',
                ],
            ],
        ],
    ],
];
