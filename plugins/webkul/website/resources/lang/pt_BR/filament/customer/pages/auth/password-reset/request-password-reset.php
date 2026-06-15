<?php

return [
    'title'         => 'Forgot senha',
    'heading'       => 'Forgot senha',
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
        'actions' => [
            'request' => [
                'label' => 'Enviar redefinir link',
            ],
        ],
    ],
    'actions' => [
        'login' => [
            'label' => 'Voltar para o login',
        ],
    ],
];
