<?php

return [
    'create-employee' => 'Criar Funcionário',
    'goto-employee'   => 'Go para Funcionário',

    'notification' => [
        'title' => 'Candidato atualizado',
        'body'  => 'O Candidato foi atualizado com sucesso.',
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'title' => 'Candidato excluído',
                'body'  => 'O Candidato foi excluído com sucesso.',
            ],
        ],
        'force-delete' => [
            'notification' => [
                'title' => 'Candidato excluído',
                'body'  => 'O Candidato foi excluído definitivamente com sucesso.',
            ],
        ],

        'refuse' => [
            'title'        => 'Recusar Reason',
            'notification' => [
                'title' => 'Candidato recusado',
                'body'  => 'O Candidato foi recusado com sucesso.',
            ],
        ],

        'reopen' => [
            'title'        => 'Reopen Candidato',
            'notification' => [
                'title' => 'Candidato reopened',
                'body'  => 'O Candidato foi reopened com sucesso.',
            ],
        ],

        'state' => [
            'notification' => [
                'title' => 'Candidato state atualizado',
                'body'  => 'O Candidato state foi atualizado com sucesso.',
            ],
        ],
    ],

    'mail' => [
        'application-refused' => [
            'subject' => 'Your Candidatura de emprego: :candidatura',
        ],

        'application-confirm' => [
            'subject' => 'Your Candidatura de emprego: :job_position',
        ],
        'interviewer-assigned' => [
            'subject' => 'You have been atribuído a the Candidato :candidato.',
        ],
    ],
];
