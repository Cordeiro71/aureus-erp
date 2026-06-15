<?php

return [
    'title' => 'Usuários',

    'navigation' => [
        'title' => 'Usuários',
        'group' => 'Configurações',
    ],

    'global-search' => [
        'email' => 'E-mail',
    ],

    'form' => [
        'validation' => [
            'cannot-remove-last-admin'   => 'Não é possível remover o papel de administrador do último usuário administrador.',
            'first-user-must-be-admin'   => 'O primeiro usuário do sistema deve receber um papel de administrador.',
        ],

        'sections' => [
            'general-information' => [
                'title'  => 'Informações gerais',
                'fields' => [
                    'name'                  => 'Nome',
                    'email'                 => 'E-mail',
                    'password'              => 'Senha',
                    'password-confirmation' => 'Confirmação de senha',
                ],
            ],

            'permissions' => [
                'title'  => 'Permissões',
                'fields' => [
                    'roles'                                    => 'Papéis',
                    'permissions'                              => 'Permissões',
                    'resource-permission'                      => 'Permissão de recurso',
                    'resource-permission-self-change-disabled' => 'Você não pode alterar sua própria permissão de recurso. peça a outro administrador para atualizá-la.',
                    'teams'                                    => 'Equipes',
                ],
            ],

            'avatar' => [
                'title' => 'Avatar',
            ],

            'lang-and-status' => [
                'title'  => 'Idioma & Status',
                'fields' => [
                    'language' => 'Idioma preferido',
                    'status'   => 'Status',
                ],
            ],

            'multi-company' => [
                'title'             => 'Multi-empresa',
                'allowed-companies' => 'Empresas permitidas',
                'default-company'   => 'Empresa padrão',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'avatar'              => 'Avatar',
            'name'                => 'Nome',
            'email'               => 'E-mail',
            'teams'               => 'Equipes',
            'role'                => 'Papel',
            'resource-permission' => 'Permissão de recurso',
            'default-company'     => 'Empresa padrão',
            'allowed-company'     => 'Empresa permitida',
            'created-by'          => 'Criado por',
            'created-at'          => 'Criado em',
            'updated-at'          => 'Atualizado em',
        ],

        'filters' => [
            'resource-permission' => 'Permissão de recurso',
            'teams'               => 'Equipes',
            'roles'               => 'Papéis',
            'default-company'     => 'Empresa padrão',
            'allowed-companies'   => 'Empresas permitidas',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Usuário edited',
                    'body'  => 'O Usuário foi edited com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Usuário excluído',
                    'body'  => 'O Usuário foi excluído com sucesso.',
                    'error' => [
                        'title' => 'Usuário Cannot Be excluído',
                        'body'  => 'Este é um usuário padrão ou você não pode excluir a si mesmo.',
                    ],
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Usuário restaurado',
                    'body'  => 'O Usuário foi restaurado com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Usuários restaurado',
                    'body'  => 'O Usuários foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Usuários excluído',
                    'body'  => 'O Usuários foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Usuários excluído definitivamente',
                    'body'  => 'O Usuários foi excluído definitivamente com sucesso.',
                    'error' => [
                        'title' => 'Usuário could não be excluído',
                        'body'  => 'O usuário não pode ser excluído porque está em uso.',
                    ],
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Usuários criado',
                    'body'  => 'O Usuários foi criado com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general-information' => [
                'title'   => 'Informações gerais',
                'entries' => [
                    'name'                  => 'Nome',
                    'email'                 => 'E-mail',
                    'password'              => 'Senha',
                    'password-confirmation' => 'Confirmação de senha',
                ],
            ],

            'permissions' => [
                'title'   => 'Permissões',
                'entries' => [
                    'roles'               => 'Papéis',
                    'permissions'         => 'Permissões',
                    'resource-permission' => 'Permissão de recurso',
                    'teams'               => 'Equipes',
                ],
            ],

            'avatar' => [
                'title' => 'Avatar',
            ],

            'lang-and-status' => [
                'title'   => 'Idioma & Status',
                'entries' => [
                    'language' => 'Idioma preferido',
                    'status'   => 'Status',
                ],
            ],

            'multi-company' => [
                'title'             => 'Multi-empresa',
                'allowed-companies' => 'Empresas permitidas',
                'default-company'   => 'Empresa padrão',
            ],
        ],
    ],
];
