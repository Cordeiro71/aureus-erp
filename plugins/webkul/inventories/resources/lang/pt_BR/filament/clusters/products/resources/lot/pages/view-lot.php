<?php

return [
    'header-actions' => [
        'print' => [
            'label' => 'Imprimir',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Lote excluído',
                    'body'  => 'O Lote foi excluído com sucesso.',
                ],

                'error' => [
                    'title' => 'Lote could não be excluído',
                    'body'  => 'The lote cannot be deleted because it is currently in use.',
                ],
            ],
        ],
    ],
];
