<?php

return [
    'navigation' => [
        'title' => 'Produtos',
        'group' => 'Estoque',
    ],

    'form' => [
        'sections' => [
            'inventory' => [
                'title' => 'Estoque',

                'fieldsets' => [
                    'tracking' => [
                        'title' => 'Tracking',

                        'fields' => [
                            'track-inventory'              => 'Track Estoque',
                            'track-inventory-hint-tooltip' => 'Um produto armazenável é aquele que requer gestão de estoque..',
                            'track-by'                     => 'Track Por',
                            'expiration-date'              => 'Data de expiração',
                            'expiration-date-hint-tooltip' => 'If selected, you can specify expiration datas para the produto e its associated lote/números de série.',
                        ],
                    ],

                    'operation' => [
                        'title' => 'Operações',

                        'fields' => [
                            'routes'              => 'Rotas',
                            'routes-hint-tooltip' => 'Based on the installed modules, this setting allows you to define the product\'Baseado em the installed módulos, este configuração allows you para define the produto\'s rota, such as purchasing, manufatura, ou replenishing ligado pedido.',
                        ],
                    ],

                    'logistics' => [
                        'title' => 'Logistics',

                        'fields' => [
                            'responsible'              => 'Responsible',
                            'responsible-hint-tooltip' => 'Entrega lead hora (in dias) represents the promised duration entre pedido de venda confirmation e produto entrega.',
                            'weight'                   => 'Peso',
                            'volume'                   => 'Volume',
                            'sale-delay'               => 'Cliente Lead Hora (Dias)',
                            'sale-delay-hint-tooltip'  => 'Entrega lead hora (in dias) represents the promised duration entre pedido de venda confirmation e produto entrega.',
                        ],
                    ],

                    'traceability' => [
                        'title' => 'Traceability',

                        'fields' => [
                            'expiration-date'               => 'Data de expiração (Dias)',
                            'expiration-date-hint-tooltip'  => 'If selected, you can set expiration datas para the produto e its associated lote/números de série.',
                            'best-before-date'              => 'Válido até (Dias)',
                            'best-before-date-hint-tooltip' => 'The number de dias antes the data de expiração when the produto begins para deteriorate, though it is still safe para use. Este is calculated baseado em the lote/número de série.',
                            'removal-date'                  => 'Removal Data (Dias)',
                            'removal-date-hint-tooltip'     => 'The number de dias antes the data de expiração when the produto should be removed de estoque. Este is calculated baseado em the lote/número de série.',
                            'alert-date'                    => 'Alerta Data (Dias)',
                            'alert-date-hint-tooltip'       => 'The number de dias antes the data de expiração when an alerta should be triggered para the lote/número de série. Este is calculated baseado em the lote/número de série.',
                        ],
                    ],
                ],
            ],

            'additional' => [
                'title' => 'Adicional',
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'inventory' => [
                'title' => 'Estoque',

                'entries' => [
                ],

                'fieldsets' => [
                    'tracking' => [
                        'title' => 'Tracking',

                        'entries' => [
                            'track-inventory' => 'Track Estoque',
                            'track-by'        => 'Track Por',
                            'expiration-date' => 'Data de expiração',
                        ],
                    ],

                    'operation' => [
                        'title' => 'Operações',

                        'entries' => [
                            'routes' => 'Rotas',
                        ],
                    ],

                    'logistics' => [
                        'title' => 'Logistics',

                        'entries' => [
                            'responsible' => 'Responsible',
                            'weight'      => 'Peso',
                            'volume'      => 'Volume',
                            'sale-delay'  => 'Cliente Lead Hora (Dias)',
                        ],
                    ],

                    'traceability' => [
                        'title' => 'Traceability',

                        'entries' => [
                            'expiration-date'  => 'Data de expiração (Dias)',
                            'best-before-date' => 'Válido até (Dias)',
                            'removal-date'     => 'Removal Data (Dias)',
                            'alert-date'       => 'Alerta Data (Dias)',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
