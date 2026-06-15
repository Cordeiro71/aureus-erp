<?php

return [
    'navigation' => [
        'group' => 'Manutenção',
        'title' => 'Equipamento',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Informações gerais',
                'fields' => [
                    'name' => 'Nome',
                    'note' => 'Descrição',
                ],
            ],

            'settings' => [
                'title'  => 'Configurações',
                'fields' => [
                    'category'   => 'Categoria de equipamento',
                    'team'       => 'Manutenção Equipe',
                    'company'    => 'Empresa',
                    'technician' => 'Technician',
                    'owner'      => 'Owner',
                    'location'   => 'Used in localização',
                ],
            ],

            'product-information' => [
                'title'  => 'Produto Information',
                'fields' => [
                    'partner'                     => 'Fornecedor',
                    'partner-ref'                 => 'Fornecedor Referência',
                    'model'                       => 'Model',
                    'serial-no'                   => 'Número de série',
                    'effective-date'              => 'Data efetiva',
                    'effective-date-hint-tooltip' => 'Used as the starting point para calculating Mean Hora Entre Failure.',
                    'cost'                        => 'Custo',
                    'warranty-date'               => 'Warranty Data de expiração',
                ],
            ],

            'maintenance' => [
                'title'  => 'Manutenção',
                'fields' => [
                    'expected-mtbf' => 'Expected Mean Hora Entre Failure',
                ],
                'suffixes' => [
                    'days' => 'dias',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Equipamento Nome',
            'owner'      => 'Owner',
            'serial-no'  => 'Número de série',
            'category'   => 'Categoria de equipamento',
            'technician' => 'Technician',
            'company'    => 'Empresa',
            'created-at' => 'Criado em',
        ],

        'filters' => [
            'category'   => 'Categoria de equipamento',
            'team'       => 'Manutenção Equipe',
            'technician' => 'Technician',
        ],

        'groups' => [
            'category'   => 'Categoria de equipamento',
            'owner'      => 'Owner',
            'technician' => 'Technician',
            'vendor'     => 'Fornecedor',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Equipamento atualizado',
                    'body'  => 'O Equipamento foi atualizado com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Equipamento restaurado',
                    'body'  => 'O Equipamento foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Equipamento arquivado',
                    'body'  => 'O Equipamento foi arquivado com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Equipamento excluído',
                        'body'  => 'The equipamento has been permanently deleted.',
                    ],

                    'error' => [
                        'title' => 'Equipamento could não be excluído',
                        'body'  => 'Este equipamento is referenced por outro record.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Equipamento restaurado',
                    'body'  => 'O Selected equipamento foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Equipamento arquivado',
                    'body'  => 'O Selected equipamento foi arquivado com sucesso.',
                ],
            ],
        ],

        'empty-state' => [
            'create' => [
                'notification' => [
                    'title' => 'Equipamento criado',
                    'body'  => 'O Equipamento foi criado com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'Informações gerais',
                'entries' => [
                    'name' => 'Nome',
                    'note' => 'Descrição',
                ],
            ],

            'settings' => [
                'title'   => 'Configurações',
                'entries' => [
                    'category'   => 'Categoria de equipamento',
                    'team'       => 'Manutenção Equipe',
                    'company'    => 'Empresa',
                    'technician' => 'Technician',
                    'owner'      => 'Owner',
                    'location'   => 'Used in localização',
                ],
            ],

            'product-information' => [
                'title'   => 'Produto Information',
                'entries' => [
                    'partner'        => 'Fornecedor',
                    'partner-ref'    => 'Fornecedor Referência',
                    'model'          => 'Model',
                    'serial-no'      => 'Número de série',
                    'effective-date' => 'Data efetiva',
                    'cost'           => 'Custo',
                    'warranty-date'  => 'Warranty Data de expiração',
                ],
            ],

            'maintenance' => [
                'title'   => 'Manutenção',
                'entries' => [
                    'expected-mtbf'          => 'Expected Mean Hora Entre Failure',
                    'maintenance-count'      => 'Manutenção Contagem',
                    'maintenance-open-count' => 'Aberto Manutenção Contagem',
                    'assigned-at'            => 'Data de atribuição',
                    'scraped-at'             => 'Sucata Data',
                ],
                'suffixes' => [
                    'days' => 'dias',
                ],
            ],
        ],
    ],
];
