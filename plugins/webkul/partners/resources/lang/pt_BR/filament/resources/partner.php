<?php

return [
    'global-search' => [
        'email' => 'E-mail',
        'phone' => 'Telefone',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Geral',

                'fields' => [
                    'company'    => 'Empresa',
                    'avatar'     => 'Avatar',
                    'tax-id'     => 'Imposto ID',
                    'job-title'  => 'Cargo Título',
                    'phone'      => 'Telefone',
                    'mobile'     => 'Celular',
                    'email'      => 'E-mail',
                    'website'    => 'Site',
                    'title'      => 'Título',
                    'name'       => 'Nome',
                    'short-name' => 'Short Nome',
                    'tags'       => 'Etiquetas',
                    'color'      => 'Cor',
                ],

                'address' => [
                    'title' => 'Endereço',

                    'fields' => [
                        'street1'  => 'Street 1',
                        'street2'  => 'Street 2',
                        'city'     => 'City',
                        'zip'      => 'ZIP',
                        'state'    => 'State',
                        'country'  => 'Country',
                        'name'     => 'Nome',
                        'code'     => 'Code',
                    ],
                ],
            ],
        ],

        'tabs' => [
            'sales-purchase' => [
                'title' => 'Vendas e Compras',

                'fields' => [
                    'responsible'           => 'Responsible',
                    'responsible-hint-text' => 'Este is interno salesperson responsible para este cliente',
                    'company-id'            => 'Empresa ID',
                    'company-id-hint-text'  => 'The company\'The empresa\'s registry number, used if different de the Imposto ID. It must be unique among todos parceiros within the mesmo country.',
                    'reference'             => 'Referência',
                    'industry'              => 'Setor',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'parent'     => 'Pai',
        ],

        'groups' => [
            'account-type' => 'Tipo de conta',
            'parent'       => 'Pai',
            'title'        => 'Título',
            'job-title'    => 'Cargo Título',
            'industry'     => 'Setor',
        ],

        'filters' => [
            'account-type'     => 'Tipo de conta',
            'name'             => 'Nome',
            'email'            => 'E-mail',
            'parent'           => 'Pai',
            'title'            => 'Título',
            'tax-id'           => 'Imposto ID',
            'phone'            => 'Telefone',
            'mobile'           => 'Celular',
            'job-title'        => 'Cargo Título',
            'website'          => 'Site',
            'company-registry' => 'Empresa Registry',
            'responsible'      => 'Responsible',
            'reference'        => 'Referência',
            'parent'           => 'Pai',
            'creator'          => 'Creator',
            'company'          => 'Empresa',
            'industry'         => 'Setor',
            'industry'         => 'Setor',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Contato atualizado',
                    'body'  => 'O Contato foi atualizado com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Contato restaurado',
                    'body'  => 'O Contato foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Contato excluído',
                    'body'  => 'O Contato foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Contato excluído definitivamente',
                        'body'  => 'O Contato foi excluído definitivamente com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Contato could não be excluído',
                        'body'  => 'The contato cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Contatos restaurado',
                    'body'  => 'O Contatos foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Contatos excluído',
                    'body'  => 'O Contatos foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Contatos excluído definitivamente',
                        'body'  => 'O Contatos foi excluído definitivamente com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Contatos could não be excluído',
                        'body'  => 'The contatos cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Geral',

                'fields' => [
                    'company'    => 'Empresa',
                    'avatar'     => 'Avatar',
                    'tax-id'     => 'Imposto ID',
                    'job-title'  => 'Cargo Título',
                    'phone'      => 'Telefone',
                    'mobile'     => 'Celular',
                    'email'      => 'E-mail',
                    'website'    => 'Site',
                    'title'      => 'Título',
                    'name'       => 'Nome',
                    'short-name' => 'Short Nome',
                    'tags'       => 'Etiquetas',
                ],

                'address' => [
                    'title' => 'Endereço',

                    'fields' => [
                        'street1'  => 'Street 1',
                        'street2'  => 'Street 2',
                        'city'     => 'City',
                        'zip'      => 'ZIP',
                        'state'    => 'State',
                        'country'  => 'Country',
                        'name'     => 'Nome',
                        'code'     => 'Code',
                    ],
                ],
            ],
        ],

        'tabs' => [
            'sales-purchase' => [
                'title' => 'Vendas e Compras',

                'fields' => [
                    'responsible'           => 'Responsible',
                    'responsible-hint-text' => 'Este is interno salesperson responsible para este cliente',
                    'company-id'            => 'Empresa ID',
                    'company-id-hint-text'  => 'The registry number de the empresa. Use it if it is different de the Imposto ID. It must be unique across todos parceiros de a mesmo country',
                    'reference'             => 'Referência',
                    'industry'              => 'Setor',
                ],
            ],
        ],
    ],
];
