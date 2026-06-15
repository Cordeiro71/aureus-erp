<?php

return [
    'navigation' => [
        'title' => 'Localizações',
        'group' => 'Armazém Management',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Geral',

                'fields' => [
                    'location'                     => 'Localização',
                    'location-placeholder'         => 'eg. Spare Estoque',
                    'parent-location'              => 'Pai Localização',
                    'parent-location-hint-tooltip' => 'The main location that encompasses this location. For example, the \'Dispatch Zone\' is part of the \'Gate 1\'The principal localização aquele encompasses este localização. Para example, the \'Dispatch Zone\' is part de the \'Gate 1\' pai localização.',
                    'external-notes'               => 'Externo Notas',
                ],
            ],

            'settings' => [
                'title'  => 'Configurações',

                'fields' => [
                    'location-type'                 => 'Localização Tipo',
                    'company'                       => 'Empresa',
                    'storage-category'              => 'Storage Categoria',
                    'is-scrap'                      => 'Is a Sucata Localização?',
                    'is-scrap-hint-tooltip'         => 'Selecionar este caixa de seleção para designate este localização para storing scrapped ou damaged goods.',
                    'is-dock'                       => 'Is a Dock Localização?',
                    'is-dock-hint-tooltip'          => 'Selecionar este caixa de seleção para designate este localização para storing goods aquele are ready para shipment.',
                    'is-replenish'                  => 'Is a Replenish Localização?',
                    'is-replenish-hint-tooltip'     => 'Ativar este function para retrieve todos quantidades needed para reposição at este localização.',
                    'logistics'                     => 'Logistics',
                    'removal-strategy'              => 'Removal Strategy',
                    'removal-strategy-hint-tooltip' => 'Specifies the padrão method para determining the exact prateleira, lote, e localização de which para pick produtos. Este method can be enforced at the produto categoria level, com a fallback para pai localizações if não set here.',
                    'cyclic-counting'               => 'Cyclic Contagem',
                    'inventory-frequency'           => 'Estoque Frequency',
                    'last-inventory'                => 'Último Estoque',
                    'last-inventory-hint-tooltip'   => 'Data de the último estoque at este localização.',
                    'next-expected'                 => 'Próximo expected',
                    'next-expected-hint-tooltip'    => 'Data para próximo planned estoque baseado em cyclic schedule.',
                ],
            ],

            'additional' => [
                'title'  => 'Informações adicionais',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'location'         => 'Localização',
            'type'             => 'Tipo',
            'storage-category' => 'Storage Categoria',
            'company'          => 'Empresa',
            'deleted-at'       => 'excluído em',
            'created-at'       => 'Criado em',
            'updated-at'       => 'Atualizado em',
        ],

        'groups' => [
            'warehouse'       => 'Armazém',
            'type'            => 'Tipo',
            'created-at'      => 'Criado em',
            'updated-at'      => 'Atualizado em',
        ],

        'filters' => [
            'location' => 'Localização',
            'type'     => 'Tipo',
            'company'  => 'Empresa',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Localização atualizado',
                    'body'  => 'A Localização foi atualizada com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Localização restaurado',
                    'body'  => 'A Localização foi restaurada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Localização excluído',
                    'body'  => 'A Localização foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Localização excluído definitivamente',
                        'body'  => 'A Localização foi excluído definitivamente com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Localização could não be excluído',
                        'body'  => 'The localização cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print' => [
                'label' => 'Imprimir Código de barras',
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Localizações restaurado',
                    'body'  => 'O Localizações foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Localizações excluído',
                    'body'  => 'O Localizações foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Localizações excluído definitivamente',
                        'body'  => 'O Localizações foi excluído definitivamente com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Localizações could não be excluído',
                        'body'  => 'The localizações cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'  => 'Geral',

                'entries' => [
                    'location'                     => 'Localização',
                    'location-placeholder'         => 'eg. Spare Estoque',
                    'parent-location'              => 'Pai Localização',
                    'parent-location-hint-tooltip' => 'The main location that encompasses this location. For example, the \'Dispatch Zone\' is part of the \'Gate 1\'The principal localização aquele encompasses este localização. Para example, the \'Dispatch Zone\' is part de the \'Gate 1\' pai localização.',
                    'external-notes'               => 'Externo Notas',
                ],
            ],

            'settings' => [
                'title'  => 'Configurações',

                'entries' => [
                    'location-type'                 => 'Localização Tipo',
                    'company'                       => 'Empresa',
                    'storage-category'              => 'Storage Categoria',
                    'is-scrap'                      => 'Is a Sucata Localização?',
                    'is-scrap-hint-tooltip'         => 'Selecionar este caixa de seleção para designate este localização para storing scrapped ou damaged goods.',
                    'is-dock'                       => 'Is a Dock Localização?',
                    'is-dock-hint-tooltip'          => 'Selecionar este caixa de seleção para designate este localização para storing goods aquele are ready para shipment.',
                    'is-replenish'                  => 'Is a Replenish Localização?',
                    'is-replenish-hint-tooltip'     => 'Ativar este function para retrieve todos quantidades needed para reposição at este localização.',
                    'logistics'                     => 'Logistics',
                    'removal-strategy'              => 'Removal Strategy',
                    'removal-strategy-hint-tooltip' => 'Specifies the padrão method para determining the exact prateleira, lote, e localização de which para pick produtos. Este method can be enforced at the produto categoria level, com a fallback para pai localizações if não set here.',
                    'cyclic-counting'               => 'Cyclic Contagem',
                    'inventory-frequency'           => 'Estoque Frequency',
                    'last-inventory'                => 'Último Estoque',
                    'last-inventory-hint-tooltip'   => 'Data de the último estoque at este localização.',
                    'next-expected'                 => 'Próximo expected',
                    'next-expected-hint-tooltip'    => 'Data para próximo planned estoque baseado em cyclic schedule.',
                ],
            ],

            'additional' => [
                'title'  => 'Informações adicionais',
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
