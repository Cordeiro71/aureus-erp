<?php

return [
    'navigation' => [
        'title' => 'Storage Categorias',
        'group' => 'Armazém Management',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Geral',

                'fields' => [
                    'name'               => 'Nome',
                    'allow-new-products' => 'Permitir novos produtos',
                    'max-weight'         => 'Max Peso',
                    'company'            => 'Empresa',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'               => 'Nome',
            'allow-new-products' => 'Permitir novos produtos',
            'max-weight'         => 'Max Peso',
            'company'            => 'Empresa',
            'deleted-at'         => 'Excluído em',
            'created-at'         => 'Criado em',
            'updated-at'         => 'Atualizado em',
        ],

        'groups' => [
            'allow-new-products' => 'Permitir novos produtos',
            'created-at'         => 'Criado em',
            'updated-at'         => 'Atualizado em',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Storage Categoria excluído',
                    'body'  => 'A Storage categoria foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Storage Categorias excluído',
                    'body'  => 'O Storage categorias foi excluído com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'  => 'Geral',

                'entries' => [
                    'name'               => 'Nome',
                    'allow-new-products' => 'Permitir novos produtos',
                    'max-weight'         => 'Max Peso',
                    'company'            => 'Empresa',
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
