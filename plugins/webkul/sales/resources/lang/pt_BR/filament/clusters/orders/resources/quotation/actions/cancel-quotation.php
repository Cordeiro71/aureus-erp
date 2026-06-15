<?php

return [
    'title' => 'Cancelar',
    'modal' => [
        'heading'     => 'Cancelar Cotação',
        'description' => 'Tem certeza de que deseja cancelar esta cotação?',
    ],

    'footer-actions' => [
        'send-and-cancel' => [
            'title' => 'Enviar & Cancelar',

            'notification' => [
                'cancelled' => [
                    'title' => 'Cotação cancelado',
                    'body'  => 'A Cotação foi cancelled and email has been sent com sucesso.',
                ],
            ],
        ],

        'cancel' => [
            'title' => 'Cancelar',

            'notification' => [
                'cancelled' => [
                    'title' => 'Cotação cancelado',
                    'body'  => 'A Cotação foi cancelada com sucesso.',
                ],
            ],
        ],

        'close' => [
            'title' => 'Fechar',
        ],
    ],

    'form' => [
        'fields' => [
            'partner'             => 'Parceiro',
            'subject'             => 'Assunto',
            'subject-placeholder' => 'Assunto',
            'subject-default'     => 'Cotação :nome has been cancelado para Pedido de venda #:id',
            'description'         => 'Descrição',
            'description-default' => 'Dear <b>:partner_name</b>, <br/><br/>We would like para inform you aquele your Pedido de venda <b>:nome</b> has been cancelado. As a result, não further charges will aplicar para este pedido. If a reembolso is obrigatório, it will be processado at the earliest convenience.<br/><br/>Should you have any questions ou require further assistance, please feel free para reach out para us.',
        ],
    ],
];
