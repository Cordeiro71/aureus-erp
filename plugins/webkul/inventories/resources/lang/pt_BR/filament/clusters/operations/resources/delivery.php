<?php

return [
    'navigation' => [
        'title' => 'Entregas',
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
                        'title' => 'Entrega excluído',
                        'body'  => 'The entrega ras been deleted successfully.',
                    ],

                    'error' => [
                        'title' => 'Entrega could não be excluído',
                        'body'  => 'The entrega cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Entregas excluído',
                        'body'  => 'O Entregas foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Entregas could não be excluído',
                        'body'  => 'The entregas cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],
];
