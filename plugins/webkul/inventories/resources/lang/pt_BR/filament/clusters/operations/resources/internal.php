<?php

return [
    'navigation' => [
        'title' => 'Interno Transferênciaências',
        'group' => 'Transferências',
    ],

    'global-search' => [
        'origin' => 'Origem',
    ],

    'table' => [
        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Interno Transferência excluído',
                        'body'  => 'The interno transferência ras been deleted successfully.',
                    ],

                    'error' => [
                        'title' => 'Interno Transferência could não be excluído',
                        'body'  => 'The interno transferência cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Interno Transferênciaências excluído',
                        'body'  => 'O Interno transferênciaências foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Interno Transferênciaências could não be excluído',
                        'body'  => 'The interno transferênciaências cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],
];
