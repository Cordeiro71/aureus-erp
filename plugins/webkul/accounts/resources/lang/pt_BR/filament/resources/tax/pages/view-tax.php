<?php

return [
    'header-actions' => [
        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Imposto excluído',
                    'body'  => 'O Imposto foi excluído com sucesso.',
                ],

                'error' => [
                    'title' => 'Imposto could não be excluído',
                    'body'  => 'The imposto cannot be deleted because it is currently in use.',
                ],
            ],
        ],
    ],
];
