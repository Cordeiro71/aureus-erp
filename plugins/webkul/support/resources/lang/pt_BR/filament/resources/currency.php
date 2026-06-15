<?php

return [
    'title' => 'Moedas',

    'navigation' => [
        'title' => 'Moedas',
        'group' => 'Configurações',
    ],

    'form' => [
        'sections' => [
            'currency-details' => [
                'title' => 'Moeda Information',

                'fields' => [
                    'name'         => 'Moeda Nome',
                    'name-tooltip' => 'Enter the official moeda nome',
                    'symbol'       => 'Moeda Symbol',
                    'full-name'    => 'Nome completo',
                    'iso-numeric'  => 'ISO Numérico Code',
                ],
            ],

            'format-information' => [
                'title' => 'Format Configuração',

                'fields' => [
                    'decimal-places'        => 'Decimal Places',
                    'rounding'              => 'Rounding Precisão',
                    'rounding-helper-text'  => 'Set the rounding precisão para moeda calculations',
                ],
            ],

            'status-and-configuration-information' => [
                'title' => 'Status & Configuração',

                'fields' => [
                    'status' => 'Status',
                ],
            ],

            'rates' => [
                'title'       => 'Moeda Taxas',
                'description' => 'Manage historic taxas de câmbio para este moeda relative para the base moeda (USD).',

                'fields' => [
                    'name'              => 'Data',
                    'unit-per-currency' => 'Unidade Por :moeda',
                    'currency-per-unit' => ':moeda Por Unidade',
                ],

                'add-rate'   => 'Adicionar taxa',
                'item-label' => 'Taxa',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'           => 'Moeda Nome',
            'symbol'         => 'Symbol',
            'full-name'      => 'Nome completo',
            'iso-numeric'    => 'ISO Code',
            'decimal-places' => 'Decimal Places',
            'rounding'       => 'Rounding',
            'status'         => 'Status',
            'created-at'     => 'Criado em',
            'updated-at'     => 'Atualizado em',
        ],

        'groups' => [
            'name'           => 'Nome',
            'status'         => 'Status',
            'decimal-places' => 'Decimal Places',
            'creation-date'  => 'Creation Data',
            'last-update'    => 'Último Atualizar',
        ],

        'filters' => [
            'status' => 'Status',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title'   => 'Moeda excluído',
                    'body'    => 'A Moeda foi excluído com sucesso.',

                    'success' => [
                        'title' => 'Moeda excluído',
                        'body'  => 'A Moeda foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Moeda could não be excluído',
                        'body'  => 'The moeda cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Moedas excluído',
                    'body'  => 'The moedas have been deleted successfully.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'currency-details' => [
                'title' => 'Moeda Information',

                'entries' => [
                    'name'         => 'Moeda Nome',
                    'symbol'       => 'Moeda Symbol',
                    'full-name'    => 'Nome completo',
                    'iso-numeric'  => 'ISO Numérico Code',
                ],
            ],

            'format-information' => [
                'title' => 'Format Configuração',

                'entries' => [
                    'decimal-places' => 'Decimal Places',
                    'rounding'       => 'Rounding Precisão',
                ],
            ],

            'status-and-configuration-information' => [
                'title' => 'Status & Configuração',

                'entries' => [
                    'status' => 'Status',
                ],
            ],

            'rates' => [
                'title'       => 'Moeda Taxas',

                'entries' => [
                    'name'              => 'Data',
                    'unit-per-currency' => 'Unidade Por :moeda',
                    'currency-per-unit' => ':moeda Por Unidade',
                ],
            ],
        ],
    ],
];
