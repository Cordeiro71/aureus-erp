<?php

return [
    'notification' => [
        'title' => 'Interno Transferência atualizado',
        'body'  => 'A Interno transferência foi atualizada com sucesso.',
    ],

    'header-actions' => [
        'print' => [
            'label' => 'Imprimir',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Interno Transferência excluído',
                    'body'  => 'A Interno transferência foi excluído com sucesso.',
                ],

                'error' => [
                    'title' => 'Interno Transferência could não be excluído',
                    'body'  => 'The interno transferência cannot be deleted because it is currently in use.',
                ],
            ],
        ],
    ],
];
