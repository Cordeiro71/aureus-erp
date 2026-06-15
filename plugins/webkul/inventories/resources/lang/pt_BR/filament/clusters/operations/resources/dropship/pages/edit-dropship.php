<?php

return [
    'notification' => [
        'title' => 'Dropship atualizado',
        'body'  => 'O Dropship foi atualizado com sucesso.',
    ],

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
