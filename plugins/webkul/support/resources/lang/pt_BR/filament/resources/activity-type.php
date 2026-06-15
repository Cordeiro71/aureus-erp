<?php

return [
    'title' => 'Departamentos',

    'navigation' => [
        'title' => 'Departamentos',
        'group' => 'Funcionários',
    ],

    'form' => [
        'sections' => [
            'activity-type-details' => [
                'title' => 'Informações gerais',

                'fields' => [
                    'name'                => 'Atividade Tipo',
                    'name-tooltip'        => 'Enter the official atividade tipo nome',
                    'action'              => 'Ação',
                    'default-user'        => 'Padrão Usuário',
                    'summary'             => 'Summary',
                    'note'                => 'Nota',
                ],
            ],

            'delay-information' => [
                'title' => 'Delay Information',

                'fields' => [
                    'delay-count'            => 'Delay Contagem',
                    'delay-unit'             => 'Delay Unidade',
                    'delay-form'             => 'Delay Formulário',
                    'delay-form-helper-text' => 'Origem de delay calculation',
                ],
            ],

            'advanced-information' => [
                'title' => 'Avançado Information',

                'fields' => [
                    'icon'                => 'Icon',
                    'decoration-type'     => 'Decoration Tipo',
                    'chaining-type'       => 'Chaining Tipo',
                    'suggest'             => 'Suggest',
                    'trigger'             => 'Trigger',
                ],
            ],

            'status-and-configuration-information' => [
                'title' => 'Status & Configuração',

                'fields' => [
                    'status'               => 'Status',
                    'keep-done-activities' => 'Keep Concluído Atividades',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Atividade Tipo',
            'summary'    => 'Summary',
            'planned-in' => 'Planned In',
            'type'       => 'Tipo',
            'action'     => 'Ação',
            'status'     => 'Status',
            'created-at' => 'Criado em',
            'updated-at' => 'Atualizado em',
        ],

        'groups' => [
            'name'             => 'Nome',
            'action-category'  => 'Categoria da ação',
            'status'           => 'Status',
            'delay-count'      => 'Delay Contagem',
            'delay-unit'       => 'Delay Unidade',
            'delay-source'     => 'Delay Origem',
            'associated-model' => 'Modelo associado',
            'chaining-type'    => 'Chaining Tipo',
            'decoration-type'  => 'Decoration Tipo',
            'default-user'     => 'Padrão Usuário',
            'creation-date'    => 'Creation Data',
            'last-update'      => 'Último Atualizar',
        ],

        'filters' => [
            'action'    => 'Ação',
            'status'    => 'Status',
            'has-delay' => 'Has Delay',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Tipo de atividade restaurado',
                    'body'  => 'O Atividade tipo foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Tipo de atividade excluído',
                    'body'  => 'O Atividade tipo foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Tipo de atividade excluído definitivamente',
                        'body'  => 'O Atividade tipo foi excluído definitivamente com sucesso.',
                    ],
                    'error' => [
                        'title' => 'Atividade tipo  could não be excluído',
                        'body'  => 'The Atividade tipo  cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Atividade tipos restaurado',
                    'body'  => 'O Atividade tipos foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Atividade tipos excluído',
                    'body'  => 'O Atividade tipos foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Atividade tipos excluído definitivamente',
                    'body'  => 'O Atividade tipos foi excluído definitivamente com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'activity-type-details' => [
                'title' => 'Informações gerais',

                'entries' => [
                    'name'                => 'Atividade Tipo',
                    'name-tooltip'        => 'Enter the official atividade tipo nome',
                    'action'              => 'Ação',
                    'default-user'        => 'Padrão Usuário',
                    'plugin'              => 'Plugin',
                    'summary'             => 'Summary',
                    'note'                => 'Nota',
                ],
            ],

            'delay-information' => [
                'title' => 'Delay Information',

                'entries' => [
                    'delay-count'            => 'Delay Contagem',
                    'delay-unit'             => 'Delay Unidade',
                    'delay-form'             => 'Delay Formulário',
                    'delay-form-helper-text' => 'Origem de delay calculation',
                ],
            ],

            'advanced-information' => [
                'title' => 'Avançado Information',

                'entries' => [
                    'icon'                => 'Icon',
                    'decoration-type'     => 'Decoration Tipo',
                    'chaining-type'       => 'Chaining Tipo',
                    'suggest'             => 'Suggest',
                    'trigger'             => 'Trigger',
                ],
            ],

            'status-and-configuration-information' => [
                'title' => 'Status & Configuração',

                'entries' => [
                    'status'               => 'Status',
                    'keep-done-activities' => 'Keep Concluído Atividades',
                ],
            ],
        ],
    ],
];
