<?php

return [
    'notification' => [
        'title' => 'Grupo de impostos atualizado',
        'body'  => 'O Grupo de impostos foi atualizado com sucesso.',
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Grupo de impostos excluído',
                    'body'  => 'O Grupo de impostos foi excluído com sucesso.',
                ],

                'error' => [
                    'title' => 'Grupo de impostos could não be excluído',
                    'body'  => 'The grupo de impostos cannot be deleted because it is currently in use.',
                ],
            ],
        ],
    ],
];
