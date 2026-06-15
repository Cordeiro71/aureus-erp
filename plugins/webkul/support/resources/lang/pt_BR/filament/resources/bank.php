<?php

return [
    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Geral',

                'fields' => [
                    'name'  => 'Nome',
                    'code'  => 'Código identificador do banco',
                    'email' => 'E-mail',
                    'phone' => 'Telefone',
                ],
            ],

            'address' => [
                'title' => 'Endereço',

                'fields' => [
                    'address' => 'Endereço',
                    'city'    => 'City',
                    'street1' => 'Street 1',
                    'street2' => 'Street 2',
                    'state'   => 'State',
                    'zip'     => 'Zip',
                    'country' => 'Country',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'           => 'Nome',
            'code'           => 'Código identificador do banco',
            'country'        => 'Country',
            'created-at'     => 'Criado em',
            'updated-at'     => 'Atualizado em',
            'deleted-at'     => 'Excluído em',
        ],

        'groups' => [
            'country'               => 'Country',
            'created-at'            => 'Criado em',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Banco atualizado',
                    'body'  => 'O Banco foi atualizado com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Banco restaurado',
                    'body'  => 'O Banco foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Banco excluído',
                    'body'  => 'O Banco foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Banco excluído definitivamente',
                    'body'  => 'O Banco foi excluído definitivamente com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Bancos restaurado',
                    'body'  => 'O Bancos foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Bancos excluído',
                    'body'  => 'O Bancos foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Bancos excluído definitivamente',
                    'body'  => 'O Bancos foi excluído definitivamente com sucesso.',
                ],
            ],
        ],
    ],
];
