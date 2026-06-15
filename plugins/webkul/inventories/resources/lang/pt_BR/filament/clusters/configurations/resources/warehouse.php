<?php

return [
    'navigation' => [
        'title' => 'Armazéns',
        'group' => 'Armazém Management',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Geral',
                'fields' => [
                    'name'               => 'Nome',
                    'name-placeholder'   => 'eg. Central Armazém',
                    'code'               => 'Short Nome',
                    'code-placeholder'   => 'eg. CW',
                    'code-hint-tooltip'  => 'The short nome serves as an identifier para the armazém.',
                    'company'            => 'Empresa',
                    'address'            => 'Endereço',
                ],
            ],

            'settings' => [
                'title'  => 'Configurações',

                'fields' => [
                    'shipment-management'              => 'Shipment Management',
                    'incoming-shipments'               => 'Entrada Shipments',
                    'incoming-shipments-hint-tooltip'  => 'Padrão entrada rota para follow',
                    'outgoing-shipments'               => 'Saída Shipments',
                    'outgoing-shipments-hint-tooltip'  => 'Padrão saída rota para follow',
                    'manufacture'                      => 'Manufatura',
                    'manufacture-hint-tooltip'         => 'Padrão manufatura rota para follow',
                    'resupply-management'              => 'Resupply Management',
                    'resupply-management-hint-tooltip' => 'Rotas will be automatically generated para resupply este armazém de the selected armazéns.',
                    'resupply-from'                    => 'Resupply De',
                ],
            ],

            'additional' => [
                'title'  => 'Informações adicionais',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Nome',
            'code'       => 'Short Nome',
            'company'    => 'Empresa',
            'address'    => 'Endereço',
            'deleted-at' => 'excluído em',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'groups' => [
            'address'       => 'Endereço',
            'company'       => 'Empresa',
            'created-at'    => 'Criado em',
            'updated-at'    => 'Atualizado em',
        ],

        'filters' => [
            'company' => 'Empresa',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Armazém restaurado',
                    'body'  => 'O Armazém foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Armazém excluído',
                    'body'  => 'O Armazém foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Armazém excluído definitivamente',
                        'body'  => 'O Armazém foi excluído definitivamente com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Armazém could não be excluído',
                        'body'  => 'The armazém cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Armazéns restaurado',
                    'body'  => 'O Armazéns foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Armazéns excluído',
                    'body'  => 'O Armazéns foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Armazéns excluído definitivamente',
                        'body'  => 'O Armazéns foi excluído definitivamente com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Armazéns could não be excluído',
                        'body'  => 'The armazéns cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Informações gerais',

                'entries' => [
                    'name'    => 'Armazém Nome',
                    'code'    => 'Armazém Code',
                    'company' => 'Empresa',
                    'address' => 'Endereço',
                ],
            ],

            'settings' => [
                'title' => 'Configurações',

                'entries' => [
                    'shipment-management' => 'Shipment Management',
                    'incoming-shipments'  => 'Entrada Shipments',
                    'outgoing-shipments'  => 'Saída Shipments',
                    'resupply-management' => 'Resupply Management',
                    'resupply-from'       => 'Resupply De',
                ],
            ],

            'record-information' => [
                'title' => 'Record Information',

                'entries' => [
                    'created-by'   => 'Criado por',
                    'created-at'   => 'Criado em',
                    'last-updated' => 'Último atualizado',
                ],
            ],
        ],
    ],
];
