<?php

return [
    'label'             => 'Validate',
    'modal-heading'     => 'Criar Ordem pendente?',
    'modal-description' => 'Criar a backorder if the remaining produtos will be processado depois. If não, do não gerar a backorder.',

    'extra-modal-footer-actions' => [
        'no-backorder' => [
            'label' => 'Não Backorder',
        ],
    ],

    'notification' => [
        'error' => [
            'title' => 'Validation Falhou',
        ],

        'warning' => [
            'lines-missing' => [
                'title' => 'Não quantidades are reservado',
                'body'  => 'Não quantidades are reservado para the transferência.',
            ],

            'no-quantities-reserved' => [
                'title' => 'Não quantidades are reservado',
                'body'  => 'Não quantidades are reservado para the transferência.',
            ],

            'lot-missing' => [
                'title' => 'Supply Lote/Número de série',
                'body'  => 'You need para supply a Lote/Número de série para produtos :produtos.',
            ],

            'serial-qty' => [
                'title' => 'Número de série Already Atribuído',
                'body'  => 'The número de série has already been atribuído a outro produto.',
            ],

            'partial-package' => [
                'title' => 'Can não movimento mesmo pacote conteúdo',
                'body'  => 'You cannot movimento the mesmo pacote contents more than once within a single transferência ou split the pacote entre two localizações.',
            ],
        ],
    ],
];
