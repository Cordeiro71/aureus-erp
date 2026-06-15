<?php

return [
    'title'         => 'Cadastrar',
    'heading'       => 'Cadastrar',
    'notifications' => [
        'throttled' => [
            'title' => 'Too many attempts. Try again in :segundos segundos.',
            'body'  => 'Please wait :segundos segundos (:minutos minutos) antes trying again.',
        ],
    ],
    'form' => [
        'name' => [
            'label' => 'Nome',
        ],
        'email' => [
            'label' => 'E-mail endereço',
        ],
        'password' => [
            'label'                => 'Senha',
            'validation_attribute' => 'senha',
        ],
        'password_confirmation' => [
            'label' => 'Confirmar senha',
        ],
        'actions' => [
            'register' => [
                'label' => 'Criar conta',
            ],
        ],
    ],
    'actions' => [
        'login' => [
            'before' => 'Já tem uma conta?',
            'label'  => 'Entrar',
        ],
    ],
];
