<?php

return [
    'title' => 'Capacidade Por Produtos',

    'form' => [
        'product' => 'Produto',
        'qty'     => 'Quantidade',
    ],

    'table' => [
        'header-actions' => [
            'create' => [
                'label' => 'Adicionar capacidade de produto',

                'notification' => [
                    'title' => 'Produto Capacidade criado',
                    'body'  => 'The produto capacidade been added successfully.',
                ],
            ],
        ],

        'columns' => [
            'product' => 'Produto',
            'qty'     => 'Quantidade',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Produto Capacidade atualizado',
                    'body'  => 'A Produto capacidade foi atualizada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Produto Capacidade excluído',
                    'body'  => 'A Produto capacidade foi excluído com sucesso.',
                ],
            ],
        ],
    ],
];
