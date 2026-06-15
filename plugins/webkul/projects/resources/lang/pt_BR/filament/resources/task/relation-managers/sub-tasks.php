<?php

return [
    'table' => [
        'header-actions' => [
            'create' => [
                'label' => 'Adicionar subtarefa',

                'notification' => [
                    'title' => 'Tarefa criado',
                    'body'  => 'A Tarefa foi criada com sucesso.',
                ],
            ],
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Tarefa restaurado',
                    'body'  => 'A Tarefa foi restaurada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Tarefa excluído',
                    'body'  => 'A Tarefa foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Tarefa excluído definitivamente',
                    'body'  => 'A Tarefa foi excluído definitivamente com sucesso.',
                ],
            ],
        ],
    ],
];
