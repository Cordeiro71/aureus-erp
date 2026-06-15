<?php

return [
    'title' => 'Candidato',

    'navigation' => [
        'title' => 'Candidatos',
    ],

    'global-search' => [
        'department' => 'Departamento',
        'work-email' => 'Work E-mail',
        'work-phone' => 'Work Telefone',
    ],

    'form' => [
        'sections' => [
            'general-information' => [
                'title' => 'Informações gerais',

                'fields' => [
                    'evaluation-good'           => 'Evaluation: Good',
                    'evaluation-very-good'      => 'Evaluation: Very Good',
                    'evaluation-very-excellent' => 'Evaluation: Very Excellent',
                    'hired'                     => 'Contratado',
                    'candidate-name'            => 'Candidate nome',
                    'email'                     => 'Emails',
                    'phone'                     => 'Telefone',
                    'linkedin-profile'          => 'Linkedin Perfil',
                    'recruiter'                 => 'Recruiter',
                    'interviewer'               => 'Interviewer',
                    'tags'                      => 'Etiquetas',
                    'notes'                     => 'Notas',
                    'hired-date'                => 'Contratado Data',
                    'job-position'              => 'Cargo Cargos',
                ],
            ],

            'education-and-availability' => [
                'title' => 'Education & Availability',

                'fields' => [
                    'degree'            => 'Degree',
                    'availability-date' => 'Data de disponibilidade',
                ],
            ],

            'department' => [
                'title' => 'Departamento',
            ],

            'salary' => [
                'title' => 'Expected & Proposed Salary',

                'fields' => [
                    'expected-salary'       => 'Expected Salary',
                    'salary-proposed-extra' => 'Outro Benefit',
                    'proposed-salary'       => 'Proposed Salary',
                    'salary-expected-extra' => 'Outro Benefit',
                ],
            ],

            'source-and-medium' => [
                'title' => 'Origem & Médio',

                'fields' => [
                    'source' => 'Origem',
                    'medium' => 'Médio',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'partner-name'       => 'Parceiro Nome',
            'applied-on'         => 'Aplicado em',
            'job-position'       => 'Cargo Cargo',
            'stage'              => 'Estágio',
            'candidate-name'     => 'Candidate Nome',
            'evaluation'         => 'Evaluation',
            'application-status' => 'Status da candidatura',
            'tags'               => 'Etiquetas',
            'refuse-reason'      => 'Recusar Reason',
            'email'              => 'E-mail',
            'recruiter'          => 'Recruiter',
            'interviewer'        => 'Interviewer',
            'candidate-phone'    => 'Telefone',
            'medium'             => 'Médio',
            'source'             => 'Origem',
            'salary-expected'    => 'Expected Salary',
            'availability-date'  => 'Data de disponibilidade',
        ],

        'filters' => [
            'source'                  => 'Origem',
            'medium'                  => 'Médio',
            'candidate'               => 'Candidate',
            'priority'                => 'Prioridade',
            'salary-proposed-extra'   => 'Salary Proposed Extra',
            'salary-expected-extra'   => 'Salary Expected Extra',
            'applicant-notes'         => 'Notas do candidato',
            'create-date'             => 'Aplicado em',
            'date-closed'             => 'Contratado Data',
            'date-last-stage-updated' => 'Último Estágio atualizado',
            'stage'                   => 'Estágio',
            'job-position'            => 'Cargo Cargo',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Candidato excluído',
                    'body'  => 'The candidato was successfully deleted.',
                ],
            ],
        ],

        'groups' => [
            'stage'          => 'Estágio',
            'job-position'   => 'Cargo Cargo',
            'candidate-name' => 'Candidate Nome',
            'responsible'    => 'Responsible',
            'creation-date'  => 'Creation Data',
            'hired-date'     => 'Contratado Data',
            'last-stage'     => 'Último Estágio',
            'refuse-reason'  => 'Recusar Reason',
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Funcionários excluído',
                    'body'  => 'O Funcionários foi excluído com sucesso.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Funcionários excluído',
                    'body'  => 'O Funcionários foi excluído com sucesso.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Funcionários restaurado',
                    'body'  => 'O Funcionários foi restaurado com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general-information' => [
                'title' => 'Informações gerais',

                'entries' => [
                    'evaluation-good'           => 'Evaluation: Good',
                    'evaluation-very-good'      => 'Evaluation: Very Good',
                    'evaluation-very-excellent' => 'Evaluation: Very Excellent',
                    'hired'                     => 'Contratado',
                    'candidate-name'            => 'Candidate nome',
                    'email'                     => 'Emails',
                    'phone'                     => 'Telefone',
                    'linkedin-profile'          => 'Linkedin Perfil',
                    'recruiter'                 => 'Recruiter',
                    'interviewer'               => 'Interviewer',
                    'tags'                      => 'Etiquetas',
                    'notes'                     => 'Notas',
                    'job-position'              => 'Cargo Cargos',
                ],
            ],

            'education-and-availability' => [
                'title' => 'Education & Availability',

                'entries' => [
                    'degree'            => 'Degree',
                    'availability-date' => 'Data de disponibilidade',
                ],
            ],

            'department' => [
                'title' => 'Departamento',
            ],

            'salary' => [
                'title' => 'Expected & Proposed Salary',

                'entries' => [
                    'expected-salary'       => 'Expected Salary',
                    'salary-proposed-extra' => 'Outro Benefit',
                    'proposed-salary'       => 'Proposed Salary',
                    'salary-expected-extra' => 'Outro Benefit',
                ],
            ],

            'source-and-medium' => [
                'title' => 'Origem & Médio',

                'entries' => [
                    'source' => 'Origem',
                    'medium' => 'Médio',
                ],
            ],
        ],
    ],
];
