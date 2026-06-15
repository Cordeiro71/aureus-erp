<?php

return [
    'form' => [
        'name'       => 'Nome',
        'short-name' => 'Short Nome',
    ],

    'table' => [
        'columns' => [
            'name'       => 'Nome',
            'short-name' => 'Short Nome',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'filters' => [
            'creator' => 'Creator',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Título atualizado',
                    'body'  => 'O Título foi atualizado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Título excluído',
                    'body'  => 'O Título foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Títulos excluído',
                    'body'  => 'O Títulos foi excluído com sucesso.',
                ],
            ],
        ],
    ],
];
