<?php

return [
    'title' => 'Imprimir & Enviar',

    'modal' => [
        'title' => 'Preview Fatura',

        'form' => [
            'partners'    => 'Cliente',
            'subject'     => 'Assunto',
            'description' => 'Descrição',
            'files'       => 'Anexo',
        ],

        'action' => [
            'submit' => [
                'title' => 'Enviar',
            ],
        ],

        'notification' => [
            'invoice-sent' => [
                'title' => 'Fatura Enviado',
                'body'  => 'A Fatura foi enviada com sucesso.',
            ],
        ],
    ],
];
