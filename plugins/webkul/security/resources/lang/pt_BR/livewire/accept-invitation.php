<?php

return [
    'header' => [
        'sub-heading' => [
            'accept-invitation' => 'Aceitar Invitation',
        ],
    ],

    'title' => 'Cadastrar',

    'heading' => 'Sign para cima',

    'actions' => [

        'login' => [
            'before' => 'ou',
            'label'  => 'sign in para your conta',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'E-mail endereço',
        ],

        'name' => [
            'label' => 'Nome',
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
                'label' => 'Sign para cima',
            ],

        ],

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'Too many registration attempts',
            'body'  => 'Please try again in :segundos segundos.',
        ],

    ],

];
