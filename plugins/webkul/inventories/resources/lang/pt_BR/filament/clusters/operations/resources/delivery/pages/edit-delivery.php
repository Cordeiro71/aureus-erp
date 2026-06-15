<?php

return [
    'notification' => [
        'title' => 'Entrega atualizado',
        'body'  => 'A Entrega foi atualizada com sucesso.',
    ],

    'header-actions' => [
        'print' => [
            'label' => 'Imprimir',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Entrega excluído',
                    'body'  => 'A Entrega foi excluído com sucesso.',
                ],

                'error' => [
                    'title' => 'Entrega could não be excluído',
                    'body'  => 'The entrega cannot be deleted because it is currently in use.',
                ],
            ],
        ],
    ],
];
