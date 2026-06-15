<?php

return [
    'navigation' => [
        'title' => 'Editar Fornecedor Preço List',
    ],

    'notification' => [
        'title' => 'Fornecedor Preço atualizado',
        'body'  => 'O Fornecedor preço foi atualizado com sucesso.',
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Fornecedor Preço excluído',
                    'body'  => 'O Fornecedor preço foi excluído com sucesso.',
                ],

                'error' => [
                    'title' => 'Fornecedor Preço could não be excluído',
                    'body'  => 'The fornecedor preço cannot be deleted because it is currently in use.',
                ],
            ],
        ],
    ],
];
