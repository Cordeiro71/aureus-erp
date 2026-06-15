<?php

return [
    'navigation' => [
        'title' => 'Quantidades',
        'group' => 'Ajustes',
    ],

    'form' => [
        'fields' => [
            'location'         => 'Localização',
            'product'          => 'Produto',
            'package'          => 'Pacote',
            'lot'              => 'Lote / Números de série',
            'counted-qty'      => 'Counted Quantidade',
            'scheduled-at'     => 'Scheduled At',
            'storage-category' => 'Storage Categoria',
        ],
    ],

    'table' => [
        'columns' => [
            'location'           => 'Localização',
            'product'            => 'Produto',
            'product-category'   => 'Produto Categoria',
            'lot'                => 'Lote / Números de série',
            'storage-category'   => 'Storage Categoria',
            'available-quantity' => 'Quantidade disponível',
            'quantity'           => 'Quantidade',
            'package'            => 'Pacote',
            'last-counted-at'    => 'Último Counted At',
            'on-hand'            => 'Disponível Quantidade',
            'uom'                => 'UOM',
            'counted'            => 'Counted Quantidade',
            'difference'         => 'Difference',
            'scheduled-at'       => 'Scheduled At',
            'user'               => 'Usuário',
            'company'            => 'Empresa',

            'on-hand-before-state-updated' => [
                'notification' => [
                    'title' => 'Quantidade atualizado',
                    'body'  => 'A Quantidade foi atualizada com sucesso.',
                ],
            ],
        ],

        'groups' => [
            'product'          => 'Produto',
            'product-category' => 'Produto Categoria',
            'location'         => 'Localização',
            'storage-category' => 'Storage Categoria',
            'lot'              => 'Lote / Números de série',
            'company'          => 'Empresa',
            'package'          => 'Pacote',
        ],

        'filters' => [
            'product'             => 'Produto',
            'uom'                 => 'Unidade de medida',
            'product-category'    => 'Produto Categoria',
            'location'            => 'Localização',
            'storage-category'    => 'Storage Categoria',
            'lot'                 => 'Lote / Números de série',
            'company'             => 'Empresa',
            'package'             => 'Pacote',
            'on-hand-quantity'    => 'Disponível Quantidade',
            'difference-quantity' => 'Difference Quantidade',
            'incoming-at'         => 'Entrada At',
            'scheduled-at'        => 'Scheduled At',
            'user'                => 'Usuário',
            'created-at'          => 'Criado em',
            'updated-at'          => 'Atualizado em',
            'company'             => 'Empresa',
            'creator'             => 'Creator',
        ],

        'header-actions' => [
            'create' => [
                'label' => 'Adicionar quantidade',

                'notification' => [
                    'title' => 'Quantidade added',
                    'body'  => 'A Quantidade foi added com sucesso.',
                ],

                'before' => [
                    'notification' => [
                        'title' => 'Quantidade already exists',
                        'body'  => 'Já existe uma quantidade para esta configuração. atualize a quantidade existente.',
                    ],
                ],
            ],
        ],

        'actions' => [
            'apply' => [
                'label' => 'Aplicar',

                'notification' => [
                    'title' => 'Quantidade changes applied',
                    'body'  => 'O Quantidade changes foi applied com sucesso.',
                ],
            ],

            'clear' => [
                'label' => 'Clear',

                'notification' => [
                    'title' => 'Quantidade changes cleared',
                    'body'  => 'The quantidade changes have been cleared successfully.',
                ],
            ],
        ],
    ],
];
