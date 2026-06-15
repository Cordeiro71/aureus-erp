<?php

return [
    'form' => [
        'fields' => [
            'accrual-amount'              => 'Valor da provisão',
            'accrual-value-type'          => 'Tipo de valor da provisão',
            'accrual-frequency'           => 'Frequência da provisão',
            'accrual-day'                 => 'Dia da provisão',
            'day-of-month'                => 'Dia de Mês',
            'first-day-of-month'          => 'Primeiro Dia de Mês',
            'second-day-of-month'         => 'Segundo Dia de Mês',
            'first-period-month'          => 'Primeiro Period Mês',
            'first-period-day'            => 'Primeiro Period Dia',
            'second-period-month'         => 'Segundo Period Mês',
            'second-period-day'           => 'Segundo Period Dia',
            'first-period-year'           => 'Primeiro Period Ano',
            'cap-accrued-time'            => 'Cap accrued hora',
            'days'                        => 'Dias',
            'start-count'                 => 'Iniciar Contagem',
            'start-type'                  => 'Iniciar Tipo',
            'action-with-unused-accruals' => 'Ação com provisões não utilizadas',
            'milestone-cap'               => 'Marco Cap',
            'maximum-leave-yearly'        => 'Máximo Licença Yearly',
            'accrual-validity'            => 'Validade da provisão',
            'accrual-validity-count'      => 'Contagem de validade da provisão',
            'accrual-validity-type'       => 'Tipo de validade da provisão',
            'advanced-accrual-settings'   => 'Configurações avançadas de provisão',
            'after-allocation-start'      => 'Após a data de início da alocação',
        ],
    ],

    'table' => [
        'columns' => [
            'accrual-amount'     => 'Valor da provisão',
            'accrual-value-type' => 'Tipo de valor da provisão',
            'frequency'          => 'Frequency',
            'maximum-leave-days' => 'Máximo Licença Dias',
        ],

        'groups' => [
            'accrual-amount'       => 'Valor da provisão',
            'accrual-value-type'   => 'Tipo de valor da provisão',
            'frequency'            => 'Frequency',
            'maximum-leave-days'   => 'Máximo Licença Dias',
        ],

        'filters' => [
            'accrual-frequency'           => 'Frequência da provisão',
            'start-type'                  => 'Iniciar Tipo',
            'cap-accrued-time'            => 'Cap Accrued Hora',
            'action-with-unused-accruals' => 'Ação com provisões não utilizadas',
            'accrual-amount'              => 'Valor da provisão',
            'accrual-frequency'           => 'Frequência da provisão',
            'start-type'                  => 'Iniciar Tipo',
            'created-at'                  => 'Criado em',
            'updated-at'                  => 'Atualizado em',
        ],

        'header-actions' => [
            'created' => [
                'title' => 'Novo Licença Plano de provisão',

                'notification' => [
                    'title' => 'Licença plano de provisão criado',
                    'body'  => 'O Licença plano de provisão foi criado com sucesso.',
                ],
            ],
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Licença plano de provisão atualizado',
                    'body'  => 'O Licença plano de provisão foi atualizado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Licença plano de provisão excluído',
                    'body'  => 'O Licença plano de provisão foi excluído com sucesso.',
                ],
            ],
        ],

        'bulk-actions' => [

            'delete' => [
                'notification' => [
                    'title' => 'Licença provisão plans excluído',
                    'body'  => 'O Licença provisão plans foi excluído com sucesso.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'accrual-amount'              => 'Valor da provisão',
            'accrual-value-type'          => 'Tipo de valor da provisão',
            'accrual-frequency'           => 'Frequência da provisão',
            'accrual-day'                 => 'Dia da provisão',
            'day-of-month'                => 'Dia de Mês',
            'first-day-of-month'          => 'Primeiro Dia de Mês',
            'second-day-of-month'         => 'Segundo Dia de Mês',
            'first-period-month'          => 'Primeiro Period Mês',
            'first-period-day'            => 'Primeiro Period Dia',
            'second-period-month'         => 'Segundo Period Mês',
            'second-period-day'           => 'Segundo Period Dia',
            'first-period-year'           => 'Primeiro Period Ano',
            'cap-accrued-time'            => 'Cap accrued hora',
            'days'                        => 'Dias',
            'start-count'                 => 'Iniciar Contagem',
            'start-type'                  => 'Iniciar Tipo',
            'action-with-unused-accruals' => 'Ação com provisões não utilizadas',
            'milestone-cap'               => 'Marco Cap',
            'maximum-leave-yearly'        => 'Máximo Licença Yearly',
            'accrual-validity'            => 'Validade da provisão',
            'accrual-validity-count'      => 'Contagem de validade da provisão',
            'accrual-validity-type'       => 'Tipo de validade da provisão',
            'advanced-accrual-settings'   => 'Configurações avançadas de provisão',
            'after-allocation-start'      => 'Após a data de início da alocação',
        ],
    ],
];
