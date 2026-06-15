<?php

return [
    'form' => [
        'fieldsets' => [
            'account-properties' => [
                'label' => 'Propriedades da conta',

                'fields' => [
                    'income-account'                    => 'Income Conta',
                    'income-account-hint-tooltip'       => 'Este conta will be used when validating a cliente fatura.',
                    'expense-account'                   => 'Despesa Conta',
                    'expense-account-hint-tooltip'      => 'The despesa is recorded when a fornecedor conta a pagar is validated, except under Anglo-Saxon contabilidade com perpetual estoque valuation, where it is instead recognized as the Custo de Goods Sold when the cliente fatura is validated.',
                    'down-payment-account'              => 'Pagamento antecipado Conta',
                    'down-payment-account-hint-tooltip' => 'Selecionar the conta para which para baixo pagamentos de este categoria will be recorded.',
                ],
            ],
        ],
    ],
];
