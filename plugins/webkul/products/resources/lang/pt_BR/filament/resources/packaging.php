<?php

return [
    'form' => [
        'name'    => 'Nome',
        'barcode' => 'Código de barras',
        'product' => 'Produto',
        'routes'  => 'Rotas',
        'qty'     => 'Qty',
        'company' => 'Empresa',
    ],

    'table' => [
        'columns' => [
            'name'       => 'Nome',
            'product'    => 'Produto',
            'routes'     => 'Rotas',
            'qty'        => 'Qty',
            'company'    => 'Empresa',
            'barcode'    => 'Código de barras',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'groups' => [
            'product'    => 'Produto',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'filters' => [
            'product' => 'Produto',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Embalagem atualizar',
                    'body'  => 'A Embalagem foi update com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Embalagem excluído',
                        'body'  => 'A Embalagem foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Embalagem could não be excluído',
                        'body'  => 'The embalagem cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print' => [
                'label' => 'Imprimir',
            ],

            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Packagings excluído',
                        'body'  => 'O Packagings foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Packagings could não be excluído',
                        'body'  => 'The packagings cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'label' => 'Novo Embalagem',

                'notification' => [
                    'title' => 'Embalagem criado',
                    'body'  => 'A Embalagem foi criada com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Informações gerais',

                'entries' => [
                    'name'    => 'Pacote Nome',
                    'barcode' => 'Código de barras',
                    'product' => 'Produto',
                    'qty'     => 'Quantidade',
                ],
            ],

            'organization' => [
                'title' => 'Organization Detalhes',

                'entries' => [
                    'company'    => 'Empresa',
                    'creator'    => 'Criado por',
                    'created_at' => 'Criado em',
                    'updated_at' => 'Último Atualizado em',
                ],
            ],
        ],
    ],
];
