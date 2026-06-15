<?php

return [
    'navigation' => [
        'title' => 'Reposição',
        'group' => 'Procurement',
    ],

    'form' => [
        'fields' => [
        ],
    ],

    'table' => [
        'columns' => [
            'product'           => 'Produto',
            'location'          => 'Localização',
            'route'             => 'Rota',
            'vendor'            => 'Fornecedor',
            'trigger'           => 'Trigger',
            'on-hand'           => 'Disponível',
            'min'               => 'Min',
            'max'               => 'Max',
            'multiple-quantity' => 'Multiple Quantidade',
            'to-order'          => 'Para Pedido',
            'uom'               => 'UOM',
            'company'           => 'Empresa',
        ],

        'groups' => [
            'location' => 'Localização',
            'product'  => 'Produto',
            'category' => 'Categoria',
        ],

        'filters' => [
        ],

        'header-actions' => [
            'create' => [
                'label' => 'Adicionar reposição',

                'notification' => [
                    'title' => 'Reposição added',
                    'body'  => 'A Reposição foi added com sucesso.',
                ],

                'before' => [
                    'notification' => [
                        'title' => 'Reposição already exists',
                        'body'  => 'Já existe uma reposição para esta configuração. atualize a reposição existente.',
                    ],
                ],
            ],
        ],

        'actions' => [
        ],
    ],
];
