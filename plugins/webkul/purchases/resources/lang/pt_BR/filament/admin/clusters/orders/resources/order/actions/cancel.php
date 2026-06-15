<?php

return [
    'label' => 'Cancelar',

    'action' => [
        'notification' => [
            'warning' => [
                'receipts' => [
                    'title' => 'Cannot cancelar pedido',
                    'body'  => 'The pedido cannot be cancelado since they have recibos aquele are already concluído.',
                ],

                'bills' => [
                    'title' => 'Cannot cancelar pedido',
                    'body'  => 'The pedido cannot be cancelado. You must primeiro cancelar their relacionado fornecedor contas a pagar.',
                ],
            ],

            'success' => [
                'title' => 'Pedido cancelado',
                'body'  => 'O Pedido foi cancelado com sucesso.',
            ],
        ],
    ],
];
