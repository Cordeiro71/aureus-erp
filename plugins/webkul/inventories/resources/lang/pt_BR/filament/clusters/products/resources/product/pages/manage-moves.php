<?php

return [
    'title' => 'IN/OUT',

    'tabs' => [
        'todo'     => 'Para Do',
        'done'     => 'Concluído',
        'incoming' => 'Entrada',
        'outgoing' => 'Saída',
        'internal' => 'Interno',
    ],

    'table' => [
        'columns' => [
            'date'                 => 'Data',
            'reference'            => 'Referência',
            'product'              => 'Produto',
            'package'              => 'Pacote',
            'lot'                  => 'Lote / Números de série',
            'source-location'      => 'Origem Localização',
            'destination-location' => 'Destino Localização',
            'quantity'             => 'Quantidade',
            'unit'                 => 'Unidade',
            'state'                => 'State',
            'done-by'              => 'Concluído Por',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Movimento excluído',
                    'body'  => 'O Movimento foi excluído com sucesso.',
                ],
            ],
        ],
    ],
];
