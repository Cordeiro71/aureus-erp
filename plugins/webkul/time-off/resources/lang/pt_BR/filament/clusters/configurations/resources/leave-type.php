<?php

return [
    'title'      => 'Licença Tipo',
    'navigation' => [
        'title' => 'Licença Tipo',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Informações gerais',
                'fields' => [
                    'name'                => 'Título',
                    'approval'            => 'Aprovação',
                    'requires-allocation' => 'Requires Alocação',
                    'employee-requests'   => 'Funcionário Requests',
                    'display-option'      => 'Display Opção',
                ],
            ],
            'display-option' => [
                'title'  => 'Display Opção',
                'fields' => [
                    'color' => 'Cor',
                ],
            ],
            'configuration' => [
                'title' => 'Configuração',

                'fields' => [
                    'notified-time-off-officers'          => 'Notified Folga Officers',
                    'take-time-off-in'                    => 'Take Folga In',
                    'public-holiday-included'             => 'Público Holiday Included',
                    'allow-to-attach-supporting-document' => 'Permitir anexar documento comprobatório',
                    'show-on-dashboard'                   => 'Mostrar ligado Painel',
                    'allow-negative-cap'                  => 'Permitir limite negativo',
                    'kind-off-time'                       => 'Kind de Hora',
                    'max-negative-cap'                    => 'Max Negative Cap',
                    'kind-of-time'                        => 'Kind de Folga',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                      => 'Nome',
            'company-name'              => 'Empresa',
            'color'                     => 'Cor',
            'notified-time-officers'    => 'Notified Hora Officers',
            'time-off-approval'         => 'Folga Approval',
            'requires-allocation'       => 'Requires Alocação',
            'allocation-approval'       => 'Aprovação de alocação',
            'employee-request'          => 'Funcionário Request',
        ],

        'filters' => [
            'name'                => 'Nome',
            'company-name'        => 'Empresa',
            'time-off-approval'   => 'Folga Approval',
            'requires-allocation' => 'Requires Alocação',
            'time-type'           => 'Hora Tipo',
            'request-unit'        => 'Request Unidade',
            'created-by'          => 'Criado por',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Licença Tipo excluído',
                    'body'  => 'O Licença tipo foi excluído com sucesso.',
                ],
            ],
            'restore' => [
                'notification' => [
                    'title' => 'Licença Tipo restaurado',
                    'body'  => 'O Licença tipo foi restaurado com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Licença Tipo restaurado',
                    'body'  => 'O Licença tipo foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Licença Tipo excluído',
                    'body'  => 'O Licença tipo foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Licença Tipo excluído definitivamente',
                        'body'  => 'O Licença tipo foi excluído definitivamente com sucesso.',
                    ],
                    'error' => [
                        'title' => 'Licença Tipo could não be excluído',
                        'body'  => 'The Licença Tipo cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'Informações gerais',
                'entries' => [
                    'name'                => 'Título',
                    'approval'            => 'Aprovação',
                    'requires-allocation' => 'Requires Alocação',
                    'employee-requests'   => 'Funcionário Requests',
                    'display-option'      => 'Display Opção',
                ],
            ],
            'display-option' => [
                'title'   => 'Display Opção',
                'entries' => [
                    'color' => 'Cor',
                ],
            ],
            'configuration' => [
                'title' => 'Configuração',

                'entries' => [
                    'notified-time-off-officers'          => 'Notified Folga Officers',
                    'take-time-off-in'                    => 'Take Folga In',
                    'public-holiday-included'             => 'Público Holiday Included',
                    'allow-to-attach-supporting-document' => 'Permitir anexar documento comprobatório',
                    'show-on-dashboard'                   => 'Mostrar ligado Painel',
                    'kind-off-time'                       => 'Kind de Hora',
                    'max-negative-cap'                    => 'Max Negative Cap',
                    'kind-of-time'                        => 'Kind de Folga',
                ],
            ],
        ],
    ],
];
