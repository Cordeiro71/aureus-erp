<?php

return [
    'navigation' => [
        'title' => 'Tipos de pacote',
        'group' => 'Entrega',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Geral',

                'fields' => [
                    'name'       => 'Nome',
                    'barcode'    => 'Código de barras',
                    'company'    => 'Empresa',
                    'weight'     => 'Peso',
                    'max-weight' => 'Max Peso',

                    'fieldsets' => [
                        'size' => [
                            'title' => 'Tamanho',

                            'fields' => [
                                'length' => 'Length',
                                'width'  => 'Largura',
                                'height' => 'Altura',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Nome',
            'barcode'    => 'Código de barras',
            'weight'     => 'Peso',
            'max-weight' => 'Max Peso',
            'width'      => 'Largura',
            'height'     => 'Altura',
            'length'     => 'Length',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'groups' => [
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Tipo de pacote excluído',
                    'body'  => 'O Tipo de pacote foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Tipo de pacote excluído',
                    'body'  => 'O Tipo de pacote foi excluído com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'Informações gerais',
                'entries' => [
                    'name'      => 'Nome',
                    'fieldsets' => [
                        'size' => [
                            'title'   => 'Pacote Dimensions',
                            'entries' => [
                                'length' => 'Length',
                                'width'  => 'Largura',
                                'height' => 'Altura',
                            ],
                        ],
                    ],
                    'weight'     => 'Peso base',
                    'max-weight' => 'Máximo Peso',
                    'barcode'    => 'Código de barras',
                    'company'    => 'Empresa',
                    'created-at' => 'Criado em',
                    'updated-at' => 'Último atualizado',
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
