<?php

return [
    'form' => [
        'sections' => [
            'fields' => [
                'skill-type'  => 'Habilidade Tipo',
                'skill'       => 'Habilidade',
                'skill-level' => 'Habilidade Level',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'skill-type'    => 'Habilidade Tipo',
            'skill'         => 'Habilidade',
            'skill-level'   => 'Habilidade Level',
            'level-percent' => 'Level Percent',
            'created-by'    => 'Criado por',
            'user'          => 'Usuário',
            'created-at'    => 'Criado em',
        ],

        'groups' => [
            'skill-type' => 'Habilidade Tipo',
        ],

        'header-actions' => [
            'add-skill' => 'Adicionar habilidade',
        ],

        'filters' => [
            'activity-type'   => 'Atividade Tipo',
            'activity-status' => 'Status da atividade',
            'has-delay'       => 'Has Delay',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Habilidade atualizado',
                    'body'  => 'A Habilidade foi atualizada com sucesso.',
                ],
            ],

            'create' => [
                'notification' => [
                    'title' => 'Habilidade criado',
                    'body'  => 'A Habilidade foi criada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Habilidade excluído',
                    'body'  => 'A Habilidade foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Habilidades excluído',
                    'body'  => 'O Habilidades foi excluído com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'skill-type'    => 'Habilidade Tipo',
            'skill'         => 'Habilidade',
            'skill-level'   => 'Habilidade Level',
            'level-percent' => 'Level Percent',
        ],
    ],
];
