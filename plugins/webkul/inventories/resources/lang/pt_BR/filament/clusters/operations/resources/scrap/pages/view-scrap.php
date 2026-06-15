<?php

return [
    'header-actions' => [
        'validate' => [
            'label' => 'Validate',

            'notification' => [
                'warning' => [
                    'title' => 'Insufficient estoque',
                    'body'  => 'The sucata has insufficient estoque para validate.',
                ],

                'success' => [
                    'title' => 'Sucata marked as concluído',
                    'body'  => 'A Sucata foi marked as done com sucesso.',
                ],
            ],
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Sucata excluído',
                    'body'  => 'A Sucata foi excluído com sucesso.',
                ],

                'error' => [
                    'title' => 'Scraps could não be excluído',
                    'body'  => 'The scraps cannot be deleted because they are currently in use.',
                ],
            ],
        ],
    ],
];
