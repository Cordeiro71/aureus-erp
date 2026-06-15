<?php

return [
    'notification' => [
        'title' => 'Produto atualizado',
        'body'  => 'O Produto foi atualizado com sucesso.',
    ],

    'header-actions' => [
        'update-quantity' => [
            'label'                     => 'Atualizar Quantidade',
            'modal-heading'             => 'Atualizar Produto Quantidade',
            'modal-submit-action-label' => 'Atualizar',

            'form' => [
                'fields' => [
                    'on-hand-qty' => 'Disponível Quantidade',
                ],
            ],
        ],

        'delete' => [
            'notification' => [
                'title' => 'Produto excluído',
                'body'  => 'O Produto foi excluído com sucesso.',
            ],
        ],
    ],
];
