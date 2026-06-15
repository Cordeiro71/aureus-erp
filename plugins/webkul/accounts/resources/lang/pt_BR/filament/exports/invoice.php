<?php

return [
    'columns' => [
        'number'           => 'Number',
        'state'            => 'State',
        'customer'         => 'Cliente',
        'invoice-date'     => 'Fatura Data',
        'due-date'         => 'Data de vencimento',
        'tax-excluded'     => 'Imposto Excluded',
        'tax'              => 'Imposto',
        'total'            => 'Total',
        'amount-due'       => 'Valor devido',
        'payment-state'    => 'Pagamento State',
        'checked'          => 'Checked',
        'accounting-date'  => 'Data contábil',
        'source-document'  => 'Origem Document',
        'reference'        => 'Referência',
        'sales-person'     => 'Vendas Person',
        'invoice-currency' => 'Fatura Moeda',
    ],

    'values' => [
        'yes' => 'Sim',
        'no'  => 'Não',
    ],

    'notification' => [
        'completed' => 'Your fatura exportar has concluído e :contagem linha(s) exported.',
        'failed'    => ':contagem linha(s) falhou para exportar.',
    ],
];
