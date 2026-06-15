<?php

return [
    'title' => 'Manage Traceability',

    'form' => [
        'enable-lots-serial-numbers'                             => 'Lotes & Números de série',
        'enable-lots-serial-numbers-helper-text'                 => 'Get a full traceability de fornecedores para clientes',
        'configure-lots'                                         => 'Configure Lotes',
        'enable-expiration-dates'                                => 'Expiration Datas',
        'enable-expiration-dates-helper-text'                    => 'Set expiration datas ligado lotes & números de série',
        'display-on-delivery-slips'                              => 'Display ligado Entrega Slips',
        'display-on-delivery-slips-helper-text'                  => 'Lotes & Números de série will appear ligado the entrega slips',
        'display-expiration-dates-on-delivery-slips'             => 'Display Expiration Datas ligado Entrega Slips',
        'display-expiration-dates-on-delivery-slips-helper-text' => 'Expiration datas will appear ligado the entrega slip',
        'enable-consignments'                                    => 'Consignments',
        'enable-consignments-helper-text'                        => 'Set owner ligado stored produtos',
    ],

    'before-save' => [
        'notification' => [
            'warning' => [
                'title' => 'You have produtos in estoque aquele have lote/número de série tracking ativado. ',
                'body'  => 'Primeiro switch desligado tracking ligado todos the produtos antes switching desligado este configuração.',
            ],
        ],
    ],
];
