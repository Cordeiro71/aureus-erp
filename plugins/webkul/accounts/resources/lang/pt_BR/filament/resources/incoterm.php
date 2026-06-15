<?php

return [
    'form' => [
        'fields' => [
            'code' => 'Code',
            'name' => 'Nome',
        ],
    ],

    'table' => [
        'columns' => [
            'code'       => 'Code',
            'name'       => 'Nome',
            'created-by' => 'Criado por',
        ],

        'groups' => [
            'code' => 'Code',
            'name' => 'Nome',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Incoterm atualizado',
                    'body'  => 'O Incoterm foi atualizado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Incoterm excluído',
                    'body'  => 'O Incoterm foi excluído com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Incoterm restaurado',
                    'body'  => 'O Incoterm foi restaurado com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Incoterms restaurado',
                    'body'  => 'O Incoterms foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Incoterms excluído',
                    'body'  => 'O Incoterms foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Incoterms excluído definitivamente',
                    'body'  => 'O Incoterms foi excluído definitivamente com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name' => 'Nome',
            'code' => 'Code',
        ],
    ],
];
