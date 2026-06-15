<?php

return [
    'notification' => [
        'title' => 'Pedido atualizado',
        'body'  => 'O Pedido foi atualizado com sucesso.',
    ],

    'header-actions' => [
        'confirm' => [
            'label' => 'Confirmar',
        ],

        'close' => [
            'label' => 'Fechar',
        ],

        'cancel' => [
            'label' => 'Cancelar',
        ],

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
