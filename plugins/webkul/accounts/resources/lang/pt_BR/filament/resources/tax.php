<?php

return [
    'form' => [
        'sections' => [
            'fields' => [
                'name'            => 'Nome',
                'tax-type'        => 'Imposto Tipo',
                'tax-computation' => 'Imposto Computation',
                'tax-scope'       => 'Imposto Scope',
                'status'          => 'Status',
                'amount'          => 'Valor',
            ],

            'repeater' => [
                'invoice-repartition-lines' => [
                    'label' => 'Fatura Repartition Linhas',
                ],

                'refund-repartition-lines' => [
                    'label' => 'Reembolso Repartition Linhas',
                ],

                'fields' => [
                    'type'           => 'Tipo',
                    'factor-percent' => 'Fator %',
                    'account'        => 'Conta',
                ],
            ],

            'field-set' => [
                'advanced-options' => [
                    'title' => 'Opções avançadas',

                    'fields' => [
                        'invoice-label'       => 'Fatura rótulo',
                        'tax-group'           => 'Grupo de impostos',
                        'country'             => 'Country',
                        'include-in-price'    => 'Included in Preço',
                        'include-base-amount' => 'Afetar base de impostos subsequentes',
                        'is-base-affected'    => 'Base afetada por impostos anteriores',
                    ],
                ],

                'fields' => [
                    'description' => 'Descrição',
                    'legal-notes' => 'Legal Notas',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                   => 'Nome',
            'amount-type'            => 'Tipo de valor',
            'company'                => 'Empresa',
            'tax-group'              => 'Grupo de impostos',
            'country'                => 'Country',
            'tax-type'               => 'Imposto Tipo',
            'tax-scope'              => 'Imposto Scope',
            'amount-type'            => 'Tipo de valor',
            'invoice-label'          => 'Fatura Rótulo',
            'tax-exigibility'        => 'Imposto Exigibility',
            'price-include-override' => 'Preço Incluir Override',
            'amount'                 => 'Valor',
            'status'                 => 'Status',
            'include-base-amount'    => 'Incluir Base Valor',
            'is-base-affected'       => 'Is Base Affected',
        ],

        'groups' => [
            'name'         => 'Nome',
            'company'      => 'Empresa',
            'tax-group'    => 'Grupo de impostos',
            'country'      => 'Country',
            'created-by'   => 'Criado por',
            'type-tax-use' => 'Tipo Imposto Use',
            'tax-scope'    => 'Imposto Scope',
            'amount-type'  => 'Tipo de valor',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Imposto excluído',
                        'body'  => 'O Imposto foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Imposto could não be excluído',
                        'body'  => 'The imposto cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Impostos excluído',
                        'body'  => 'O Impostos foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Impostos could não be excluído',
                        'body'  => 'The impostos cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],

        'pages' => [
            'create' => [
                'notifications' => [
                    'invalid-repartition-lines' => [
                        'title' => 'Inválido Repartition Linhas',
                    ],
                ],
            ],

            'edit' => [
                'notifications' => [
                    'invalid-repartition-lines' => [
                        'title' => 'Inválido Repartition Linhas',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'name'            => 'Nome',
                'tax-type'        => 'Imposto Tipo',
                'tax-computation' => 'Imposto Computation',
                'tax-scope'       => 'Imposto Scope',
                'status'          => 'Status',
                'amount'          => 'Valor',
            ],

            'field-set' => [
                'advanced-options' => [
                    'title' => 'Opções avançadas',

                    'entries' => [
                        'invoice-label'       => 'Fatura rótulo',
                        'tax-group'           => 'Grupo de impostos',
                        'country'             => 'Country',
                        'include-in-price'    => 'Incluir in preço',
                        'include-base-amount' => 'Incluir base valor',
                        'is-base-affected'    => 'Is base affected',
                    ],
                ],

                'description-and-legal-notes' => [
                    'title'   => 'Descrição & Fatura Legal Notas',
                    'entries' => [
                        'description' => 'Descrição',
                        'legal-notes' => 'Legal Notas',
                    ],
                ],
            ],
        ],
    ],

];
