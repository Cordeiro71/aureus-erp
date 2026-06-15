<?php

return [
    'navigation' => [
        'title' => 'Marcos',
    ],

    'form' => [
        'name'         => 'Nome',
        'deadline'     => 'Prazo',
        'is-completed' => 'Is Concluído',
        'project'      => 'Projeto',
    ],

    'table' => [
        'columns' => [
            'name'         => 'Nome',
            'deadline'     => 'Prazo',
            'is-completed' => 'Is Concluído',
            'completed-at' => 'Concluído At',
            'project'      => 'Projeto',
            'creator'      => 'Creator',
            'created-at'   => 'Criado em',
            'updated-at'   => 'Atualizado em',
        ],

        'groups' => [
            'name'         => 'Nome',
            'is-completed' => 'Is Concluído',
            'project'      => 'Projeto',
            'created-at'   => 'Criado em',
        ],

        'filters' => [
            'is-completed' => 'Is Concluído',
            'project'      => 'Projeto',
            'creator'      => 'Creator',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Marco atualizar',
                    'body'  => 'O Marco foi update com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Marco excluído',
                    'body'  => 'O Marco foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Marcos excluído',
                    'body'  => 'O Marcos foi excluído com sucesso.',
                ],
            ],
        ],
    ],
];
