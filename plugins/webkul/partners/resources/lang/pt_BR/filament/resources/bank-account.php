<?php

return [
    'navigation' => [
        'group' => 'Bancos',
        'title' => 'Contas bancárias',
    ],

    'form' => [
        'account-number'     => 'Número da conta',
        'bank'               => 'Banco',
        'account-holder'     => 'Titular da conta',
        'can-send-money'     => 'Can Enviar Money',
    ],

    'table' => [
        'columns' => [
            'account-number' => 'Número da conta',
            'bank'           => 'Banco',
            'account-holder' => 'Titular da conta',
            'send-money'     => 'Can Enviar Money',
            'created-at'     => 'Criado em',
            'updated-at'     => 'Atualizado em',
            'deleted-at'     => 'Excluído em',
        ],

        'filters' => [
            'bank'           => 'Banco',
            'account-holder' => 'Titular da conta',
            'creator'        => 'Creator',
            'can-send-money' => 'Can Enviar Money',
        ],

        'groups' => [
            'bank'               => 'Banco',
            'can-send-money'     => 'Can Enviar Money',
            'created-at'         => 'Criado em',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Conta bancária atualizado',
                    'body'  => 'A Conta bancária foi atualizada com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Conta bancária restaurado',
                    'body'  => 'A Conta bancária foi restaurada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Conta bancária excluído',
                    'body'  => 'A Conta bancária foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Conta bancária excluído definitivamente',
                    'body'  => 'A Conta bancária foi excluído definitivamente com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Contas bancárias restaurado',
                    'body'  => 'O Contas bancárias foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Contas bancárias excluído',
                    'body'  => 'O Contas bancárias foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Contas bancárias excluído definitivamente',
                    'body'  => 'O Contas bancárias foi excluído definitivamente com sucesso.',
                ],
            ],
        ],
    ],
];
