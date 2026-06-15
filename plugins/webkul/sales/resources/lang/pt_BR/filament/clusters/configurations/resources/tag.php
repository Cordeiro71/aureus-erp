<?php

return [
    'title' => 'Etiqueta',

    'navigation' => [
        'title' => 'Etiqueta',
        'group' => 'Pedidos de venda',
    ],

    'form' => [
        'fields' => [
            'name'  => 'Nome',
            'color' => 'Cor',
        ],
    ],

    'table' => [
        'columns' => [
            'created-by' => 'Criado por',
            'name'       => 'Nome',
            'color'      => 'Cor',
        ],
        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Produto Etiqueta atualizado',
                    'body'  => 'A Produto etiqueta foi atualizada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Produto Etiqueta excluído',
                    'body'  => 'A Produto etiqueta foi excluído com sucesso.',
                ],
            ],
        ],
        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Produto Etiqueta excluído',
                    'body'  => 'A Produto etiqueta foi excluído com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'  => 'Nome',
            'color' => 'Cor',
        ],
    ],
];
