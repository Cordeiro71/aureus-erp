<?php

return [
    'title' => 'Equipes',

    'navigation' => [
        'title' => 'Equipes',
        'group' => 'Configurações',
    ],

    'form' => [
        'fields' => [
            'name' => 'Nome',
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Nome',
            'created-by' => 'Criado por',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Equipe atualizado',
                    'body'  => 'A Equipe foi atualizada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Equipe excluído',
                    'body'  => 'A Equipe foi excluído com sucesso.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Equipes criado',
                    'body'  => 'O Equipes foi criado com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'name'          => 'Nome',
                'job-title'     => 'Cargo Título',
                'work-email'    => 'Work E-mail',
                'work-mobile'   => 'Work Celular',
                'work-phone'    => 'Work Telefone',
                'manager'       => 'Gerente',
                'department'    => 'Departamento',
                'job-position'  => 'Cargo Cargo',
                'team-tags'     => 'Equipe Etiquetas',
                'coach'         => 'Coach',
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name' => 'Nome',
        ],
    ],
];
