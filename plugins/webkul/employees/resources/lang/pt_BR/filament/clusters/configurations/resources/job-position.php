<?php

return [
    'title' => 'Cargo Cargos',

    'navigation' => [
        'title' => 'Cargo Cargos',
        'group' => 'Recrutamento',
    ],

    'form' => [
        'sections' => [
            'employment-information' => [
                'title' => 'Employment Information',

                'fields' => [
                    'job-position-title'         => 'Cargo Cargo Título',
                    'job-position-title-tooltip' => 'Enter the official cargo cargo título',
                    'department'                 => 'Departamento',
                    'department-modal-title'     => 'Criar Departamento',
                    'company-modal-title'        => 'Criar Empresa',
                    'job-location'               => 'Cargo Localização',
                    'industry'                   => 'Setor',
                    'company'                    => 'Empresa',
                    'employment-type'            => 'Employment Tipo',
                    'recruiter'                  => 'Recruiter',
                    'interviewer'                => 'Interviewer',
                ],
            ],

            'job-description' => [
                'title' => 'Cargo Descrição',

                'fields' => [
                    'job-description'  => 'Cargo Descrição',
                    'job-requirements' => 'Cargo Requirements',
                ],
            ],

            'workforce-planning' => [
                'title' => 'Workforce Planejamento',

                'fields' => [
                    'recruitment-target'         => 'Recrutamento Target',
                    'date-from'                  => 'Data De',
                    'date-to'                    => 'Data Para',
                    'expected-skills'            => 'Expected Habilidades',
                    'employment-type'            => 'Employment Tipo',
                    'status'                     => 'Status',
                ],
            ],

            'position-status' => [
                'title' => 'Cargo Status',

                'fields' => [
                    'status' => 'Status',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'                 => 'ID',
            'name'               => 'Cargo Cargo',
            'department'         => 'Departamento',
            'job-position'       => 'Cargo Cargo',
            'company'            => 'Empresa',
            'expected-employees' => 'Expected Funcionários',
            'current-employees'  => 'Atual Funcionários',
            'status'             => 'Status',
            'created-by'         => 'Criado por',
            'created-at'         => 'Criado em',
            'updated-at'         => 'Atualizado em',
        ],

        'filters' => [
            'department'      => 'Departamento',
            'employment-type' => 'Employment Tipo',
            'job-position'    => 'Cargo Cargo',
            'company'         => 'Empresa',
            'status'          => 'Status',
            'created-by'      => 'Criado por',
            'updated-at'      => 'Atualizado em',
            'created-at'      => 'Criado em',
        ],

        'groups' => [
            'job-position'    => 'Cargo Cargo',
            'company'         => 'Empresa',
            'department'      => 'Departamento',
            'employment-type' => 'Employment Tipo',
            'created-by'      => 'Criado por',
            'created-at'      => 'Criado em',
            'updated-at'      => 'Atualizado em',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Cargo Cargo restaurado',
                    'body'  => 'O Cargo cargo foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Cargo Cargo excluído',
                    'body'  => 'O Cargo cargo foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Cargo Cargos restaurado',
                    'body'  => 'O Cargo cargos foi restaurado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Cargo Cargos excluído',
                    'body'  => 'O Cargo cargos foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Cargo Cargos excluído definitivamente',
                    'body'  => 'O Cargo cargos foi excluído definitivamente com sucesso.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Cargo Cargos',
                    'body'  => 'O Cargo cargos foi criado com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'employment-information' => [
                'title' => 'Employment Information',

                'entries' => [
                    'job-position-title' => 'Cargo Cargo Título',
                    'department'         => 'Departamento',
                    'company'            => 'Empresa',
                    'employment-type'    => 'Employment Tipo',
                    'job-location'       => 'Cargo Localização',
                    'industry'           => 'Setor',
                ],
            ],
            'job-description' => [
                'title' => 'Cargo Descrição',

                'entries' => [
                    'job-description'  => 'Cargo Descrição',
                    'job-requirements' => 'Cargo Requirements',
                ],
            ],
            'work-planning' => [
                'title' => 'Workforce Planejamento',

                'entries' => [
                    'expected-employees' => 'Expected Funcionários',
                    'current-employees'  => 'Atual Funcionários',
                    'date-from'          => 'Data De',
                    'date-to'            => 'Data Para',
                    'recruitment-target' => 'Recrutamento Target',
                ],
            ],
            'position-status' => [
                'title' => 'Cargo Status',

                'entries' => [
                    'status' => 'Status',
                ],
            ],
        ],
    ],
];
