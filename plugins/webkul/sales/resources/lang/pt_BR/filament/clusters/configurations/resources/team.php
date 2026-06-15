<?php

return [
    'title' => 'Vendas Equipes',

    'navigation' => [
        'title' => 'Vendas Equipes',
    ],

    'form' => [
        'sections' => [
            'fields' => [
                'name'     => 'Vendas Equipe',
                'status'   => 'Status',
                'fieldset' => [
                    'team-details' => [
                        'title'  => 'Equipe Detalhes',
                        'fields' => [
                            'team-leader'            => 'Equipe Leader',
                            'company'                => 'Empresa',
                            'invoiced-target'        => 'Faturado Target',
                            'invoiced-target-suffix' => '/ Mês',
                            'color'                  => 'Cor',
                            'members'                => 'Members',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'              => 'ID',
            'company'         => 'Empresa',
            'team-leader'     => 'Equipe Leader',
            'name'            => 'Nome',
            'status'          => 'Status',
            'invoiced-target' => 'Faturado Target',
            'color'           => 'Cor',
            'created-by'      => 'Criado por',
            'created-at'      => 'Criado em',
            'updated-at'      => 'Atualizado em',
        ],

        'filters' => [
            'name'        => 'Nome',
            'team-leader' => 'Equipe Leader',
            'company'     => 'Empresa',
            'created-by'  => 'Criado por',
            'updated-at'  => 'Atualizado em',
            'created-at'  => 'Criado em',
        ],

        'groups' => [
            'name'        => 'Nome',
            'company'     => 'empresa',
            'team-leader' => 'Equipe Leader',
            'created-at'  => 'Criado em',
            'updated-at'  => 'Atualizado em',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Vendas Equipe restaurado',
                    'body'  => 'O Vendas equipe foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Vendas Equipe excluído',
                    'body'  => 'O Vendas equipe foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Vendas Equipe excluído definitivamente',
                    'body'  => 'O Vendas equipe foi excluído definitivamente com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Vendas Equipes restaurado',
                    'body'  => 'O Vendas equipes foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Vendas Equipes excluído',
                    'body'  => 'O Vendas equipes foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Vendas Equipes excluído definitivamente',
                    'body'  => 'O Vendas equipes foi excluído definitivamente com sucesso.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'Vendas Equipes criado',
                    'body'  => 'O Vendas equipes foi criado com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'name'     => 'Vendas Equipe',
                'status'   => 'Status',
                'fieldset' => [
                    'team-details' => [
                        'title'   => 'Equipe Detalhes',
                        'entries' => [
                            'team-leader'            => 'Equipe Leader',
                            'company'                => 'Empresa',
                            'invoiced-target'        => 'Faturado Target',
                            'invoiced-target-suffix' => '/ Mês',
                            'color'                  => 'Cor',
                            'members'                => 'Members',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
