<?php

return [
    'breadcrumb' => 'Identidade visual',
    'title'      => 'Identidade visual',
    'group'      => 'Geral',

    'navigation' => [
        'label' => 'Identidade visual',
    ],

    'form' => [
        'sections' => [
            'logo' => [
                'title'       => 'Logo & Favicon',
                'description' => 'Override the logos, favicon e logo altura used across the administrador e cliente panels. Licença a campo empty para keep the padrão.',
            ],
            'colors' => [
                'title'       => 'Colors',
                'description' => 'Override the tema colors used across the administrador e cliente panels. Licença a cor empty para keep the padrão.',
            ],
        ],
        'fields' => [
            'light-logo'         => 'Light Logo',
            'light-logo-helper'  => 'Shown ligado light backgrounds. Replaces the padrão logo.',
            'dark-logo'          => 'Dark Logo',
            'dark-logo-helper'   => 'Shown when dark modo is ativado.',
            'favicon'            => 'Favicon',
            'favicon-helper'     => 'Ícone da aba do navegador.',
            'logo-height'        => 'Logo Altura',
            'logo-height-helper' => 'A CSS altura valor, e.g. 2rem ou 40px.',
            'primary-color'      => 'Primário',
            'gray-color'         => 'Gray',
            'danger-color'       => 'Danger',
            'info-color'         => 'Informação',
            'success-color'      => 'Sucesso',
            'warning-color'      => 'Aviso',
        ],
    ],

    'actions' => [
        'reset' => [
            'label' => 'Redefinir para padrão',
        ],
    ],
];
