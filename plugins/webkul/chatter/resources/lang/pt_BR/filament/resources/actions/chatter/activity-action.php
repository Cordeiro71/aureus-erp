<?php

return [
    'setup' => [
        'title'               => 'Agendar atividade',
        'submit-action-title' => 'Schedule',

        'form' => [
            'fields' => [
                'activity-plan' => 'Plano de atividades',
                'plan-date'     => 'Plan Data',
                'plan-summary'  => 'Plan Summary',
                'activity-type' => 'Atividade Tipo',
                'due-date'      => 'Data de vencimento',
                'summary'       => 'Summary',
                'assigned-to'   => 'Atribuído a',
                'log-note'      => 'Registrar nota',
            ],
        ],

        'actions' => [
            'notification' => [
                'success' => [
                    'title' => 'Atividade criado',
                    'body'  => 'The atividade has been created.',
                ],

                'warning'  => [
                    'title' => 'Não novo arquivos',
                    'body'  => 'Todos os arquivos já foram enviados.',
                ],

                'error' => [
                    'title' => 'Atividade creation falhou',
                    'body'  => 'Falhou para criar atividade ',
                ],
            ],
        ],
    ],
];
