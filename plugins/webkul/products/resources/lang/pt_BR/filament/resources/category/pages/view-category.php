<?php

return [
    'header-actions' => [
        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Categoria excluído',
                    'body'  => 'A Categoria foi excluído com sucesso.',
                ],

                'error' => [
                    'title' => 'Categoria could não be excluído',
                    'body'  => 'The categoria cannot be deleted because it is currently in use.',
                ],
            ],
        ],
    ],
];
