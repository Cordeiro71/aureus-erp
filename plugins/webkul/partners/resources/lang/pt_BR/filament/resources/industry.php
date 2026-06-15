<?php

return [
    'form' => [
        'name'      => 'Nome',
        'full-name' => 'Nome completo',
    ],

    'table' => [
        'columns' => [
            'name'       => 'Nome',
            'full-name'  => 'Nome completo',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Setor atualizado',
                    'body'  => 'O Setor foi atualizado com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Setor restaurado',
                    'body'  => 'O Setor foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Setor excluído',
                    'body'  => 'O Setor foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Setor excluído definitivamente',
                    'body'  => 'O Setor foi excluído definitivamente com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Setores restaurado',
                    'body'  => 'O Setores foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Setores excluído',
                    'body'  => 'O Setores foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Setores excluído definitivamente',
                    'body'  => 'O Setores foi excluído definitivamente com sucesso.',
                ],
            ],
        ],
    ],
];
