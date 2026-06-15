<?php

return [
    'header-actions' => [
        'print' => [
            'label' => 'Imprimir',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Dropship excluído',
                    'body'  => 'O Dropship foi excluído com sucesso.',
                ],

                'error' => [
                    'title' => 'Dropship could não be excluído',
                    'body'  => 'The dropship cannot be deleted because it is currently in use.',
                ],
            ],
        ],
    ],
];
