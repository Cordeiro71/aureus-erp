<?php

return [
    'post-action-validate' => [
        'customer-required'    => 'Please provide a válido Cliente para proceed com the Cliente Fatura validation.',
        'vendor-required'      => 'Please provide a válido Fornecedor para proceed com the Fornecedor Conta a pagar validation.',
        'bank-archived'        => 'The selected Parceiro Banco attached para este fatura is arquivado.',
        'negative-amount'      => 'Fatura can não be confirmado com a negative total valor.',
        'date-required'        => 'Please provide a válido Conta a pagar/Reembolso Data para proceed com the Conta a pagar/Reembolso validation.',
        'currency-archived'    => 'You cannot confirmar an fatura com an arquivado moeda.',
        'account-deprecated'   => 'One ou more linhas in este fatura are using deprecated contas.',
        'lines-required'       => 'Please adicionar at least one linha para the fatura.',
        'draft-state-required' => 'Only faturas in rascunho state can be confirmado.',
        'journal-archived'     => 'You cannot confirmar an fatura com an arquivado diário.',
    ],
];
