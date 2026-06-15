<?php

return [
    'navigation' => [
        'title' => 'Dropships',
        'group' => 'Transferências',
    ],

    'global-search' => [
        'partner' => 'Parceiro',
        'origin'  => 'Origem',
    ],

    'table' => [
        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Dropship excluído',
                        'body'  => 'The dropship ras been deleted successfully.',
                    ],

                    'error' => [
                        'title' => 'Dropship could não be excluído',
                        'body'  => 'The dropship cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Dropships excluído',
                        'body'  => 'O Dropships foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Dropships could não be excluído',
                        'body'  => 'The dropships cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],
];
