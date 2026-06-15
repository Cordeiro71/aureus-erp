<?php

return [
    'form' => [
        'partner' => 'Parceiro',
        'name'    => 'Nome',
        'email'   => 'E-mail',
        'phone'   => 'Telefone',
        'mobile'  => 'Celular',
        'type'    => 'Tipo',
        'address' => 'Endereço',
        'city'    => 'City',
        'street1' => 'Street 1',
        'street2' => 'Street 2',
        'state'   => 'State',
        'zip'     => 'Zip',
        'code'    => 'Code',
        'country' => 'Country',
    ],

    'table' => [
        'header-actions' => [
            'create' => [
                'label' => 'Adicionar endereço',

                'notification' => [
                    'title' => 'Endereço criado',
                    'body'  => 'O Endereço foi criado com sucesso.',
                ],
            ],
        ],

        'columns' => [
            'type'    => 'Tipo',
            'name'    => 'Contato Nome',
            'address' => 'Endereço',
            'city'    => 'City',
            'street1' => 'Street 1',
            'street2' => 'Street 2',
            'state'   => 'State',
            'zip'     => 'Zip',
            'country' => 'Country',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Endereço atualizado',
                    'body'  => 'O Endereço foi atualizado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Endereço excluído',
                    'body'  => 'O Endereço foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Endereços excluído',
                    'body'  => 'O Endereços foi excluído com sucesso.',
                ],
            ],
        ],
    ],
];
