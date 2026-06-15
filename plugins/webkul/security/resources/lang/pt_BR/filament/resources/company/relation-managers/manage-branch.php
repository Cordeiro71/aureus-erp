<?php

return [
    'form' => [
        'tabs' => [
            'general-information' => [
                'title' => 'Informações gerais',

                'sections' => [
                    'branch-information' => [
                        'title' => 'Informações da filial',

                        'fields' => [
                            'company-name'                => 'Empresa Nome',
                            'registration-number'         => 'Registration Number',
                            'tax-id'                      => 'Imposto ID',
                            'tax-id-tooltip'              => 'The Imposto ID is a unique identifier para your empresa.',
                            'color'                       => 'Cor',
                            'company-id'                  => 'Empresa ID',
                            'company-id-tooltip'          => 'The Empresa ID is a unique identifier para your empresa.',
                        ],
                    ],

                    'branding' => [
                        'title'  => 'Identidade visual',
                        'fields' => [
                            'branch-logo' => 'Logo da filial',
                        ],
                    ],
                ],
            ],

            'address-information' => [
                'title' => 'Endereço Information',

                'sections' => [
                    'address-information' => [
                        'title' => 'Endereço Information',

                        'fields' => [
                            'street1'                => 'Street 1',
                            'street2'                => 'Street 2',
                            'city'                   => 'City',
                            'zip'                    => 'Zip Code',
                            'country'                => 'Country',
                            'country-currency-name'  => 'Moeda Nome',
                            'country-phone-code'     => 'Telefone Code',
                            'country-code'           => 'Code',
                            'country-name'           => 'Country Nome',
                            'country-state-required' => 'State Obrigatório',
                            'country-zip-required'   => 'Zip Obrigatório',
                            'country-create'         => 'Criar Country',
                            'state'                  => 'State',
                            'state-name'             => 'State Nome',
                            'state-code'             => 'State Code',
                            'zip-code'               => 'Zip Code',
                            'state-create'           => 'Criar State',
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
                            'currency-create'         => 'Criar Moeda',
                            'company-foundation-date' => 'Empresa Foundation Data',
                            'status'                  => 'Status',
                        ],
                    ],
                ],
            ],

            'contact-information' => [
                'title' => 'Contato Information',

                'sections' => [
                    'contact-information' => [
                        'title' => 'Contato Information',

                        'fields' => [
                            'email-address' => 'E-mail Endereço',
                            'phone-number'  => 'Telefone Number',
                            'mobile-number' => 'Telefone Number',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'logo'                 => 'Logo',
            'company-name'         => 'Nome da filial',
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
            'company-name' => 'Nome da filial',
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
            'trashed' => 'Trashed',
            'status'  => 'Status',
            'country' => 'Country',
        ],

        'header-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Filial criado',
                    'body'  => 'A Filial foi criada com sucesso.',
                ],
            ],
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Filial atualizado',
                    'body'  => 'A Filial foi atualizada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Filial excluído',
                    'body'  => 'A Filial foi excluído com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Filial restaurado',
                    'body'  => 'A Filial foi restaurada com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Filiais restaurado',
                    'body'  => 'O Filiais foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Filiais excluído',
                    'body'  => 'O Filiais foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Filiais excluído definitivamente',
                    'body'  => 'O Filiais foi excluído definitivamente com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'tabs' => [
            'general-information' => [
                'title' => 'Informações gerais',

                'sections' => [
                    'branch-information' => [
                        'title' => 'Informações da filial',

                        'entries' => [
                            'company-name'                => 'Empresa Nome',
                            'registration-number'         => 'Registration Number',
                            'registration-number-tooltip' => 'The Imposto ID is a unique identifier para your empresa.',
                            'color'                       => 'Cor',
                        ],
                    ],

                    'branding' => [
                        'title'   => 'Identidade visual',
                        'entries' => [
                            'branch-logo' => 'Logo da filial',
                        ],
                    ],
                ],
            ],

            'address-information' => [
                'title' => 'Endereço Information',

                'sections' => [
                    'address-information' => [
                        'title' => 'Endereço Information',

                        'entries' => [
                            'street1'                => 'Street 1',
                            'street2'                => 'Street 2',
                            'city'                   => 'City',
                            'zip'                    => 'Zip Code',
                            'country'                => 'Country',
                            'country-currency-name'  => 'Moeda Nome',
                            'country-phone-code'     => 'Telefone Code',
                            'country-code'           => 'Code',
                            'country-name'           => 'Country Nome',
                            'country-state-required' => 'State Obrigatório',
                            'country-zip-required'   => 'Zip Obrigatório',
                            'country-create'         => 'Criar Country',
                            'state'                  => 'State',
                            'state-name'             => 'State Nome',
                            'state-code'             => 'State Code',
                            'zip-code'               => 'Zip Code',
                            'state-create'           => 'Criar State',
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
                            'currency-create'         => 'Criar Moeda',
                            'company-foundation-date' => 'Empresa Foundation Data',
                            'status'                  => 'Status',
                        ],
                    ],
                ],
            ],

            'contact-information' => [
                'title' => 'Contato Information',

                'sections' => [
                    'contact-information' => [
                        'title' => 'Contato Information',

                        'entries' => [
                            'email-address' => 'E-mail Endereço',
                            'phone-number'  => 'Telefone Number',
                            'mobile-number' => 'Telefone Number',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
