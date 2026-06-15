<?php

return [
    'navigation' => [
        'title' => 'Manufatura Pedidos',
        'group' => 'Operações',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Geral',
                'fields' => [
                    'product'                => 'Produto',
                    'quantity'               => 'Quantidade',
                    'uom'                    => 'UoM',
                    'bill-of-material'       => 'Lista de materiais',
                    'scheduled-date'         => 'Data programada',
                    'scheduled-end'          => 'Scheduled End',
                    'responsible'            => 'Responsible',
                    'to-produce'             => 'Para Produce',
                    'to-produce-placeholder' => 'Imagem preview',
                ],
            ],
        ],
        'tabs' => [
            'components' => [
                'title'        => 'Components',
                'add-action'   => 'Adicionar uma linha',
                'process-note' => 'Components will be generated as the manufatura process is built.',
                'columns'      => [
                    'component'          => 'Produto',
                    'from'               => 'De',
                    'to-consume'         => 'Para Consume',
                    'to-consume-tooltip' => 'Insufficient quantidade disponível',
                    'quantity'           => 'Quantidade',
                    'uom'                => 'UoM',
                    'forecast'           => 'Forecast',
                ],
            ],
            'work-orders' => [
                'title'        => 'Ordens de trabalho',
                'add-action'   => 'Adicionar uma linha',
                'process-note' => 'Ordens de trabalho will be generated depois the manufatura process is configured.',
                'columns'      => [
                    'operation'          => 'Operação',
                    'work-center'        => 'Centro de trabalho',
                    'product'            => 'Produto',
                    'quantity-remaining' => 'Quantidade Remaining',
                    'quantity-produced'  => 'Quantidade Produced',
                    'start'              => 'Iniciar',
                    'end'                => 'End',
                    'expected-duration'  => 'Expected Duration',
                    'real-duration'      => 'Real Duration',
                    'status'             => 'Status',
                    'lot-serial'         => 'Lote/Serial',
                ],
            ],
            'by-products' => [
                'title'        => 'Por-Produtos',
                'process-note' => 'Por-produtos will be generated as the manufatura process is built.',
                'columns'      => [
                    'product'    => 'Produto',
                    'to'         => 'Para',
                    'to-produce' => 'Para Produce',
                    'uom'        => 'UoM',
                ],
            ],
            'miscellaneous' => [
                'title'  => 'Miscellaneous',
                'fields' => [
                    'operation-type'             => 'Operação Tipo',
                    'source'                     => 'Origem',
                    'finished-products-location' => 'Finished Produtos Localização',
                    'company'                    => 'Empresa',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'reference'              => 'Referência',
            'start'                  => 'Iniciar',
            'end'                    => 'End',
            'deadline'               => 'Prazo',
            'product'                => 'Produto',
            'lot-serial-number'      => 'Lote/Número de série',
            'bill-of-material'       => 'Lista de materiais',
            'source'                 => 'Origem',
            'responsible'            => 'Responsible',
            'mo-readiness'           => 'MO Readiness',
            'component-status'       => 'Component Status',
            'quantity'               => 'Quantidade',
            'uom'                    => 'UoM',
            'consumption-efficiency' => 'Consumption Efficiency',
            'expected-duration'      => 'Expected Duration',
            'real-duration'          => 'Real Duration',
            'company'                => 'Empresa',
            'state'                  => 'State',
        ],
        'groups' => [
            'state'            => 'State',
            'product'          => 'Produto',
            'bill-of-material' => 'Lista de materiais',
            'responsible'      => 'Responsible',
            'deadline'         => 'Prazo',
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'Geral',
                'entries' => [
                    'product'                  => 'Produto',
                    'scheduled-date'           => 'Data programada',
                    'responsible'              => 'Responsible',
                    'quantity'                 => 'Quantidade',
                    'uom'                      => 'UoM',
                    'bill-of-material'         => 'Lista de materiais',
                    'operation-type'           => 'Operação Tipo',
                    'consumption-efficiency'   => 'Consumption Efficiency',
                ],
            ],
        ],
        'tabs' => [
            'components' => [
                'title'        => 'Components',
                'process-note' => 'Components will be disponível depois the manufatura process is configured.',
                'columns'      => [
                    'component' => 'Component',
                    'quantity'  => 'Quantidade',
                    'uom'       => 'UoM',
                ],
            ],
            'work-orders' => [
                'title'        => 'Ordens de trabalho',
                'process-note' => 'Ordens de trabalho will be disponível depois the manufatura process is configured.',
                'columns'      => [
                    'operation'          => 'Operação',
                    'work-center'        => 'Centro de trabalho',
                    'product'            => 'Produto',
                    'quantity-remaining' => 'Quantidade Remaining',
                    'expected-duration'  => 'Expected Duration',
                    'real-duration'      => 'Real Duration',
                    'lot-serial'         => 'Lote/Serial',
                    'start'              => 'Iniciar',
                    'end'                => 'End',
                ],
            ],
            'by-products' => [
                'title'        => 'Por-Produtos',
                'process-note' => 'Por-produtos will be disponível depois the manufatura process is configured.',
                'columns'      => [
                    'product'    => 'Produto',
                    'to'         => 'Para',
                    'to-produce' => 'Para Produce',
                    'uom'        => 'UoM',
                ],
            ],
            'miscellaneous' => [
                'title'   => 'Miscellaneous',
                'entries' => [
                    'operation-type'             => 'Operação Tipo',
                    'source'                     => 'Origem',
                    'finished-products-location' => 'Finished Produtos Localização',
                    'company'                    => 'Empresa',
                ],
            ],
        ],
    ],

    'pages' => [
        'shared' => [
            'header-actions' => [
                'confirm' => [
                    'label'        => 'Confirmar',
                    'notification' => [
                        'title' => 'Manufatura pedido confirmado',
                    ],
                ],

                'cancel' => [
                    'label'        => 'Cancelar',
                    'notification' => [
                        'title' => 'Manufatura pedido cancelado',
                    ],
                ],
            ],
        ],
    ],
];
