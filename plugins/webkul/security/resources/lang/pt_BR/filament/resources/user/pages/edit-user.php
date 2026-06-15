<?php

return [
    'notification' => [
        'title' => 'Usuário atualizado',
        'body'  => 'O Usuário foi atualizado com sucesso.',
    ],

    'header-actions' => [
        'change-password' => [
            'label' => 'Change Senha',

            'notification' => [
                'title' => 'Senha changed',
                'body'  => 'A Senha foi changed com sucesso.',
            ],

            'form' => [
                'new-password'         => 'Novo Senha',
                'confirm-new-password' => 'Confirmar Novo Senha',
            ],
        ],

        'delete' => [
            'notification' => [
                'title' => 'Usuário excluído',
                'body'  => 'O Usuário foi excluído com sucesso.',
                'error' => [
                    'title' => 'Usuário Cannot Be excluído',
                    'body'  => 'Este é um usuário padrão ou você não pode excluir a si mesmo.',
                ],
            ],
        ],
    ],
];
