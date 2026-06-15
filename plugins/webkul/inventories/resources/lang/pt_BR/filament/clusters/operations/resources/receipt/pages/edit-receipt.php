<?php

return [
    'notification' => [
        'title' => 'Recibo atualizado',
        'body'  => 'O Recibo foi atualizado com sucesso.',
    ],

    'header-actions' => [
        'print' => [
            'label' => 'Imprimir',
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Recibo excluído',
                    'body'  => 'O Recibo foi excluído com sucesso.',
                ],

                'error' => [
                    'title' => 'Recibo could não be excluído',
                    'body'  => 'The Recibo cannot be deleted because it is currently in use.',
                ],
            ],
        ],
    ],
];
