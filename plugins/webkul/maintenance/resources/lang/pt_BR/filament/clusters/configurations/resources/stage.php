<?php

return [
    'navigation' => [
        'title' => 'Estágios',
    ],

    'form' => [
        'fields' => [
            'name' => 'Nome',
            'done' => 'Concluído',
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Nome',
            'done'       => 'Concluído',
            'created-at' => 'Criado em',
        ],

        'groups' => [
            'done'       => 'Concluído',
            'created-at' => 'Criado em',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Estágio atualizado',
                    'body'  => 'O Estágio foi atualizado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Estágio excluído',
                    'body'  => 'O Estágio foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Estágios excluído',
                    'body'  => 'The estágios have been deleted successfully.',
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
                    'done' => 'Concluído',
                ],
            ],
        ],
    ],
];
