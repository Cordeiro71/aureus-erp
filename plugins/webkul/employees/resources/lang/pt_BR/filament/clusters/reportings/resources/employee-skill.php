<?php

return [
    'title' => 'Habilidades',

    'navigation' => [
        'title' => 'Habilidades',
    ],

    'form' => [
        'sections' => [
            'skill-details' => [
                'title' => 'Habilidade Detalhes',

                'fields' => [
                    'employee'       => 'Funcionário',
                    'skill'          => 'Habilidade',
                    'skill-level'    => 'Level',
                    'skill-type'     => 'Habilidade Tipo',
                ],
            ],
            'addition-information' => [
                'title' => 'Informações adicionais',

                'fields' => [
                    'created-by' => 'Criado por',
                    'updated-by' => 'Atualizado por',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'              => 'ID',
            'employee'        => 'Funcionário',
            'skill'           => 'Habilidade',
            'skill-level'     => 'Level',
            'skill-type'      => 'Habilidade Tipo',
            'user'            => 'Usuário',
            'proficiency'     => 'Proficiency',
            'created-by'      => 'Criado por',
            'created-at'      => 'Criado em',
        ],

        'filters' => [
            'employee'        => 'Funcionário',
            'skill'           => 'Habilidade',
            'skill-level'     => 'Level',
            'skill-type'      => 'Habilidade Tipo',
            'user'            => 'Usuário',
            'created-by'      => 'Criado por',
            'created-at'      => 'Criado em',
            'updated-at'      => 'Atualizado em',
        ],

        'groups' => [
            'employee'   => 'Funcionário',
            'skill-type' => 'Habilidade Tipo',
        ],
    ],

    'infolist' => [
        'sections' => [
            'skill-details' => [
                'title' => 'Habilidade Detalhes',

                'entries' => [
                    'employee'        => 'Funcionário',
                    'skill'           => 'Habilidade',
                    'skill-level'     => 'Level',
                    'skill-type'      => 'Habilidade Tipo',
                ],
            ],

            'additional-information' => [
                'title' => 'Informações adicionais',

                'entries' => [
                    'created-by' => 'Criado por',
                    'updated-by' => 'Atualizado por',
                ],
            ],
        ],
    ],
];
