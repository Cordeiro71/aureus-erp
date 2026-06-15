<?php

return [
    'navigation' => [
        'group' => 'Configurações',
        'title' => 'UOM Categorias',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Geral',

                'fields' => [
                    'name' => 'Nome',
                ],
            ],

            'uoms' => [
                'title' => 'Unidades de medida',

                'fields' => [
                    'uoms'     => 'Unidades',
                    'type'     => 'Tipo',
                    'name'     => 'Nome',
                    'factor'   => 'Fator',
                    'rounding' => 'Rounding Precisão',
                ],

                'actions' => [
                    'add' => 'Adicionar unidade',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Nome',
            'uoms'       => 'UOMs',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'groups' => [
            'created-at' => 'Criado em',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'UOM Categoria atualizado',
                    'body'  => 'A Uom categoria foi atualizada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'UOM Categoria excluído',
                    'body'  => 'A Uom categoria foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'UOM Categorias excluído',
                    'body'  => 'O Uom categorias foi excluído com sucesso.',
                ],
            ],
        ],
    ],
];
