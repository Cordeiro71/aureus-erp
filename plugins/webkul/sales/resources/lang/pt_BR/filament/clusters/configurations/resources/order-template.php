<?php

return [
    'title' => 'Pedido Modelo Produtos',

    'navigation' => [
        'title' => 'Pedido Modelo Produtos',
        'group' => 'Pedidos de venda',
    ],

    'global-search' => [
        'name'    => 'Nome',
    ],

    'form' => [
        'fields' => [
            'sort'           => 'Ordenar',
            'order-template' => 'Pedido Modelo',
            'company'        => 'Empresa',
            'product'        => 'Produto',
            'product-uom'    => 'Produto UOM',
            'creator'        => 'Creator',
            'display-type'   => 'Display Tipo',
            'name'           => 'Nome',
            'quantity'       => 'Quantidade',
        ],
    ],

    'table' => [
        'columns' => [
            'sort'           => 'Ordenar',
            'order-template' => 'Pedido Modelo',
            'company'        => 'Empresa',
            'product'        => 'Produto',
            'product-uom'    => 'Produto UOM',
            'created-by'     => 'Criado por',
            'display-type'   => 'Display Tipo',
            'name'           => 'Nome',
            'quantity'       => 'Quantidade',
            'created-at'     => 'Criado em',
            'updated-at'     => 'Atualizado em',

        ],
        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Pedido Modelo Produtos atualizado',
                    'body'  => 'O Pedido modelo produtos foi atualizado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Pedido Modelo Produtos excluído',
                    'body'  => 'O Pedido modelo produtos foi excluído com sucesso.',
                ],
            ],
        ],
        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Pedido Modelo Produtos excluído',
                    'body'  => 'O Pedido modelo produtos foi excluído com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'sort'           => 'Ordenar Pedido',
            'order-template' => 'Pedido Modelo',
            'company'        => 'Empresa',
            'product'        => 'Produto',
            'product-uom'    => 'Produto UOM',
            'display-type'   => 'Display Tipo',
            'name'           => 'Nome',
            'quantity'       => 'Quantidade',
        ],
    ],
];
