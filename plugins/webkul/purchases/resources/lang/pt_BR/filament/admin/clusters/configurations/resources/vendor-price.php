<?php

return [
    'navigation' => [
        'title' => 'Fornecedor Preço Lists',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Geral',

                'fields' => [
                    'vendor'                      => 'Fornecedor',
                    'vendor-product-name'         => 'Fornecedor Produto Nome',
                    'vendor-product-name-tooltip' => 'The vendor\'The fornecedor\'s produto nome will appear ligado the request para cotação. Licença it blank para use the interno produto nome.',
                    'vendor-product-code'         => 'Fornecedor Produto Code',
                    'vendor-product-code-tooltip' => 'The vendor\'The fornecedor\'s produto code will appear ligado the request para cotação. Licença it blank para use the interno code.',
                    'delay'                       => 'Entrega Lead Hora (Dias)',
                    'delay-tooltip'               => 'The lead hora (in dias) de pedido de compra confirmation para produto recibo in the armazém. Used por the scheduler para automático pedido de compra planejamento.',
                ],
            ],

            'prices' => [
                'title'  => 'Preços',

                'fields' => [
                    'product'            => 'Produto',
                    'quantity'           => 'Quantidade',
                    'quantity-tooltip'   => 'The minimum quantity required to purchase from this vendor to qualify for the specified price. This is expressed in the vendor\'s Product Unit of Measure or, if not set, the product\'The mínimo quantidade obrigatório para compra de este fornecedor para qualify para the specified preço. Este is expressed in the fornecedor\'s Produto Unidade de medida ou, if não set, the produto\'s padrão unidade de medida.',
                    'unit-price'         => 'Unidade Preço',
                    'unit-price-tooltip' => 'The price per unit for this product from the vendor, expressed in the vendor’s Product Unit of Measure or, if not set, the product\'The preço por unidade para este produto de the fornecedor, expressed in the fornecedor’s Produto Unidade de medida ou, if não set, the produto\'s padrão unidade de medida.',
                    'currency'           => 'Moeda',
                    'valid-from'         => 'Válido De',
                    'valid-to'           => 'Válido Until',
                    'discount'           => 'Desconto (%)',
                    'company'            => 'Empresa',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'vendor'              => 'Fornecedor',
            'vendor-product-name' => 'Fornecedor Produto Nome',
            'vendor-product-code' => 'Fornecedor Produto Code',
            'delay'               => 'Entrega Lead Hora (Dias)',
            'product'             => 'Produto',
            'quantity'            => 'Quantidade',
            'unit-price'          => 'Unidade Preço',
            'currency'            => 'Moeda',
            'valid-from'          => 'Válido De',
            'valid-to'            => 'Válido Until',
            'discount'            => 'Desconto (%)',
            'company'             => 'Empresa',
            'created-at'          => 'Criado em',
            'updated-at'          => 'Atualizado em',
        ],

        'filters' => [
            'vendor'        => 'Filtro por Fornecedor',
            'product'       => 'Filtro por Produto',
            'currency'      => 'Filtro por Moeda',
            'company'       => 'Filtro por Empresa',
            'price-from'    => 'Mínimo Preço',
            'price-to'      => 'Máximo Preço',
            'min-qty-from'  => 'Mínimo Quantidade De',
            'min-qty-to'    => 'Mínimo Quantidade Para',
            'starts-from'   => 'Válido De Data',
            'ends-before'   => 'Válido Para Data',
            'created-from'  => 'Created De',
            'created-until' => 'Created Until',
        ],

        'groups' => [
            'vendor'     => 'Fornecedor',
            'product'    => 'Produto',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Fornecedor Preço excluído',
                        'body'  => 'O Fornecedor preço foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Fornecedor Preço could não be excluído',
                        'body'  => 'The fornecedor preço cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Fornecedor Preços excluído',
                        'body'  => 'O Fornecedor preços foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Fornecedor Preços could não be excluído',
                        'body'  => 'The fornecedor preços cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'  => 'Geral',

                'entries' => [
                    'vendor'                      => 'Fornecedor',
                    'vendor-product-name'         => 'Fornecedor Produto Nome',
                    'vendor-product-name-tooltip' => 'The vendor\'The fornecedor\'s produto nome will appear ligado the request para cotação. Licença it blank para use the interno produto nome.',
                    'vendor-product-code'         => 'Fornecedor Produto Code',
                    'vendor-product-code-tooltip' => 'The vendor\'The fornecedor\'s produto code will appear ligado the request para cotação. Licença it blank para use the interno code.',
                    'delay'                       => 'Entrega Lead Hora (Dias)',
                    'delay-tooltip'               => 'The lead hora (in dias) de pedido de compra confirmation para produto recibo in the armazém. Used por the scheduler para automático pedido de compra planejamento.',
                ],
            ],

            'record-information' => [
                'title'  => 'Record Information',

                'entries' => [
                    'created-by'   => 'Criado por',
                    'created-at'   => 'Criado em',
                    'last-updated' => 'Último atualizado',
                ],
            ],

            'prices' => [
                'title'  => 'Preços',

                'entries' => [
                    'product'            => 'Produto',
                    'quantity'           => 'Quantidade',
                    'quantity-tooltip'   => 'The minimum quantity required to purchase from this vendor to qualify for the specified price. This is expressed in the vendor\'s Product Unit of Measure or, if not set, the product\'The mínimo quantidade obrigatório para compra de este fornecedor para qualify para the specified preço. Este is expressed in the fornecedor\'s Produto Unidade de medida ou, if não set, the produto\'s padrão unidade de medida.',
                    'unit-price'         => 'Unidade Preço',
                    'unit-price-tooltip' => 'The price per unit for this product from the vendor, expressed in the vendor’s Product Unit of Measure or, if not set, the product\'The preço por unidade para este produto de the fornecedor, expressed in the fornecedor’s Produto Unidade de medida ou, if não set, the produto\'s padrão unidade de medida.',
                    'currency'           => 'Moeda',
                    'valid-from'         => 'Válido De',
                    'valid-to'           => 'Válido Until',
                    'discount'           => 'Desconto (%)',
                    'company'            => 'Empresa',
                ],
            ],
        ],
    ],
];
