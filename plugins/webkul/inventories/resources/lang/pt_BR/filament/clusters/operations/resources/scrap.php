<?php

return [
    'navigation' => [
        'title' => 'Scraps',
        'group' => 'Ajustes',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Geral',

                'fields' => [
                    'product'              => 'Produto',
                    'package'              => 'Pacote',
                    'quantity'             => 'Quantidade',
                    'unit'                 => 'Unidade de medida',
                    'lot'                  => 'Lote/Serial',
                    'tags'                 => 'Etiquetas',
                    'name'                 => 'Nome',
                    'color'                => 'Cor',
                    'owner'                => 'Owner',
                    'source-location'      => 'Origem Localização',
                    'destination-location' => 'Sucata Localização',
                    'source-document'      => 'Origem Document',
                    'company'              => 'Empresa',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'date'            => 'Data',
            'reference'       => 'Referência',
            'product'         => 'Produto',
            'package'         => 'Pacote',
            'quantity'        => 'Quantidade',
            'uom'             => 'Unidade de medida',
            'source-location' => 'Origem Localização',
            'scrap-location'  => 'Sucata Localização',
            'unit'            => 'Unidade de medida',
            'lot'             => 'Lote/Serial',
            'tags'            => 'Etiquetas',
            'state'           => 'State',
        ],

        'groups' => [
            'product'              => 'Produto',
            'source-location'      => 'Origem Localização',
            'destination-location' => 'Sucata Localização',
        ],

        'filters' => [
            'source-location'      => 'Origem Localização',
            'destination-location' => 'Sucata Localização',
            'product'              => 'Produto',
            'state'                => 'State',
            'product-category'     => 'Produto Categoria',
            'uom'                  => 'Unidade de medida',
            'lot'                  => 'Lote/Serial',
            'package'              => 'Pacote',
            'tags'                 => 'Etiquetas',
            'company'              => 'Empresa',
            'quantity'             => 'Quantidade',
            'creator'              => 'Creator',
            'closed-at'            => 'Fechado At',
            'created-at'           => 'Criado em',
            'updated-at'           => 'Atualizado em',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Sucata excluído',
                        'body'  => 'A Sucata foi excluído com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Sucata could não be excluído',
                        'body'  => 'The sucata cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Scraps excluído',
                        'body'  => 'The selected scraps have been deleted successfully.',
                    ],

                    'error' => [
                        'title' => 'Scraps could não be excluído',
                        'body'  => 'The scraps cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Sucata Detalhes',

                'entries' => [
                    'product'              => 'Produto',
                    'quantity'             => 'Quantidade',
                    'lot'                  => 'Lote',
                    'tags'                 => 'Etiquetas',
                    'package'              => 'Pacote',
                    'owner'                => 'Owner',
                    'source-location'      => 'Origem Localização',
                    'destination-location' => 'Destino Localização',
                    'source-document'      => 'Origem Document',
                    'company'              => 'Empresa',
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
