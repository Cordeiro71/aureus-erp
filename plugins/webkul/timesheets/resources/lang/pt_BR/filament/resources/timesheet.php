<?php

return [
    'title' => 'Planilhas de horas',

    'navigation' => [
        'title' => 'Planilhas de horas',
        'group' => 'Projeto',
    ],

    'global-search' => [
        'project' => 'Projeto',
        'task'    => 'Tarefa',
        'date'    => 'Data',
    ],

    'form' => [
        'date'                   => 'Data',
        'employee'               => 'Funcionário',
        'project'                => 'Projeto',
        'task'                   => 'Tarefa',
        'description'            => 'Descrição',
        'time-spent'             => 'Hora Spent',
        'time-spent-helper-text' => 'Hora spent in horas (Eg. 1.5 horas means 1 hora 30 minutos)',
    ],

    'table' => [
        'columns' => [
            'date'        => 'Data',
            'employee'    => 'Funcionário',
            'project'     => 'Projeto',
            'task'        => 'Tarefa',
            'description' => 'Descrição',
            'time-spent'  => 'Hora Spent',
            'created-at'  => 'Criado em',
            'updated-at'  => 'Atualizado em',
        ],

        'groups' => [
            'date'       => 'Data',
            'employee'   => 'Funcionário',
            'project'    => 'Projeto',
            'task'       => 'Tarefa',
            'creator'    => 'Creator',
        ],

        'filters' => [
            'date-from'  => 'Data De',
            'date-until' => 'Data Until',
            'employee'   => 'Funcionário',
            'project'    => 'Projeto',
            'task'       => 'Tarefa',
            'creator'    => 'Creator',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Planilha de horas atualizado',
                    'body'  => 'O Planilha de horas foi atualizado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Planilha de horas excluído',
                    'body'  => 'O Planilha de horas foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Planilhas de horas excluído',
                    'body'  => 'O Planilhas de horas foi excluído com sucesso.',
                ],
            ],
        ],
    ],
];
