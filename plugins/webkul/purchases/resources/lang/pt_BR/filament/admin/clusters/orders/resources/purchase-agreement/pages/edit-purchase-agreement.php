<?php

return [
    'notification' => [
        'title' => 'Compra Agreement atualizado',
        'body'  => 'O Compra agreement foi atualizado com sucesso.',
    ],

    'header-actions' => [
        'confirm' => [
            'label' => 'Confirmar',
        ],

        'close' => [
            'label'        => 'Fechar',
            'notification' => [
                'warning' => [
                    'title' => 'Unable para fechar compra agreement',
                    'body'  => 'You cannot fechar este compra agreement because some relacionado RFQs are não in Concluído ou Cancelado status.',
                ],
            ],
        ],

        'cancel' => [
            'label' => 'Cancelar',
        ],

        'print' => [
            'label' => 'Imprimir',
        ],

        'delete' => [
            'notification' => [
                'title' => 'Compra Agreement excluído',
                'body'  => 'O Compra agreement foi excluído com sucesso.',
            ],
        ],
    ],
];
