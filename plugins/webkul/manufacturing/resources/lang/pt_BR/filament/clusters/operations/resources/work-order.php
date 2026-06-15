<?php

return [
    'navigation' => [
        'title' => 'Ordens de trabalho',
        'group' => 'Operações',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Geral',
                'fields' => [
                    'work-order'          => 'Ordem de trabalho',
                    'work-center'         => 'Centro de trabalho',
                    'product'             => 'Produto',
                    'quantity'            => 'Quantidade',
                    'manufacturing-order' => 'Manufatura Pedido',
                    'lot-serial'          => 'Lote/Número de série',
                    'start-date'          => 'Data de início',
                    'end-date'            => 'Data de término',
                    'date-range-separator'=> 'para',
                    'expected-duration'   => 'Expected Duration',
                    'duration-suffix'     => 'minutos',
                    'real-duration'       => 'Real Duration',
                ],
            ],
        ],
        'tabs' => [
            'time-tracking' => [
                'title'      => 'Hora Tracking',
                'add-action' => 'Adicionar uma linha',
                'columns'    => [
                    'user'         => 'Usuário',
                    'duration'     => 'Duration',
                    'start-date'   => 'Data de início',
                    'end-date'     => 'Data de término',
                    'productivity' => 'Productivity',
                ],
                'footer' => [
                    'real-duration' => 'Real Duration',
                ],
            ],
            'components' => [
                'title'      => 'Components',
                'add-action' => 'Adicionar uma linha',
                'columns'    => [
                    'product'    => 'Produto',
                    'from' => 'De',
                    'to-consume' => 'Para Consume',
                    'quantity'   => 'Quantidade',
                    'uom'        => 'UoM',
                ],
            ],
            'work-instruction' => [
                'title'   => 'Work Instruction',
                'entries' => [
                    'operation' => 'Operação',
                    'worksheet' => 'Worksheet',
                ],
            ],
            'blocked-by' => [
                'title'  => 'Bloqueado Por',
                'fields' => [
                    'work-orders' => 'Ordens de trabalho',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'operation'           => 'Operação',
            'work-center'         => 'Centro de trabalho',
            'manufacturing-order' => 'Manufatura Pedido',
            'product'             => 'Produto',
            'quantity-remaining'  => 'Quantidade Remaining',
            'lot-serial'          => 'Lote/Serial',
            'start'               => 'Iniciar',
            'end'                 => 'End',
            'expected-duration'   => 'Expected Duration',
            'real-duration'       => 'Real Duration',
            'status'              => 'Status',
        ],
        'groups' => [
            'status'              => 'Status',
            'work-center'         => 'Centro de trabalho',
            'manufacturing-order' => 'Manufatura Pedido',
            'product'             => 'Produto',
            'start'               => 'Iniciar',
            'end'                 => 'End',
        ],
        'filters' => [
            'work-order'          => 'Ordem de trabalho',
            'status'              => 'Status',
            'operation'           => 'Operação',
            'work-center'         => 'Centro de trabalho',
            'manufacturing-order' => 'Manufatura Pedido',
            'product'             => 'Produto',
            'start'               => 'Iniciar',
            'end'                 => 'End',
            'created-at'          => 'Criado em',
            'updated-at'          => 'Atualizado em',
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'Geral',
                'entries' => [
                    'work-order'          => 'Ordem de trabalho',
                    'work-center'         => 'Centro de trabalho',
                    'product'             => 'Produto',
                    'quantity'            => 'Quantidade',
                    'manufacturing-order' => 'Manufatura Pedido',
                    'lot-serial'          => 'Lote/Número de série',
                    'start-date'          => 'Data de início',
                    'end-date'            => 'Data de término',
                    'expected-duration'   => 'Expected Duration',
                    'real-duration'       => 'Real Duration',
                ],
            ],
        ],
        'tabs' => [
            'time-tracking' => [
                'title'  => 'Hora Tracking',
                'footer' => [
                    'real-duration' => 'Real Duration',
                ],
            ],
            'components' => [
                'title' => 'Components',
            ],
            'work-instruction' => [
                'title'   => 'Work Instruction',
                'entries' => [
                    'operation' => 'Operação',
                    'worksheet' => 'Worksheet',
                ],
            ],
            'blocked-by' => [
                'title'   => 'Bloqueado Por',
                'columns' => [
                    'work-order'  => 'Ordem de trabalho',
                    'work-center' => 'Centro de trabalho',
                    'status'      => 'Status',
                ],
            ],
        ],
    ],

    'pages' => [
        'list' => [
            'header-actions' => [
                'create' => [
                    'label' => 'Novo Ordem de trabalho',
                ],
            ],
        ],
    ],
];
