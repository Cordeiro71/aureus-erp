<?php

return [
    'label' => 'Enviar PO Por E-mail',

    'form' => [
        'fields' => [
            'to'      => 'Para',
            'subject' => 'Assunto',
            'message' => 'Mensagem',
        ],
    ],

    'action' => [
        'notification' => [
            'success' => [
                'title' => 'E-mail enviado',
                'body'  => 'O E-mail foi enviado com sucesso.',
            ],
        ],
    ],
];
