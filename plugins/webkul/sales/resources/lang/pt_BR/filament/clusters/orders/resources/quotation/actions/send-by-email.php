<?php

return [
    'title'        => 'Enviar Por E-mail',
    'resend-title' => 'Re-Enviar Por E-mail',
    'quotation'    => 'cotação',
    'quotations'   => 'cotações',

    'modal' => [
        'heading' => 'Enviar Cotação Por E-mail',
    ],

    'form' => [
        'fields' => [
            'partners'    => 'Parceiros',
            'subject'     => 'Assunto',
            'description' => 'Descrição',
            'attachment'  => 'Anexo',
        ],
    ],

    'actions' => [
        'notification' => [
            'email' => [
                'no_recipients' => [
                    'title' => 'Não Recipients Selected',
                    'body'  => 'Please selecionar at least one parceiro para enviar cotações para.',
                ],

                'all_success' => [
                    'title' => 'Cotações Enviado!',
                    'body'  => 'Your :plural have been successfully entregue para: :recipients',
                ],

                'all_failed' => [
                    'title' => 'Unable para Enviar Cotações',
                    'body'  => 'We encountered issues sending your cotações: :failures',
                ],

                'partial_success' => [
                    'title'       => 'Some Cotações Enviado',
                    'sent_part'   => 'Successfully entregue para: :recipients',
                    'failed_part' => 'Could não deliver para: :failures',
                ],

                'failure_item' => ':parceiro (:reason)',
            ],
        ],
    ],

];
