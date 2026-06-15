<?php

return [
    'form' => [
        'sections' => [
            'activity-details' => [
                'title' => 'Detalhes da atividade',

                'fields' => [
                    'activity-type' => 'Atividade Tipo',
                    'summary'       => 'Summary',
                    'note'          => 'Nota',
                ],
            ],

            'assignment' => [
                'title' => 'Assignment',

                'fields' => [
                    'assignment' => 'Assignment',
                    'assignee'   => 'Responsável',
                ],
            ],

            'delay-information' => [
                'title' => 'Delay Information',

                'fields' => [
                    'delay-count'            => 'Delay Contagem',
                    'delay-unit'             => 'Delay Unidade',
                    'delay-from'             => 'Delay De',
                    'delay-from-helper-text' => 'Origem de delay calculation',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'activity-type' => 'Atividade Tipo',
            'summary'       => 'Summary',
            'assignment'    => 'Assignment',
            'assigned-to'   => 'Atribuído a',
            'interval'      => 'Interval',
            'delay-unit'    => 'Delay Unidade',
            'delay-from'    => 'Delay De',
            'created-by'    => 'Criado por',
            'created-at'    => 'Criado em',
            'updated-at'    => 'Atualizado em',
        ],

        'groups' => [
            'activity-type' => 'Atividade Tipo',
            'assignment'    => 'Assignment',
            'assigned-to'   => 'Atribuído a',
            'interval'      => 'Interval',
            'delay-unit'    => 'Delay Unidade',
            'delay-from'    => 'Delay De',
            'created-by'    => 'Criado por',
            'created-at'    => 'Criado em',
            'updated-at'    => 'Atualizado em',
        ],

        'filters' => [
            'activity-type'   => 'Atividade Tipo',
            'activity-status' => 'Status da atividade',
            'has-delay'       => 'Has Delay',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Modelo de atividade atualizado',
                    'body'  => 'O Atividade modelo foi atualizado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Modelo de atividade excluído',
                    'body'  => 'O Atividade modelo foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Atividade modelos excluído',
                    'body'  => 'O Atividade modelos foi excluído com sucesso.',
                ],
            ],
        ],
    ],
];
