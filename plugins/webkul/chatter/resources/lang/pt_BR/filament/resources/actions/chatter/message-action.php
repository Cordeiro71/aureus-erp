<?php

return [
    'setup' => [
        'title'        => 'Enviar Mensagem',
        'submit-title' => 'Enviar',

        'form' => [
            'fields' => [
                'hide-subject'            => 'Ocultar Assunto',
                'add-subject'             => 'Adicionar assunto',
                'subject'                 => 'Assunto',
                'write-message-here'      => 'Write your mensagem here',
                'attachments-helper-text' => 'Max arquivo tamanho: 10MB. Permitido tipos: Images, PDF, Word, Excel, Texto',
            ],
        ],

        'actions' => [
            'notification' => [
                'success' => [
                    'title' => 'Mensagem enviado',
                    'body'  => 'A Your mensagem foi send com sucesso.',
                ],

                'error' => [
                    'title' => 'Mensagem enviado erro',
                    'body'  => 'Falhou para enviar your mensagem',
                ],
            ],

            'mail' => [
                'subject' => ':record_name',
            ],
        ],
    ],
];
