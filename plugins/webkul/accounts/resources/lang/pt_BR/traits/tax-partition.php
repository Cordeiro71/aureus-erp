<?php

return [
    'form' => [
        'factor-percent'    => 'Fator Percent',
        'factor-ratio'      => 'Fator Proporção',
        'repartition-type'  => 'Repartition Tipo',
        'document-type'     => 'Document Tipo',
        'account'           => 'Conta',
        'tax'               => 'Imposto',
        'tax-closing-entry' => 'Imposto Closing Entry',
    ],

    'table' => [
        'columns' => [
            'factor-percent'    => 'Fator Percent(%)',
            'account'           => 'Conta',
            'tax'               => 'Imposto',
            'company'           => 'Empresa',
            'repartition-type'  => 'Repartition Tipo',
            'document-type'     => 'Document Tipo',
            'tax-closing-entry' => 'Imposto Closing Entry',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Imposto Partition atualizado',
                    'body'  => 'O Imposto partition foi atualizado com sucesso.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Imposto Partition Term excluído',
                    'body'  => 'O Imposto partition term foi excluído com sucesso.',
                ],
            ],
        ],

        'header-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Imposto Partition Term criado',
                    'body'  => 'O Imposto partition term foi criado com sucesso.',
                ],
            ],
        ],
    ],
];
