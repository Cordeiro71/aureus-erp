<?php

return [
    'form' => [
        'sections' => [
            'fields' => [
                'title'        => 'Título',
                'type'         => 'Tipo',
                'name'         => 'Nome',
                'type'         => 'Tipo',
                'create-type'  => 'Criar Tipo',
                'duration'     => 'Duration',
                'start-date'   => 'Data de início',
                'end-date'     => 'Data de término',
                'display-type' => 'Display Tipo',
                'description'  => 'Descrição',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'title'        => 'Título',
            'start-date'   => 'Data de início',
            'end-date'     => 'Data de término',
            'display-type' => 'Display Tipo',
            'description'  => 'Descrição',
            'created-by'   => 'Criado por',
            'created-at'   => 'Criado em',
            'updated-at'   => 'Atualizado em',
        ],

        'groups' => [
            'group-by-type'         => 'Grupo Por Tipo',
            'group-by-display-type' => 'Grupo Por Display Tipo',
        ],

        'header-actions' => [
            'add-resume' => 'Adicionar currículo',
        ],

        'filters' => [
            'type'            => 'Tipo',
            'start-date-from' => 'Data de início De',
            'start-date-to'   => 'Data de início Para',
            'created-from'    => 'Created De',
            'created-to'      => 'Created Para',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Habilidade Level atualizado',
                    'body'  => 'O Habilidade level foi atualizado com sucesso.',
                ],
            ],

            'create' => [
                'notification' => [
                    'title' => 'Habilidade Level criado',
                    'body'  => 'O Habilidade level foi criado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Habilidade Level excluído',
                    'body'  => 'O Habilidade level foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Habilidades excluído',
                    'body'  => 'O Habilidades foi excluído com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'title'        => 'Título',
            'display-type' => 'Display Tipo',
            'type'         => 'Tipo',
            'description'  => 'Descrição',
            'duration'     => 'Duration',
            'start-date'   => 'Data de início',
            'end-date'     => 'Data de término',
        ],
    ],
];
