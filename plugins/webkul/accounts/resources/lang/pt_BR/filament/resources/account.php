<?php

return [
    'global-search' => [
        'code' => 'Code',
        'type' => 'Tipo',
    ],

    'form' => [
        'sections' => [
            'fields' => [
                'code'                   => 'Code',
                'account-name'           => 'Nome da conta',
                'accounting'             => 'Contabilidade',
                'account-type'           => 'Tipo de conta',
                'parent-account'         => 'Pai Conta',
                'parent-account-helper'  => 'Selecionar an existing conta para make este a sub-conta.',
                'default-taxes'          => 'Padrão Impostos',
                'tags'                   => 'Etiquetas',
                'journals'               => 'Diários',
                'journals-helper'        => 'Suggested automatically baseado em the selected Tipo de conta. You can override the seleção.',
                'currency'               => 'Moeda',
                'deprecated'             => 'Deprecated',
                'reconcile'              => 'Permitir conciliação',
                'non-trade'              => 'Non Trade',
                'companies'              => 'Empresas',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'code'           => 'Code',
            'account-name'   => 'Nome da conta',
            'account-type'   => 'Conta',
            'parent-account' => 'Pai Conta',
            'currency'       => 'Moeda',
            'journals'       => 'Diários',
            'reconcile'      => 'Permitir conciliação',
        ],

        'grouping' => [
            'account-type' => 'Tipo de conta',
        ],

        'filters' => [
            'account-type'     => 'Tipo de conta',
            'parent-account'   => 'Pai Conta',
            'allow-reconcile'  => 'Permitir conciliação',
            'currency'         => 'Moeda',
            'account-journals' => 'Diários',
            'non-trade'        => 'Non Trade',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Conta atualizado',
                    'body'  => 'A Conta foi atualizada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Conta excluído',
                        'body'  => 'A Conta foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Falha ao excluir a conta',
                        'body'  => 'The conta could não be deleted because it has associated diário itens.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Contas excluído',
                        'body'  => 'O Contas foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Contas deletion falhou',
                        'body'  => 'The contas could não be deleted because they have associated diário itens.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'code'           => 'Code',
                'account-name'   => 'Nome da conta',
                'accounting'     => 'Contabilidade',
                'account-type'   => 'Tipo de conta',
                'parent-account' => 'Pai Conta',
                'sub-accounts'   => 'Sub Contas',
                'default-taxes'  => 'Padrão Impostos',
                'tags'           => 'Etiquetas',
                'journals'       => 'Diários',
                'currency'       => 'Moeda',
                'deprecated'     => 'Deprecated',
                'reconcile'      => 'Conciliar',
                'non-trade'      => 'Non Trade',
            ],
        ],
    ],
];
