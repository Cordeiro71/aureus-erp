<?php

return [
    'title' => 'Work Localizações',

    'navigation' => [
        'title' => 'Work Localizações',
        'group' => 'Funcionário',
    ],

    'form' => [
        'name'            => 'Nome',
        'company'         => 'Empresa',
        'location-type'   => 'Localização Tipo',
        'location-number' => 'Localização Number',
        'status'          => 'Status',
    ],

    'table' => [
        'columns' => [
            'id'              => 'ID',
            'name'            => 'Nome',
            'status'          => 'Status',
            'company'         => 'Empresa',
            'location-type'   => 'Localização Tipo',
            'location-number' => 'Localização Number',
            'deleted-at'      => 'Excluído em',
            'created-by'      => 'Criado por',
            'created-at'      => 'Criado em',
            'updated-at'      => 'Atualizado em',
        ],

        'filters' => [
            'name'            => 'Nome',
            'status'          => 'Status',
            'created-by'      => 'Criado por',
            'company'         => 'Empresa',
            'location-number' => 'Localização Number',
            'location-type'   => 'Localização Tipo',
            'updated-at'      => 'Atualizado em',
            'created-at'      => 'Criado em',
        ],

        'groups' => [
            'name'          => 'Nome',
            'status'        => 'Status',
            'location-type' => 'Localização Tipo',
            'company'       => 'Empresa',
            'created-by'    => 'Criado por',
            'created-at'    => 'Criado em',
            'updated-at'    => 'Atualizado em',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Work Localização atualizado',
                    'body'  => 'A Work localização foi atualizada com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Work Localização restaurado',
                    'body'  => 'A Work localização foi restaurada com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Work Localização excluído',
                    'body'  => 'A Work localização foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Work Localização excluído definitivamente',
                    'body'  => 'A Work localização foi excluído definitivamente com sucesso.',
                ],
            ],

            'empty-state' => [
                'notification' => [
                    'title' => 'Work Localização criado',
                    'body'  => 'A Work localização foi criada com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Work Localizações excluído',
                    'body'  => 'O Work localizações foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Work Localizações excluído definitivamente',
                    'body'  => 'O Work localizações foi excluído definitivamente com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name'            => 'Nome',
        'company'         => 'Empresa',
        'location-type'   => 'Localização Tipo',
        'location-number' => 'Localização Number',
        'status'          => 'Status',
    ],
];
