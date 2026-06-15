<?php

return [
    'title' => 'Quantidades',

    'tabs' => [
        'internal-locations' => 'Interno Localizações',
        'transit-locations'  => 'Transit Localizações',
        'on-hand'            => 'Disponível',
        'to-count'           => 'Para Contagem',
        'to-apply'           => 'Para Aplicar',
    ],

    'form' => [
        'fields' => [
            'product'          => 'Produto',
            'location'         => 'Localização',
            'package'          => 'Pacote',
            'lot'              => 'Lote / Números de série',
            'on-hand-qty'      => 'Disponível Quantidade',
            'storage-category' => 'Storage Categoria',
        ],
    ],

    'table' => [
        'columns' => [
            'product'           => 'Produto',
            'location'          => 'Localização',
            'lot'               => 'Lote / Números de série',
            'storage-category'  => 'Storage Categoria',
            'quantity'          => 'Quantidade',
            'package'           => 'Pacote',
            'on-hand'           => 'Disponível Quantidade',
            'unit'              => 'Unidade',
            'reserved-quantity' => 'Reservado Quantidade',

            'on-hand-before-state-updated' => [
                'notification' => [
                    'title' => 'Quantidade atualizado',
                    'body'  => 'A Quantidade foi atualizada com sucesso.',
                ],
            ],
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
                        'body'  => 'Já existe uma quantidade para a mesma configuração. atualize a quantidade.',
                    ],
                ],
            ],
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Quantidade excluído',
                    'body'  => 'A Quantidade foi excluído com sucesso.',
                ],
            ],
        ],
    ],
];
