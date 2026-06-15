<?php

return [
    'title' => 'Cotação Modelo',

    'navigation' => [
        'title'  => 'Cotação Modelo',
        'group'  => 'Pedidos de venda',
    ],

    'form' => [
        'tabs' => [
            'products' => [
                'title'  => 'Produtos',
                'fields' => [
                    'products'     => 'Produtos',
                    'name'         => 'Nome',
                    'quantity'     => 'Quantidade',
                ],
            ],

            'terms-and-conditions' => [
                'title'  => 'Terms & Conditions',
                'fields' => [
                    'note-placeholder' => 'Write your terms e conditions para the cotações.',
                ],
            ],
        ],

        'sections' => [
            'general' => [
                'title' => 'Informações gerais',

                'fields' => [
                    'name'               => 'Nome',
                    'quotation-validity' => 'Cotação Validity',
                    'sale-journal'       => 'Venda Diário',
                ],
            ],

            'signature-and-payment' => [
                'title' => 'Signature & Pagamentos',

                'fields' => [
                    'online-signature'      => 'Online Signature',
                    'online-payment'        => 'Online Pagamento',
                    'prepayment-percentage' => 'Pré-pagamento Porcentagem',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'created-by'            => 'Criado por',
            'company'               => 'Empresa',
            'name'                  => 'Nome',
            'number-of-days'        => 'Number de dias',
            'journal'               => 'Venda Diário',
            'signature-required'    => 'Signature Obrigatório',
            'payment-required'      => 'Pagamento Obrigatório',
            'prepayment-percentage' => 'Pré-pagamento Porcentagem',
        ],
        'groups'  => [
            'company' => 'Empresa',
            'name'    => 'Nome',
            'journal' => 'Diário',
        ],
        'filters' => [
            'created-by' => 'Criado por',
            'company'    => 'Empresa',
            'name'       => 'Nome',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],
        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Cotação modelo excluído',
                    'body'  => 'O Cotação modelo foi excluído com sucesso.',
                ],
            ],

        ],
        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Cotação modelo excluído',
                    'body'  => 'O Cotação modelo foi excluído com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'tabs' => [
            'products' => [
                'title' => 'Produtos',
            ],
            'terms-and-conditions' => [
                'title' => 'Terms & Conditions',
            ],
        ],
        'sections' => [
            'general' => [
                'title' => 'Informações gerais',
            ],
            'signature_and_payment' => [
                'title' => 'Signature & Pagamento',
            ],
        ],
        'entries' => [
            'product'               => 'Produto',
            'description'           => 'Descrição',
            'quantity'              => 'Quantidade',
            'unit-price'            => 'Unidade Preço',
            'section-name'          => 'Seção Nome',
            'note-title'            => 'Nota Título',
            'name'                  => 'Modelo Nome',
            'quotation-validity'    => 'Cotação Validity',
            'sale-journal'          => 'Venda Diário',
            'online-signature'      => 'Online Signature',
            'online-payment'        => 'Online Pagamento',
            'prepayment-percentage' => 'Pré-pagamento Porcentagem',
        ],
    ],
];
