<?php

return [
    'title' => 'Manage Armazéns',

    'form' => [
        'enable-locations'                      => 'Localizações',
        'enable-locations-helper-text'          => 'Track produto localização in your armazém',
        'configure-locations'                   => 'Configure Localizações',
        'enable-multi-steps-routes'             => 'Multi Steps Rotas',
        'enable-multi-steps-routes-helper-text' => 'Use your own rotas para manage the transferência de produtos entre armazéns',
        'configure-routes'                      => 'Configure Armazém Rotas',
    ],

    'before-save' => [
        'notification' => [
            'warning' => [
                'title' => 'Have multiple armazéns',
                'body'  => 'You can\'You can\'t deactivate the multi-localização if you have more than one armazém.',
            ],
        ],
    ],
];
