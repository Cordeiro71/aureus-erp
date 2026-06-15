<?php

return [
    'title' => 'Redefinir Para Rascunho',

    'validation' => [
        'notification' => [
            'error' => [
                'invalid-state' => [
                    'title' => 'Lançamento contábil State Inválido',
                    'body'  => 'Only lançado ou cancelado lançamentos contábeis can be redefinir para rascunho.',
                ],
            ],
        ],
    ],
];
