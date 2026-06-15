<?php

return [
    'navigation' => [
        'title' => 'Lotes / Números de série',
        'group' => 'Estoque',
    ],

    'global-search' => [
        'ref'     => 'Referência',
        'product' => 'Produto',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Geral',

                'fields' => [
                    'name'                   => 'Nome',
                    'name-placeholder'       => 'e.g. LOTE/0001/20121',
                    'product'                => 'Produto',
                    'product-hint-tooltip'   => 'The produto associated com este lote/número de série. It cannot be changed if it has already been moved.',
                    'reference'              => 'Referência',
                    'reference-hint-tooltip' => 'An internal reference number, if different from the manufacturer\'An interno referência number, if different de the manufacturer\'s lote/número de série.',
                    'description'            => 'Descrição',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => 'Nome',
            'product'      => 'Produto',
            'on-hand-qty'  => 'Disponível Quantidade',
            'reference'    => 'Interno Referência',
            'created-at'   => 'Criado em',
            'updated-at'   => 'Atualizado em',
        ],

        'groups' => [
            'product'        => 'Produto',
            'location'       => 'Localização',
            'created-at'     => 'Criado em',
        ],

        'filters' => [
            'product'  => 'Produto',
            'location' => 'Localização',
            'creator'  => 'Creator',
            'company'  => 'Empresa',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Lote excluído',
                        'body'  => 'O Lote foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Lote could não be excluído',
                        'body'  => 'The lote cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print' => [
                'label' => 'Imprimir Código de barras',
            ],

            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Lotes excluído',
                        'body'  => 'O Lotes foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Lotes could não be excluído',
                        'body'  => 'The lotes cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Lote Detalhes',

                'entries' => [
                    'name'        => 'Lote Nome',
                    'product'     => 'Produto',
                    'reference'   => 'Referência',
                    'description' => 'Descrição',
                    'on-hand-qty' => 'Ligado-Hand Quantidade',
                    'company'     => 'Empresa',
                    'created-at'  => 'Criado em',
                    'updated-at'  => 'Último atualizado',
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
