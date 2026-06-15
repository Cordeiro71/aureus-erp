<?php

return [
    'before-save' => [
        'notification' => [
            'error' => [
                'tracking-update' => [
                    'title' => 'Erro updating tracking',
                    'body'  => 'You can não change the estoque tracking de a produto aquele was already used.',
                ],

                'track-by-update' => [
                    'title' => 'Erro updating tracking',
                    'body'  => 'You have produto(s) in estoque aquele have não lote/número de série. You can atribuir lote/números de série por doing an estoque ajuste.',
                ],
            ],
        ],
    ],
];
