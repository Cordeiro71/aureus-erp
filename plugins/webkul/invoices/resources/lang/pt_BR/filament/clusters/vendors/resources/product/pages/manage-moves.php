<?php

return [
    'title' => 'IN/OUT',

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
