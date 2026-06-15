<?php

return [
    'table' => [
        'columns' => [
            'reference'         => 'Referência',
            'total-amount'      => 'Total Valor',
            'confirmation-date' => 'Confirmation Data',
            'status'            => 'Status',
        ],
    ],

    'infolist' => [
        'settings' => [
            'entries' => [
                'buyer' => 'Buyer',
            ],

            'actions' => [
                'accept' => [
                    'label' => 'Aceitar',

                    'notification' => [
                        'title' => 'Cotação Aceito',
                        'body'  => 'O Rfq foi acknowledged com sucesso.',
                    ],

                    'message' => [
                        'body' => 'The RFQ has been acknowledged por fornecedor.',
                    ],
                ],

                'decline' => [
                    'label' => 'Recusar',

                    'notification' => [
                        'title' => 'Cotação Declined',
                        'body'  => 'O Rfq foi declined com sucesso.',
                    ],

                    'message' => [
                        'body' => 'The RFQ has been declined por fornecedor.',
                    ],
                ],

                'print' => [
                    'label' => 'Baixar/Imprimir',
                ],
            ],
        ],

        'general' => [
            'entries' => [
                'purchase-order'        => 'Pedido de compra #:id',
                'quotation'             => 'Request para Cotação #:id',
                'order-date'            => 'Pedido Data',
                'from'                  => 'De',
                'confirmation-date'     => 'Confirmation Data',
                'receipt-date'          => 'Recibo Data',
                'products'              => 'Produtos',
                'untaxed-amount'        => 'Sem impostos Valor',
                'tax-amount'            => 'Imposto Valor',
                'total'                 => 'Total',
                'communication-history' => 'Communication Histórico',
            ],
        ],
    ],
];
