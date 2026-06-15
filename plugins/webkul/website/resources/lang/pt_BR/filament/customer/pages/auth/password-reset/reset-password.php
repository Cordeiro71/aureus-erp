<?php

return [
    'title'         => 'Redefinir senha',
    'heading'       => 'Redefinir senha',
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
            'label'                => 'Novo senha',
            'validation_attribute' => 'senha',
        ],
        'password_confirmation' => [
            'label' => 'Confirmar novo senha',
        ],
        'actions' => [
            'reset' => [
                'label' => 'Redefinir senha',
            ],
        ],
    ],
];
