<?php

return [
    'notification' => [
        'success' => [
            'title' => 'Condição de pagamento atualizado',
            'body'  => 'O Condição de pagamento foi atualizado com sucesso.',
        ],

        'validation-error' => [
            'title' => 'Validation Erro',
            'body'  => 'The Due Term must have at least one percent linha e the soma de the percent must be 100%.',
        ],
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'title' => 'Condição de pagamento excluído',
                'body'  => 'O Condição de pagamento foi excluído com sucesso.',
            ],
        ],
    ],
];
