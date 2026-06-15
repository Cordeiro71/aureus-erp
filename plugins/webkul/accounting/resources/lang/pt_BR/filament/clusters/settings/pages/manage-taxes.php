<?php

return [
    'title' => 'Manage Impostos',

    'form' => [
        'default-taxes' => [
            'label'       => 'Padrão Impostos',
            'helper-text' => 'Padrão will be aplicado em produtos if não imposto is selected',
        ],

        'sales-tax' => [
            'label' => 'Vendas Imposto',
        ],

        'purchase-tax' => [
            'label' => 'Compra Imposto',
        ],

        'prices' => [
            'label' => 'Preços',
        ],

        'rounding-method' => [
            'label'       => 'Rounding Method',
            'helper-text' => 'Method used para arredondar imposto valores',

            'options' => [
                'round-per-line' => 'Arredondar Por Linha',
                'round-globally' => 'Arredondar Globally',
            ],
        ],

        'fiscal-country' => [
            'label' => 'Fiscal Country',
        ],
    ],
];
