<?php

return [
    'tabs' => [
        'all'      => 'Todos os usuários',
        'archived' => 'Usuários arquivados',
    ],

    'header-actions' => [
        'invite' => [
            'title' => 'Invite Usuário',
            'modal' => [
                'submit-action-label' => 'Invite Usuário',
            ],
            'form' => [
                'email' => 'E-mail',
            ],
            'notification' => [
                'success' => [
                    'title' => 'Usuário invited',
                    'body'  => 'O Usuário foi invited com sucesso.',
                ],
                'error' => [
                    'title' => 'Usuário Invitation Falhou',
                    'body'  => 'The sistema encountered an unexpected erro while trying para enviar the usuário invitation.',
                ],

                'default-company-error' => [
                    'title' => 'Empresa padrão Não Set',
                    'body'  => 'Please set the empresa padrão de configurações, antes inviting a usuário.',
                ],
            ],
        ],

        'create' => [
            'label' => 'Novo Usuário',
        ],
    ],
];
