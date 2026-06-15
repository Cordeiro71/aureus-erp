<?php

return [
    'header-actions' => [
        'delete' => [
            'notification' => [
                'title' => 'Candidato excluído',
                'body'  => 'O Candidato foi excluído com sucesso.',
            ],
        ],

        'refuse' => [
            'notification' => [
                'title' => 'Candidato recusado',
                'body'  => 'O Candidato foi recusado com sucesso.',
            ],
        ],

        'reopen' => [
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
    ],
];
