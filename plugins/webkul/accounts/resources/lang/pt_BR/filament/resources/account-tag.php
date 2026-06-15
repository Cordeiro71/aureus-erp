<?php

return [
    'form' => [
        'fields' => [
            'color'         => 'Cor',
            'country'       => 'Country',
            'applicability' => 'Aplicabilidade',
            'name'          => 'Nome',
            'status'        => 'Status',
            'tax-negate'    => 'Imposto Negate',
        ],
    ],

    'table' => [
        'columns' => [
            'color'         => 'Cor',
            'country'       => 'Country',
            'created-by'    => 'Criado por',
            'applicability' => 'Aplicabilidade',
            'name'          => 'Nome',
            'status'        => 'Status',
            'tax-negate'    => 'Imposto Negate',
            'created-at'    => 'Criado em',
            'updated-at'    => 'Atualizado em',
            'deleted-at'    => 'Excluído em',
        ],

        'filters' => [
            'bank'           => 'Banco',
            'account-holder' => 'Titular da conta',
            'creator'        => 'Creator',
            'can-send-money' => 'Can Enviar Money',
        ],

        'groups' => [
            'country'       => 'Country',
            'created-by'    => 'Criado por',
            'applicability' => 'Aplicabilidade',
            'name'          => 'Nome',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Etiqueta de conta atualizado',
                    'body'  => 'A Etiqueta de conta foi atualizada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Etiqueta de conta excluído',
                    'body'  => 'A Etiqueta de conta foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Etiquetas de conta excluído',
                    'body'  => 'A Etiquetas de conta foi excluído com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'color'         => 'Cor',
            'country'       => 'Country',
            'applicability' => 'Aplicabilidade',
            'name'          => 'Nome',
            'status'        => 'Status',
            'tax-negate'    => 'Imposto Negate',
        ],
    ],
];
