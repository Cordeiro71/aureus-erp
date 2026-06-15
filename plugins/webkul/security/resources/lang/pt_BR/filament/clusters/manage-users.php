<?php

return [
    'breadcrumb' => 'Manage Usuários',
    'title'      => 'Manage Usuários',
    'group'      => 'Geral',

    'navigation' => [
        'label' => 'Manage Usuários',
    ],

    'form' => [
        'enable-user-invitation' => [
            'label'       => 'Ativar Usuário Invitation',
            'helper-text' => 'Permitir que usuários convidem outros usuários para a aplicação.',
        ],

        'enable-reset-password' => [
            'label'       => 'Ativar Redefinir Senha',
            'helper-text' => 'Permitir que usuários redefinam sua senha.',
        ],

        'default-role' => [
            'label'       => 'Padrão Papel',
            'helper-text' => 'The padrão papel atribuído a novo usuários.',
        ],

        'default-company' => [
            'label'       => 'Empresa padrão',
            'helper-text' => 'The empresa padrão atribuído a novo usuários.',
        ],
    ],
];
