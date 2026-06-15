<?php

return [
    'title' => 'Cargo Cargo',

    'navigation' => [
        'title' => 'Cargo Cargos',
    ],

    'table' => [
        'columns' => [
            'name'         => 'Nome',
            'manager-name' => 'Gerente',
            'company-name' => 'Empresa',
        ],

        'actions' => [
            'applications' => [
                'new-applications' => ':contagem Novo Candidaturas',
            ],

            'to-recruitment' => [
                'to-recruitment' => ':contagem Para Recrutamento',
            ],

            'total-application' => [
                'total-application' => ':contagem Candidaturas',
            ],
        ],
    ],

];
