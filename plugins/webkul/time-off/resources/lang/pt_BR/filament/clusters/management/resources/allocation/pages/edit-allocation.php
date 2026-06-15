<?php

return [
    'notification' => [
        'title' => 'Alocação atualizado',
        'body'  => 'A Alocação foi atualizada com sucesso.',
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'title' => 'Alocação excluído',
                'body'  => 'A Alocação foi excluído com sucesso.',
            ],
        ],
        'approved' => [
            'title' => 'Aprovado',

            'notification' => [
                'title' => 'Alocação aprovado',
                'body'  => 'A Alocação foi aprovada com sucesso.',
            ],
        ],
        'refuse' => [
            'title' => 'Recusar',

            'notification' => [
                'title' => 'Alocação recusado',
                'body'  => 'A Alocação foi recusada com sucesso.',
            ],
        ],
        'mark-as-ready-to-confirm' => [
            'title' => 'Mark as Ready para Confirmar',

            'notification' => [
                'title' => 'Marked as ready para confirmar',
                'body'  => 'A Alocação foi marked as ready to confirm com sucesso.',
            ],
        ],
    ],
];
