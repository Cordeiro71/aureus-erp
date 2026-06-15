<?php

return [
    'title' => 'Estágios',

    'navigation' => [
        'title' => 'Estágios',
        'group' => 'Cargo Cargos',
    ],

    'form' => [
        'sections' => [
            'general-information' => [
                'title' => 'Informações gerais',

                'fields' => [
                    'stage-name'   => 'Estágio Nome',
                    'sort'         => 'Sequence Pedido',
                    'requirements' => 'Requirements',
                ],
            ],

            'tooltips' => [
                'title'       => 'Tooltips',
                'description' => 'Define the personalizado rótulo para status da candidatura.',

                'fields' => [
                    'gray-label'          => 'Gray Rótulo',
                    'gray-label-tooltip'  => 'The rótulo para the gray status.',
                    'red-label'           => 'Red Rótulo',
                    'red-label-tooltip'   => 'The rótulo para the red status.',
                    'green-label'         => 'Green Rótulo',
                    'green-label-tooltip' => 'The rótulo para the green status.',
                ],
            ],

            'additional-information' => [
                'title' => 'Informações adicionais',

                'fields' => [
                    'job-positions' => 'Cargo Cargos',
                    'folded'        => 'Folded',
                    'hired-stage'   => 'Contratado Estágio',
                    'default-stage' => 'Padrão Estágio',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'                 => 'ID',
            'name'               => 'Estágio Nome',
            'hired-stage'        => 'Contratado Estágio',
            'default-stage'      => 'Padrão Estágio',
            'folded'             => 'Folded',
            'job-positions'      => 'Cargo Cargos',
            'created-by'         => 'Criado por',
            'created-at'         => 'Criado em',
            'updated-at'         => 'Atualizado em',
        ],

        'filters' => [
            'name'         => 'Estágio Nome',
            'job-position' => 'Cargo Cargo',
            'folded'       => 'Folded',
            'gray-label'   => 'Gray Rótulo',
            'red-label'    => 'Red Rótulo',
            'green-label'  => 'Green Rótulo',
            'created-by'   => 'Criado por',
            'created-at'   => 'Criado em',
            'updated-at'   => 'Atualizado em',
        ],

        'groups' => [
            'job-position' => 'Cargo Cargo',
            'stage-name'   => 'Estágio Nome',
            'folded'       => 'Folded',
            'gray-label'   => 'Gray Rótulo',
            'red-label'    => 'Red Rótulo',
            'green-label'  => 'Green Rótulo',
            'created-by'   => 'Criado por',
            'created-at'   => 'Criado em',
            'updated-at'   => 'Atualizado em',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Estágios excluído',
                        'body'  => 'O Estágios foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Estágios could não be excluído',
                        'body'  => 'The Estágios cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Estágios excluído',
                    'body'  => 'O Estágios foi excluído com sucesso.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'label' => 'Novo Estágio',
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general-information' => [
                'title' => 'Informações gerais',

                'entries' => [
                    'stage-name'   => 'Estágio Nome',
                    'sort'         => 'Sequence Pedido',
                    'requirements' => 'Requirements',
                ],
            ],

            'tooltips' => [
                'title'       => 'Tooltips',
                'description' => 'Define the personalizado rótulo para status da candidatura.',

                'entries' => [
                    'gray-label'          => 'Gray Rótulo',
                    'gray-label-tooltip'  => 'The rótulo para the gray status.',
                    'red-label'           => 'Red Rótulo',
                    'red-label-tooltip'   => 'The rótulo para the red status.',
                    'green-label'         => 'Green Rótulo',
                    'green-label-tooltip' => 'The rótulo para the green status.',
                ],
            ],

            'additional-information' => [
                'title' => 'Informações adicionais',

                'entries' => [
                    'job-positions'      => 'Cargo Cargo',
                    'folded'             => 'Folded',
                    'hired-stage'        => 'Contratado Estágio',
                    'default-stage'      => 'Padrão Estágio',
                ],
            ],
        ],
    ],

];
