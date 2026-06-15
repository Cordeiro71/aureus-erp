<?php

return [
    'navigation' => [
        'title' => 'Recibos',
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
                        'title' => 'Recibo excluído',
                        'body'  => 'The recibo ras been deleted successfully.',
                    ],

                    'error' => [
                        'title' => 'Recibo could não be excluído',
                        'body'  => 'The recibo cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Recibos excluído',
                        'body'  => 'O Recibos foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Recibos could não be excluído',
                        'body'  => 'The recibos cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],
];
