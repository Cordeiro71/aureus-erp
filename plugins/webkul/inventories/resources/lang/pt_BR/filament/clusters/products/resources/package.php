<?php

return [
    'navigation' => [
        'title' => 'Pacotes',
        'group' => 'Estoque',
    ],

    'global-search' => [
        'name'         => 'Nome',
        'package-type' => 'Tipo de pacote',
        'location'     => 'Localização',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Geral',

                'fields' => [
                    'name'             => 'Nome',
                    'name-placeholder' => 'eg. PACK007',
                    'package-type'     => 'Tipo de pacote',
                    'pack-date'        => 'Pack Data',
                    'location'         => 'Localização',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => 'Nome',
            'package-type' => 'Tipo de pacote',
            'location'     => 'Localização',
            'company'      => 'Empresa',
            'created-at'   => 'Criado em',
            'updated-at'   => 'Atualizado em',
        ],

        'groups' => [
            'package-type'   => 'Tipo de pacote',
            'location'       => 'Localização',
            'created-at'     => 'Criado em',
        ],

        'filters' => [
            'package-type' => 'Tipo de pacote',
            'location'     => 'Localização',
            'creator'      => 'Creator',
            'company'      => 'Empresa',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Pacote excluído',
                        'body'  => 'O Pacote foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Pacote could não be excluído',
                        'body'  => 'The pacote cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print-without-content' => [
                'label' => 'Imprimir Código de barras',
            ],

            'print-with-content' => [
                'label' => 'Imprimir Código de barras Com Conteúdo',
            ],

            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Pacotes excluído',
                        'body'  => 'O Pacotes foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Pacotes could não be excluído',
                        'body'  => 'The pacotes cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Pacote Detalhes',

                'entries' => [
                    'name'         => 'Pacote Nome',
                    'package-type' => 'Tipo de pacote',
                    'pack-date'    => 'Pack Data',
                    'location'     => 'Localização',
                    'company'      => 'Empresa',
                    'created-at'   => 'Criado em',
                    'updated-at'   => 'Último atualizado',
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
