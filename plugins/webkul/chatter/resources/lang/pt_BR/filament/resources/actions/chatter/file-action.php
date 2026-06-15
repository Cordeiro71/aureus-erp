<?php

return [
    'setup' => [
        'title'   => 'Anexos',
        'tooltip' => 'Envio Anexos',

        'form' => [
            'fields' => [
                'files'                  => 'Arquivos',
                'attachment-helper-text' => 'Max arquivo tamanho: 10MB. Permitido tipos: Images, PDF, Word, Excel, Texto',

                'actions' => [
                    'delete' => [
                        'title' => 'Arquivo excluído',
                        'body'  => 'O Arquivo foi excluído com sucesso.',
                    ],
                ],
            ],
        ],

        'actions' => [
            'notification' => [
                'success' => [
                    'title' => 'Anexos Uploaded',
                    'body'  => 'Anexos enviados com sucesso.',
                ],

                'warning'  => [
                    'title' => 'Não novo arquivos',
                    'body'  => 'Todos os arquivos já foram enviados.',
                ],

                'error' => [
                    'title' => 'Erro ao enviar anexo',
                    'body'  => 'Falhou para envio anexos ',
                ],
            ],
        ],
    ],
];
