<?php

return [
    'title'                   => 'Perfil',
    'heading'                 => 'Perfil',
    'subheading'              => 'Manage your conta configurações e preferences.',
    'information_section'     => 'Perfil Information',
    'information_description' => "Atualizar your conta's perfil information e e-mail endereço.",

    'notification' => [
        'success' => [
            'title' => 'Perfil atualizado',
            'body'  => 'O Your perfil foi atualizado com sucesso.',
        ],

        'error' => [
            'title' => 'Perfil Atualizar Falhou',
            'body'  => 'There was an erro updating your perfil.',
        ],

        'validation-error' => [
            'title' => 'Validation Erro',
        ],
    ],

    'actions' => [
        'save' => 'Salvar Changes',
    ],

    'fields' => [
        'avatar'          => 'Perfil Photo',
        'name'            => 'Nome',
        'email'           => 'E-mail',
        'language'        => 'Idioma preferido',
        'language_helper' => 'The administrador interface will be shown in este idioma.',
    ],

    'password' => [
        'section'     => 'Atualizar Senha',
        'description' => 'Ensure your conta is using a long, random senha para stay secure.',
        'current'     => 'Atual Senha',
        'new'         => 'Novo Senha',
        'confirm'     => 'Confirmar Senha',
        'helper'      => 'Must be at least 8 characters long.',

        'errors' => [
            'current-required'  => 'Atual senha is obrigatório.',
            'current-incorrect' => 'The atual senha is incorrect. Please try again.',
            'same-as-current'   => 'The novo senha must be different de your atual senha.',
        ],

        'current-helper' => 'Enter your atual senha para verify your identity.',

        'notification' => [
            'success' => [
                'title' => 'Senha atualizado',
                'body'  => 'A Your senha foi atualizada com sucesso.',
            ],

            'error' => [
                'title' => 'Senha Atualizar Falhou',
                'body'  => 'There was an erro updating your senha.',
            ],
        ],
    ],
];
