<?php

return [
    'title' => 'Manage Fatura',

    'breadcrumb' => 'Manage Fatura',

    'navigation' => [
        'title' => 'Manage Fatura',
    ],

    'form' => [
        'invoice-policy' => [
            'label'      => 'Fatura Policy',
            'label-help' => 'Define how faturas are generated de pedidos de venda.',
            'options'    => [
                'order'    => 'Gerar fatura baseado em ordered quantidades',
                'delivery' => 'Gerar fatura baseado em entregue quantidades',
            ],
        ],
    ],
];
