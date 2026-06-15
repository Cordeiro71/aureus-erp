<?php

return [
    'title' => 'Tarefas',

    'header-actions' => [
        'create' => [
            'label' => 'Novo Tarefa',
        ],
    ],

    'table' => [
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

    'tabs' => [
        'open-tasks'       => 'Aberto Tarefas',
        'my-tasks'         => 'My Tarefas',
        'unassigned-tasks' => 'Não atribuído Tarefas',
        'closed-tasks'     => 'Fechado Tarefas',
        'starred-tasks'    => 'Starred Tarefas',
        'archived-tasks'   => 'Tarefas arquivadas',
    ],
];
