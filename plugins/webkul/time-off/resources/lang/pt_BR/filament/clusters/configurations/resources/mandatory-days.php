<?php

return [
    'title' => 'Obrigatório Dias',

    'model-label' => 'Obrigatório Dia',

    'navigation' => [
        'title' => 'Obrigatório Holidays',
    ],

    'form' => [
        'fields' => [
            'name'       => 'Nome',
            'start-date' => 'Data de início',
            'end-date'   => 'Data de término',
            'color'      => 'Cor',
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => 'Nome',
            'company-name' => 'Empresa Nome',
            'created-by'   => 'Criado por',
            'start-date'   => 'Data de início',
            'end-date'     => 'Data de término',
        ],

        'filters' => [
            'name'         => 'Nome',
            'company-name' => 'Empresa Nome',
            'created-by'   => 'Criado por',
            'start-date'   => 'Data de início',
            'end-date'     => 'Data de término',
        ],

        'groups' => [
            'name'         => 'Nome',
            'company-name' => 'Empresa Nome',
            'created-by'   => 'Criado por',
            'start-date'   => 'Data de início',
            'end-date'     => 'Data de término',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Obrigatório dia atualizado',
                    'body'  => 'O Obrigatório dia foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Obrigatório dia excluído',
                    'body'  => 'O Obrigatório dia foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Obrigatório dias excluído',
                    'body'  => 'O Obrigatório dias foi excluído com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'       => 'Nome',
            'start-date' => 'Data de início',
            'end-date'   => 'Data de término',
            'color'      => 'Cor',
        ],
    ],
];
