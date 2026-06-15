<?php

return [
    'header-actions' => [
        'print' => [
            'label' => 'Imprimir',

            'actions' => [
                'without-content' => [
                    'label' => 'Imprimir Código de barras',
                ],

                'with-content' => [
                    'label' => 'Imprimir Código de barras Com Conteúdo',
                ],
            ],
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Pacote excluído',
                    'body'  => 'O Pacote foi excluído com sucesso.',
                ],

                'error' => [
                    'title' => 'Pacote could não be excluído',
                    'body'  => 'The pacote cannot be deleted because it is currently in use.',
                ],
            ],
        ],
    ],
];
