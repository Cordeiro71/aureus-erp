<?php

return [
    'title' => 'Público Holidays',

    'model-label' => 'Público holiday',

    'navigation' => [
        'title' => 'Público Holidays',
    ],

    'form' => [
        'fields' => [
            'name'             => 'Nome',
            'name-placeholder' => 'Enter the nome de the público holiday',
            'date-from'        => 'Data de início',
            'date-to'          => 'Data de término',
            'color'            => 'Cor',
            'calendar'         => 'Calendário',
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => 'Nome',
            'company-name' => 'Empresa Nome',
            'calendar'     => 'Calendário',
            'created-by'   => 'Criado por',
            'date-from'    => 'Data de início',
            'date-to'      => 'Data de término',
        ],

        'filters' => [
            'name'         => 'Nome',
            'company-name' => 'Empresa Nome',
            'created-by'   => 'Criado por',
            'date-from'    => 'Data de início',
            'date-to'      => 'Data de término',
            'created-at'   => 'Criado em',
            'updated-at'   => 'Atualizado em',
        ],

        'groups' => [
            'name'         => 'Nome',
            'company-name' => 'Empresa Nome',
            'created-by'   => 'Criado por',
            'date-from'    => 'Data de início',
            'date-to'      => 'Data de término',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Público holiday atualizado',
                    'body'  => 'O Público holiday foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Público holiday excluído',
                    'body'  => 'O Público holiday foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Público holidays excluído',
                    'body'  => 'O Público holidays foi excluído com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'      => 'Nome',
            'date-from' => 'Data de início',
            'date-to'   => 'Data de término',
            'color'     => 'Cor',
        ],
    ],
];
