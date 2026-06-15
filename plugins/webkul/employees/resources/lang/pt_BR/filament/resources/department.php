<?php

return [
    'title' => 'Departamentos',

    'navigation' => [
        'title' => 'Departamentos',
        'group' => 'Funcionários',
    ],

    'global-search' => [
        'department-manager' => 'Gerente',
        'company'            => 'Empresa',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Informações gerais',

                'fields' => [
                    'name'                => 'Nome',
                    'manager'             => 'Gerente',
                    'parent-department'   => 'Pai Departamento',
                    'manager-placeholder' => 'Selecionar Gerente',
                    'company'             => 'Empresa',
                    'company-placeholder' => 'Selecionar Empresa',
                    'color'               => 'Cor',
                ],
            ],

            'additional' => [
                'title'       => 'Informações adicionais',
                'description' => 'Informações adicionais sobre este departamento.',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => 'Nome',
            'manager-name' => 'Gerente',
            'company-name' => 'Empresa',
        ],

        'groups' => [
            'name'       => 'Nome',
            'manager'    => 'Gerente',
            'company'    => 'Empresa',
            'updated-at' => 'Atualizado em',
            'created-at' => 'Criado em',
        ],

        'filters' => [
            'name'         => 'Nome',
            'manager-name' => 'Gerente',
            'company-name' => 'Empresa',
            'updated-at'   => 'Atualizado em',
            'created-at'   => 'Criado em',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Departamento restaurado',
                    'body'  => 'O Departamento foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Departamento excluído',
                    'body'  => 'O Departamento foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Departamento excluído definitivamente',
                    'body'  => 'O Departamento foi excluído definitivamente com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Departamentos restaurado',
                    'body'  => 'O Departamentos foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Departamentos excluído',
                    'body'  => 'O Departamentos foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Departamentos excluído definitivamente',
                    'body'  => 'O Departamentos foi excluído definitivamente com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Geral',

                'entries' => [
                    'name'            => 'Nome',
                    'manager'         => 'Gerente',
                    'company'         => 'Empresa',
                    'color'           => 'Cor',
                    'hierarchy-title' => 'Departamento Organization',
                ],
            ],
        ],
    ],
];
