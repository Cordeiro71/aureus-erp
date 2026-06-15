<?php

return [
    'navigation' => [
        'title' => 'Plugins',
    ],

    'tabs' => [
        'apps'          => 'Apps',
        'extra'         => 'Extra',
        'installed'     => 'Installed',
        'not-installed' => 'Não Installed',
    ],

    'header-actions' => [
        'sync' => [
            'label'                     => 'Sincronizar Disponível Plugins',
            'modal-heading'             => 'Sincronizar Plugins',
            'modal-description'         => 'Este will scan e cadastrar any novo plugins found.',
            'modal-submit-action-label' => 'Sincronizar Plugins',

            'notification' => [
                'success' => [
                    'title' => 'Plugins Synced Successfully',
                    'body'  => 'Found e synced :contagem novo plugin(s).',
                ],

                'error' => [
                    'title' => 'Plugin Sincronizar Falhou',
                    'body'  => 'Um erro (:error) ocorreu ao sincronizar os plugins. tente novamente.',
                ],
            ],
        ],
    ],
];
