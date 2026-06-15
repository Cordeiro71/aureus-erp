<?php

return [
    'title'    => 'Entrar',
    'heading'  => 'Entrar',
    'messages' => [
        'failed' => 'Estes credentials do não match our records.',
    ],
    'notifications' => [
        'throttled' => [
            'title' => 'Too many attempts. Try again in :segundos segundos.',
            'body'  => 'Please wait :segundos segundos (:minutos minutos) antes trying again.',
        ],
    ],
    'form' => [
        'email' => [
            'label' => 'E-mail endereço',
        ],
        'password' => [
            'label' => 'Senha',
        ],
        'remember' => [
            'label' => 'Remember me',
        ],
        'actions' => [
            'authenticate' => [
                'label' => 'Sign in',
            ],
        ],
    ],
    'actions' => [
        'register' => [
            'before' => 'Don\'Don\'t have an conta?',
            'label'  => 'Criar conta',
        ],
        'request_password_reset' => [
            'label' => 'Forgot senha?',
        ],
    ],
];
