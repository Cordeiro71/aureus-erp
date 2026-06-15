<?php

return [
    'header-actions' => [
        'print' => [
            'label' => 'Imprimir',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Pedido excluído',
                    'body'  => 'O Pedido foi excluído com sucesso.',
                ],

                'error' => [
                    'title' => 'Pedido could não be excluído',
                    'body'  => 'The pedido cannot be deleted because it is currently in use.',
                ],
            ],
        ],
    ],
];
