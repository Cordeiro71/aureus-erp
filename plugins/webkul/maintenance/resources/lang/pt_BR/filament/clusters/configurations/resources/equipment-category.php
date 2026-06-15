<?php

return [
    'navigation' => [
        'title' => 'Categorias',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Informações gerais',

                'fields' => [
                    'name'       => 'Nome',
                    'technician' => 'Responsible',
                    'company'    => 'Empresa',
                    'note'       => 'Nota',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Nome',
            'technician' => 'Responsible',
            'company'    => 'Empresa',
            'created-at' => 'Criado em',
        ],

        'groups' => [
            'technician' => 'Responsible',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Categoria atualizado',
                    'body'  => 'A Categoria foi atualizada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Categoria excluído',
                    'body'  => 'A Categoria foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Categorias excluído',
                    'body'  => 'The categorias have been deleted successfully.',
                ],
            ],
        ],

        'empty-state' => [
            'create' => [
                'notification' => [
                    'title' => 'Categoria criado',
                    'body'  => 'A Categoria foi criada com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Informações gerais',

                'entries' => [
                    'name'       => 'Nome',
                    'technician' => 'Responsible',
                    'company'    => 'Empresa',
                    'note'       => 'Nota',
                ],
            ],
        ],
    ],
];
