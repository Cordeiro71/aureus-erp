<?php

return [
    'setup' => [
        'title'        => 'Registrar nota',
        'submit-title' => 'Registro',

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
                    'title' => 'Registrar nota added',
                    'body'  => 'Your registrar nota added successfully.',
                ],

                'error' => [
                    'title' => 'Registro adicionar erro',
                    'body'  => 'Falhou para adicionar your registrar nota',
                ],
            ],
        ],
    ],
];
