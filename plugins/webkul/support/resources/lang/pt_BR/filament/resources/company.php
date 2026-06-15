<?php

return [
    'title' => 'Empresas',

    'navigation' => [
        'title' => 'Empresas',
        'group' => 'Configurações',
    ],

    'global-search' => [
        'email' => 'E-mail',
    ],

    'form' => [
        'sections' => [
            'company-information' => [
                'title'  => 'Empresa Information',
                'fields' => [
                    'name'                  => 'Empresa Nome',
                    'registration-number'   => 'Registration Number',
                    'company-id'            => 'Empresa ID',
                    'tax-id'                => 'Imposto ID',
                    'tax-id-tooltip'        => 'The Imposto ID is a unique identifier para your empresa.',
                    'website'               => 'Site',
                ],
            ],

            'address-information' => [
                'title'  => 'Endereço Information',

                'fields' => [
                    'street1'        => 'Street 1',
                    'street2'        => 'Street 2',
                    'city'           => 'City',
                    'zipcode'        => 'Zip Code',
                    'country'        => 'Country',
                    'currency-name'  => 'Moeda Nome',
                    'phone-code'     => 'Telefone Code',
                    'code'           => 'Code',
                    'country-name'   => 'Country Nome',
                    'state-required' => 'State Obrigatório',
                    'zip-required'   => 'Zip Obrigatório',
                    'create-country' => 'Criar Country',
                    'state'          => 'State',
                    'state-name'     => 'State Nome',
                    'state-code'     => 'State Code',
                    'create-state'   => 'Criar State',
                ],
            ],

            'additional-information' => [
                'title' => 'Informações adicionais',

                'fields' => [
                    'default-currency'        => 'Padrão Moeda',
                    'currency-name'           => 'Moeda Nome',
                    'currency-full-name'      => 'Moeda Nome completo',
                    'currency-symbol'         => 'Moeda Symbol',
                    'currency-iso-numeric'    => 'Moeda ISO Numérico',
                    'currency-decimal-places' => 'Moeda Decimal Places',
                    'currency-rounding'       => 'Moeda Rounding',
                    'currency-status'         => 'Moeda Status',
                    'company-foundation-date' => 'Empresa Foundation Data',
                    'currency-create'         => 'Criar Moeda',
                    'status'                  => 'Status',
                ],
            ],

            'branding' => [
                'title'  => 'Identidade visual',
                'fields' => [
                    'company-logo' => 'Empresa Logo',
                    'color'        => 'Cor',
                ],
            ],

            'contact-information' => [
                'title'  => 'Contato Information',
                'fields' => [
                    'email'  => 'E-mail Endereço',
                    'phone'  => 'Telefone Number',
                    'mobile' => 'Telefone Number',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'logo'                 => 'Logo',
            'company-name'         => 'Empresa Nome',
            'branches'             => 'Filiais',
            'email'                => 'E-mail',
            'city'                 => 'City',
            'country'              => 'Country',
            'currency'             => 'Moeda',
            'status'               => 'Status',
            'created-at'           => 'Criado em',
            'updated-at'           => 'Atualizado em',
        ],

        'groups' => [
            'company-name' => 'Empresa Nome',
            'city'         => 'City',
            'country'      => 'Country',
            'state'        => 'State',
            'email'        => 'E-mail',
            'phone'        => 'Telefone',
            'currency'     => 'Moeda',
            'created-at'   => 'Criado em',
            'updated-at'   => 'Atualizado em',
        ],

        'filters' => [
            'status'  => 'Status',
            'country' => 'Country',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Empresa edited',
                    'body'  => 'A Empresa foi edited com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Empresa excluído',
                    'body'  => 'A Empresa foi excluído com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Empresa restaurado',
                    'body'  => 'A Empresa foi restaurada com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Empresas restaurado',
                    'body'  => 'O Empresas foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Empresas excluído',
                    'body'  => 'O Empresas foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Empresas excluído definitivamente',
                    'body'  => 'O Empresas foi excluído definitivamente com sucesso.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Empresas criado',
                    'body'  => 'O Empresas foi criado com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'company-information' => [
                'title'   => 'Empresa Information',
                'entries' => [
                    'name'                  => 'Empresa Nome',
                    'registration-number'   => 'Registration Number',
                    'company-id'            => 'Empresa ID',
                    'tax-id'                => 'Imposto ID',
                    'tax-id-tooltip'        => 'The Imposto ID is a unique identifier para your empresa.',
                    'website'               => 'Site',
                ],
            ],

            'address-information' => [
                'title'  => 'Endereço Information',

                'entries' => [
                    'street1'        => 'Street 1',
                    'street2'        => 'Street 2',
                    'city'           => 'City',
                    'zipcode'        => 'Zip Code',
                    'country'        => 'Country',
                    'currency-name'  => 'Moeda Nome',
                    'phone-code'     => 'Telefone Code',
                    'code'           => 'Code',
                    'country-name'   => 'Country Nome',
                    'state-required' => 'State Obrigatório',
                    'zip-required'   => 'Zip Obrigatório',
                    'create-country' => 'Criar Country',
                    'state'          => 'State',
                    'state-name'     => 'State Nome',
                    'state-code'     => 'State Code',
                    'create-state'   => 'Criar State',
                ],
            ],

            'additional-information' => [
                'title' => 'Informações adicionais',

                'entries' => [
                    'default-currency'        => 'Padrão Moeda',
                    'currency-name'           => 'Moeda Nome',
                    'currency-full-name'      => 'Moeda Nome completo',
                    'currency-symbol'         => 'Moeda Symbol',
                    'currency-iso-numeric'    => 'Moeda ISO Numérico',
                    'currency-decimal-places' => 'Moeda Decimal Places',
                    'currency-rounding'       => 'Moeda Rounding',
                    'currency-status'         => 'Moeda Status',
                    'company-foundation-date' => 'Empresa Foundation Data',
                    'currency-create'         => 'Criar Moeda',
                    'status'                  => 'Status',
                ],
            ],

            'branding' => [
                'title'   => 'Identidade visual',
                'entries' => [
                    'company-logo' => 'Empresa Logo',
                    'color'        => 'Cor',
                ],
            ],

            'contact-information' => [
                'title'   => 'Contato Information',
                'entries' => [
                    'email'  => 'E-mail Endereço',
                    'phone'  => 'Telefone Number',
                    'mobile' => 'Telefone Number',
                ],
            ],
        ],
    ],
];
