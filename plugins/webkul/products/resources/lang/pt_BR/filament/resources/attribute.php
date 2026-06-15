<?php

return [
    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Geral',

                'fields' => [
                    'name' => 'Nome',
                    'type' => 'Tipo',
                ],
            ],

            'options' => [
                'title'  => 'Opções',

                'fields' => [
                    'name'        => 'Nome',
                    'color'       => 'Cor',
                    'extra-price' => 'Extra Preço',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'        => 'Nome',
            'type'        => 'Tipo',
            'deleted-at'  => 'Excluído em',
            'created-at'  => 'Criado em',
            'updated-at'  => 'Atualizado em',
        ],

        'groups' => [
            'type'       => 'Tipo',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'filters' => [
            'type' => 'Tipo',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Atributo restaurado',
                    'body'  => 'O Atributo foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Atributo excluído',
                    'body'  => 'O Atributo foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Atributo excluído definitivamente',
                        'body'  => 'O Atributo foi excluído definitivamente com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Atributo could não be excluído',
                        'body'  => 'The atributo cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Atributos restaurado',
                    'body'  => 'O Atributos foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Atributos excluído',
                    'body'  => 'O Atributos foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Atributos excluído definitivamente',
                        'body'  => 'O Atributos foi excluído definitivamente com sucesso.',
                    ],

                    'error' => [
                        'title' => 'Atributos could não be excluído',
                        'body'  => 'The atributos cannot be deleted because they are currently in use.',
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
                    'name' => 'Nome',
                    'type' => 'Tipo',
                ],
            ],

            'record-information' => [
                'title' => 'Record Information',

                'entries' => [
                    'creator'    => 'Criado por',
                    'created_at' => 'Criado em',
                    'updated_at' => 'Último Atualizado em',
                ],
            ],
        ],
    ],
];
