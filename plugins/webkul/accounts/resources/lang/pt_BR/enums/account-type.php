<?php

return [
    'assets' => [
        'label'   => 'Ativos',
        'options' => [
            'receivable'  => 'Receivable',
            'cash'        => 'Banco e caixa',
            'current'     => 'Atual Ativos',
            'non-current' => 'Non-atual Ativos',
            'prepayments' => 'Prepayments',
            'fixed'       => 'Fixed Ativos',
        ],
    ],

    'liabilities' => [
        'label'   => 'Passivos',
        'options' => [
            'payable'     => 'Payable',
            'credit-card' => 'Crédito Cartão',
            'current'     => 'Atual Passivos',
            'non-current' => 'Non-atual Passivos',
        ],
    ],

    'equity' => [
        'label'   => 'Patrimônio líquido',
        'options' => [
            'equity'     => 'Patrimônio líquido',
            'unaffected' => 'Atual Ano Earnings',
        ],
    ],

    'income' => [
        'label'   => 'Income',
        'options' => [
            'income' => 'Income',
            'other'  => 'Outro Income',
        ],
    ],

    'expenses' => [
        'label'   => 'Despesas',
        'options' => [
            'expense'      => 'Despesas',
            'depreciation' => 'Depreciation',
            'direct-cost'  => 'Custo de Receita',
        ],
    ],

    'off-balance' => [
        'label'   => 'Desligado-Balanço patrimonial',
        'options' => [
            'off-balance' => 'Desligado-Balanço patrimonial',
        ],
    ],
];
