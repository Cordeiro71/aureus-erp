<?php

return [
    'title' => 'Candidate',

    'navigation' => [
        'title' => 'Candidates',
    ],

    'global-search' => [
        'email-from' => 'E-mail De',
        'phone'      => 'Telefone',
        'company'    => 'Empresa',
        'degree'     => 'Degree',
    ],

    'form' => [
        'sections' => [
            'basic-information' => [
                'title' => 'Informações básicas',

                'fields' => [
                    'full-name' => 'Nome completo',
                    'email'     => 'E-mail Endereço',
                    'phone'     => 'Telefone Number',
                    'linkedin'  => 'LinkedIn Perfil',
                    'contact'   => 'Contato',
                ],
            ],

            'additional-details' => [
                'title' => 'Detalhes adicionais',

                'fields' => [
                    'company'           => 'Empresa',
                    'degree'            => 'Degree',
                    'tags'              => 'Etiquetas',
                    'manager'           => 'Gerente',
                    'availability-date' => 'Data de disponibilidade',

                    'priority-options' => [
                        'low'    => 'Low',
                        'medium' => 'Médio',
                        'high'   => 'High',
                    ],
                ],
            ],

            'status-and-evaluation' => [
                'title' => 'Status',

                'fields' => [
                    'active'     => 'Ativo',
                    'evaluation' => 'Evaluation',
                ],
            ],

            'communication' => [
                'title' => 'Communication',

                'fields' => [
                    'cc-email'      => 'CC E-mail',
                    'email-bounced' => 'E-mail Bounced',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Nome completo',
            'tags'       => 'Etiquetas',
            'evaluation' => 'Evaluation',
        ],

        'filters' => [
            'company'      => 'Empresa',
            'partner-name' => 'Contato',
            'degree'       => 'Degree',
            'manager-name' => 'Gerente',
        ],

        'groups' => [
            'manager-name' => 'Gerente',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Candidate excluído',
                    'body'  => 'O Candidates foi excluído com sucesso.',
                ],
            ],

            'empty-state-actions' => [
                'create' => [
                    'notification' => [
                        'title' => 'Candidate criado',
                        'body'  => 'O Candidates foi criado com sucesso.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Candidates excluído',
                    'body'  => 'O Candidates foi excluído com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'basic-information' => [
                'title' => 'Informações básicas',

                'entries' => [
                    'full-name' => 'Nome completo',
                    'email'     => 'E-mail Endereço',
                    'phone'     => 'Telefone Number',
                    'linkedin'  => 'LinkedIn Perfil',
                    'contact'   => 'Contato',
                ],
            ],

            'additional-details' => [
                'title' => 'Detalhes adicionais',

                'entries' => [
                    'company'           => 'Empresa',
                    'degree'            => 'Degree',
                    'tags'              => 'Etiquetas',
                    'manager'           => 'Gerente',
                    'availability-date' => 'Data de disponibilidade',

                    'priority-options' => [
                        'low'    => 'Low',
                        'medium' => 'Médio',
                        'high'   => 'High',
                    ],
                ],
            ],

            'status-and-evaluation' => [
                'title' => 'Status',

                'entries' => [
                    'active'     => 'Ativo',
                    'evaluation' => 'Evaluation',
                ],
            ],

            'communication' => [
                'title' => 'Communication',

                'entries' => [
                    'cc-email'      => 'CC E-mail',
                    'email-bounced' => 'E-mail Bounced',
                ],
            ],
        ],
    ],
];
