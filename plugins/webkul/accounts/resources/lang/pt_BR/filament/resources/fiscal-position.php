<?php

return [
    'global-search' => [
        'zip-from' => 'Zip De',
        'zip-to'   => 'Zip Para',
        'name'     => 'Nome',
    ],

    'form' => [
        'fields' => [
            'name'                   => 'Nome',
            'foreign-vat'            => 'Foreign VAT',
            'country'                => 'Country',
            'country-group'          => 'Country Grupo',
            'zip-from'               => 'Zip De',
            'zip-to'                 => 'Zip Para',
            'detect-automatically'   => 'Detect Automatically',
            'notes'                  => 'Notas',
            'company'                => 'Empresa',
        ],
        'tabs' => [
            'account-mapping' => [
                'table' => [
                    'columns' => [
                        'source-account'      => 'Origem Conta',
                        'destination-account' => 'Destino Conta',
                    ],
                ],

            ],
            'tax-mapping' => [
                'table' => [
                    'columns' => [
                        'tax-source'      => 'Imposto Origem',
                        'tax-destination' => 'Imposto Destino',
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                 => 'Nome',
            'company'              => 'Empresa',
            'country'              => 'Country',
            'country-group'        => 'Country Grupo',
            'created-by'           => 'Criado por',
            'zip-from'             => 'Zip De',
            'zip-to'               => 'Zip Para',
            'status'               => 'Status',
            'detect-automatically' => 'Detect Automatically',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Condição de pagamento excluído',
                    'body'  => 'O Condição de pagamento foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Posição fiscal excluído',
                    'body'  => 'O Posição fiscal foi excluído com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'                 => 'Nome',
            'foreign-vat'          => 'Foreign VAT',
            'country'              => 'Country',
            'country-group'        => 'Country Grupo',
            'zip-from'             => 'Zip De',
            'zip-to'               => 'Zip Para',
            'detect-automatically' => 'Detect Automatically',
            'notes'                => 'Notas',
        ],
    ],
];
